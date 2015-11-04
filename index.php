<?php
require_once 'vendor/autoload.php';
require_once 'src/JapanAniversary.php';
/**
 * Created by PhpStorm.
 * User: do9iigane
 * Date: 2015/10/13
 * Time: 16:15
 */

class index {

    public function __construct(){
    }

    public function err_check($post){
        $result =array();
        if(empty($post['K'])){ $result['K'] = "キーワードが設定されていません";}
        if(empty($post['K'])){ $result['SK'] = "検索方法を選択してください";}
        if(empty($post['K'])){ $result['MD'] = "正しく処理できませんでした";}

        return $result;
    }
}

$class = new index();
$data = array();

if(!empty($_POST)){
    $data['post_data'] = $_POST;
    $error = $class->err_check($_POST);

    if($error){
        $data['error'] =  "キーワードが設定されていません";
    }else {
        $ja = new \src\JapanAniversary($_POST);
        $result = $ja->post_to_endpoint();
        if($result){
            $data['result'] = $result;
        }

    }
}else{
    $data = array('err'=>'not set parameters');
}

echo json_encode($data);