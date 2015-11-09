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
class freeword
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
        $this->postdata = isset($_POST)?$_POST:array();
        $this->ja = new \src\JapanAniversary($this->postdata);
    }

}

$class = new freeword();
$data = array();

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
}

$data['post_data'] = $class->postdata;

echo $class->twig->render('freeword.twig', array('data' => $data));