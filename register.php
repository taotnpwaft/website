<?php 
require('DatabaseHelper.php');
if (isset($_REQUEST['username'])){
        $result = CreateUser($_REQUEST['email'], $_REQUEST['username'], $_REQUEST['password']);
        $responseArr = array();
        if($result){
        $responseArr['code'] = 200;
        $responseArr['msg'] = '<span class="success">You are registered successfully.</span>';
    }else{
        $responseArr['code'] = 400;
        $responseArr['msg'] =  '<span class="error">Error occured while registration</span>';
 } 
 echo json_encode($responseArr, JSON_PRETTY_PRINT);
}
