<?php
require_once 'japanAniversary.php';

/**
 * Created by PhpStorm.
 * User: do9iigane
 * Date: 2015/11/09
 * Time: 11:29
 */

class herokuPostTest extends \PHPUnit_Framework_TestCase
{
    /**
     * @test
     * @dataProvider for_postRequest
     */
    public function postRequest($assertion,$post_data)
    {
        $data = http_build_query($post_data, "", "&");

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

        $url = "http://kinenbiapi.herokuapp.com/";
        $result = file_get_contents($url, false, stream_context_create($context));

        $result_decoded = json_decode($result,true);

        $this->assertEquals($assertion,count($result_decoded['result']));
    }

    public function for_postRequest(){
        return array(
            array(10,array("mode" => "date","month" => 7,"day" => 7)),
            array(1,array("mode" => "freeword","keyword" => "ポッキー","search_key" => 0)),
            array(1,array("mode" => "freeword","keyword" => "新聞","search_key" => 1)),
        );
    }

}