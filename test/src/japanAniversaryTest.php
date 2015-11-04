<?php
require_once 'japanAniversary.php';
/**
 * Created by PhpStorm.
 * User: do9iigane
 * Date: 2015/10/14
 * Time: 10:28
 */

/**
 * Class japanAniversaryTest
 */
class japanAniversaryTest extends PHPUnit_Framework_TestCase
{

    /**
     * @test
     * @dataProvider for_post_to_endpoint
     * @param $post_data
     * @param $assert_count
     */
    public function post_to_endpoint($post_data, $assert_count)
    {

        $ja = new \src\JapanAniversary($post_data);
        $result = $ja->post_to_endpoint();

        $this->assertEquals(count($result), $assert_count);

    }

    /**
     * @return array
     */
    public function for_post_to_endpoint()
    {
        return array(
            array(array('MD' => '2', 'K' => 'ソーセージ パンケーキ', 'SK' => '0'), 1),
            array(array('MD' => '2', 'K' => 'ソーセージ パンケーキ', 'SK' => '1'), 4),
            array(array('MD' => '2', 'K' => 'ソーセージ パンケーキ', 'SK' => '2'), 4),
            array(array('MD' => '1', 'K' => 'ソーセージ パンケーキ', 'SK' => '0'), 1),
            array(array('MD' => '1', 'K' => 'ソーセージ パンケーキ', 'SK' => '1'), 1),
            array(array('MD' => '1', 'K' => 'ソーセージ パンケーキ', 'SK' => '2'), 1),
            array(array('MD' => '2', 'K' => 'ソーセージ', 'SK' => '0'), 4),
            array(array('MD' => '2', 'K' => 'ソーセージ', 'SK' => '1'), 4),
            array(array('MD' => '2', 'K' => 'ソーセージ', 'SK' => '2'), 4),
            array(array('MD' => '1', 'K' => 'ソーセージ', 'SK' => '0'), 1),
            array(array('MD' => '1', 'K' => 'ソーセージ', 'SK' => '1'), 1),
            array(array('MD' => '1', 'K' => 'ソーセージ', 'SK' => '2'), 1),
            array(array('MD' => '2', 'K' => '', 'SK' => '0'), 1),
            array(array('MD' => '2', 'K' => '', 'SK' => '1'), 1),
            array(array('MD' => '2', 'K' => '', 'SK' => '2'), 1),
            array(array('MD' => '1', 'K' => '', 'SK' => '0'), 1),
            array(array('MD' => '1', 'K' => '', 'SK' => '1'), 1),
            array(array('MD' => '1', 'K' => '', 'SK' => '2'), 1),
        );
    }


    /**
     * @test
     * @dataProvider for_post_request
     * @param $post_data
     * @param $assert_length
     */
    public function post_request($post_data, $assert_length)
    {
        $ja = new \src\JapanAniversary($post_data);
        $result = $ja->post_request();
        $this->assertEquals(strlen($result), $assert_length);
    }

    /**
     * @return array
     */
    public function for_post_request()
    {
        return array(
            array(array('K' => 'ソーセージ パンケーキ'), 26952),
            array(array('K' => 'りんご'), 26842),
            array(array('K' => ''), 26797),
        );
    }

    /**
     * @test
     * @dataProvider for_parse_lines
     * @param $string
     * @param $assert
     */
    public function parse_lines($string, $assert, $assert_count, $assert_name)
    {
        $result = null;
        $ja = new \src\JapanAniversary(null);
        $result = $ja->parse_lines($string);

        $this->assertEquals(is_array($result), $assert);
        $this->assertEquals(strlen($result[0]['description']), $assert_count);
        $this->assertEquals($result[0]['name'], $assert_name);
    }

    /**
     * @return array
     */
    public function for_parse_lines()
    {
        return array(
            array(
                'winDetail" href="yurai.php?MD=3&NM=1429"><FONT style="font-size: 12px; line-height: 1.5em;" color="#666666">豆腐の日</FONT>',
                true,661,"豆腐の日"
            ),
            array(
                'winDetail" href="yurai.php?NM=7177"><FONT style="font-size: 12px; line-height: 1.5em;" color="#666666">豆腐の日</FONT>',
                true,0,"豆腐の日"
            ),
            array(
                'winDetail" href="yurai.php?MD=1"><FONT style="font-size: 12px; line-height: 1.5em;" color="#666666">豆腐の日</FONT>',
                true,0,"豆腐の日"
            ),
            array(
                'winDetail" href="yurai.php?"><FONT style="font-size: 12px; line-height: 1.5em;" color="#666666">豆腐の日</FONT>',
                false,0,null
            ),
        );

    }
}
