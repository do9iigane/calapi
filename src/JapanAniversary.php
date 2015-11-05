<?php
namespace src;

    /**
     * Created by PhpStorm.
     * User: do9iigane
     * Date: 2015/10/13
     * Time: 16:09
     */

/**
 * Class JapanAniversary
 * @package src
 */
class JapanAniversary
{

    /**
     * @var null
     */
    public $post = array();

    /**
     * @param $post
     */
    public function __construct($post)
    {

        //endpoint
        //http://www.kinenbi.gr.jp/

        if(isset($post['keyword'])){
            $this->post['K'] = $post['keyword'];
        }

        if(isset($post['search_key'])){
            $this->post['SK'] = $post['search_key'];
        }
        if(isset($post['month'])){
            $this->post['M'] = $post['month'];
        }

        if(isset($post['day'])){
            $this->post['D'] = $post['day'];
        }
        if(isset($post['MD'])){
            $this->post['MD'] = $post['MD'];
        }

        $this->endpoint_url = "http://www.kinenbi.gr.jp/";
    }

    public function post_request()
    {
        //POSTデータ
        $fromdata = $this->post;
        $data = http_build_query($fromdata, "", "&");

        //header
        $header = array(
            "Content-Type: application/x-www-form-urlencoded",
            "Content-Length: " . strlen($data)
        );

        $context = array(
            "http" => array(
                "method" => "POST",
                "header" => implode("\r\n", $header),
                "content" => $data
            )
        );


        return file_get_contents($this->endpoint_url, false, stream_context_create($context));
    }

    /**
     * @return bool
     */
    public function post_to_endpoint()
    {
        $get_result = $this->post_request();

        preg_match('/<div class="today_kinenbilist">(.*?)<\/div>/s', $get_result, $match);

        $result = $this->parse_lines($match[1]);

        return $result;
    }

    /**
     * @param $string
     * @return bool
     */
    public function parse_lines($string)
    {
        $string = trim($string);
        $result = false;

        if (!empty($string)) {
            $lines = explode("\n", $string);
            $cnt = 0;
            for ($i = 0; $i < count($lines); $i++) {
                preg_match('/winDetail" href="yurai.php\?(.*?)"><FONT style="font-size: 12px; line-height: 1.5em;" color="#666666">(.*?)<\/FONT>/',
                    $lines[$i], $match1);

                preg_match('/<FONT size="2">(.*)月(.*)日<\/FONT><\/TD>/',
                    $lines[$i], $match2);

                if (!empty($match1[1])) {
                    $result[$cnt]['description'] = $this->get_detail_string($match1[1]);
                    $result[$cnt]['name'] = str_replace('</B>', '', str_replace('<B>', '', $match1[2]));
                }

                if (!empty($match2[1])) {
                    $result[$cnt]['month'] = str_pad($match2[1], 2, 0, STR_PAD_LEFT);
                    $result[$cnt]['day'] = str_pad($match2[2], 2, 0, STR_PAD_LEFT);
                    $cnt++;
                } elseif (empty($match2[1]) && isset($result[$cnt]['name']) && isset($this->post['M'])) {
                    $result[$cnt]['month'] = $this->post['M'];
                    $result[$cnt]['day'] = $this->post['D'];
                    $cnt++;
                }

            }

        }

        return $result;

    }

    /**
     * @param $str
     * @return bool
     */
    public function get_detail_string($str)
    {
        $MD = null;
        $NM = null;

        parse_str($str);

        $requeststr = "http://www.kinenbi.gr.jp/yurai.php?MD=$MD&NM=$NM";

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $requeststr);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        $data = curl_exec($ch);
        curl_close($ch);

        preg_match('/line-height: 200%;">(.*?)<\/p><\/TD>/', $data, $match);

        if (isset($match[1])) {
            return $match[1];
        } else {
            return false;
        }

    }
}