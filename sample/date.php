<?php
namespace sample;

require_once '../vendor/autoload.php';
require_once '../src/JapanAniversary.php';

/**
 * Created by PhpStorm.
 * User: do9iigane
 * Date: 2015/10/13
 * Time: 16:15
 */
class day
{

    public $twig = null;

    public function __construct()
    {
        //twig load.
        $loader = new \Twig_Loader_Filesystem('./template');
        $this->twig = new \Twig_Environment($loader, array(
            'cache' => './cache',
            'debug' => true
        ));
        $this->postdata = $_POST;
        $this->ja = new \src\JapanAniversary($this->postdata);
    }
}

$class = new day();
$data = array();
$data['range']['month'] = range(1, 12);
$data['range']['day'] = range(1, 31);

if (!empty($class->postdata)) {
    $error = $class->ja->err_check($class->postdata);

    if ($error) {
        $data['error'] = $error;
    } else {
        $result = $class->ja->post_to_endpoint();

        if ($result) {
            $data['result'] = $result;
        }

    }
}else{
    $class->postdata['month'] = $class->ja->post['M'] = date('m');
    $class->postdata['day'] = $class->ja->post['D'] = date('d');

    $data['result'] = $class->ja->post_to_endpoint();

}

$data['post_data'] = $class->postdata;

echo $class->twig->render('date.twig', array('data' => $data));