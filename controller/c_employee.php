<?php
$data=array();
flexible_function($data);
function flexible_function(&$data){
    $function= "login";
    if(isset($_GET['action'])){
        $action = $_GET['action'];
        $function =$action;
    }
   echo $function($data); 
}
function login(&$data){
    $data['page']='employee/login'; 
    $data['employee_data']= loginValidation();
    // var_dump($data['employee_data']);
}
function logout(&$data){
    // logout
    if(isset($_POST['but_logout'])){
        session_destroy();
        
        header('Location: index.php?view=login');
    }
}

function adduser(&$data){
    $data['page']='employee/adduser';
    $data['employee_data']= user();  
}

function insert_user(&$data){
    $data['page']='employee/adduser';
    $data['add_data']=user_insert_data();
} 

function view(&$data){
    $data['page']='employee/view'; 
    $data['employee_data']= m_get_user();
    // var_dump($data['employee_data']);
}
