<?php
require_once 'vendor/autoload.php';
require_once 'src/JapanAniversary.php';

/**
 * Created by PhpStorm.
 * User: do9iigane
 * Date: 2015/10/13
 * Time: 16:15
 */
class index
{

    public function __construct()
    {
        $this->postdata = $_POST;
        $this->ja = new \src\JapanAniversary($this->postdata);
    }

    public function err_check()
    {
        $result = $this->ja->err_check($this->postdata);

        return $result;
    }
}

$class = new index();
$data = array();

if (!empty($class->postdata)) {
    $error = $class->ja->err_check($class->postdata);

    if ($error) {
        $data['error'] = $error;
    } else {
        $ja =
        $result = $class->ja->post_to_endpoint();
        if ($result) {
            $data['result'] = $result;
        }

    }
} else {
    $data = array('err' => 'not set parameters README.md is here. https://github.com/do9iigane/calapi');
}

echo json_encode($data);