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
    }

    public function err_check($post)
    {
        $result = array();
        if (empty($post['M'])) {
            $result['M'] = "キーワードが設定されていません";
        }
        if (empty($post['D'])) {
            $result['D'] = "検索方法を選択してください";
        }
        if (empty($post['MD'])) {
            $result['MD'] = "正しく処理できませんでした";
        }

        return $result;
    }
}

$class = new day();
$data = array();
$data['range']['month'] = range(1, 12);
$data['range']['day'] = range(1, 31);

if (!empty($_POST)) {
    $data['post_data'] = $_POST;
    $error = $class->err_check($_POST);

    if ($error) {
        $data['error'] = "キーワードが設定されていません";
    } else {
        $ja = new \src\JapanAniversary($_POST);
        $result = $ja->post_to_endpoint();

        if ($result) {
            $data['result'] = $result;
        }

    }
}

echo $class->twig->render('day.twig', array('data' => $data));