<?php 

    // function user link to form register
    function user(){
        include "connection.php";
        if(isset($_POST['adduser'])){
        header('Location: index.php?action=adduser');
        } 
    }
    // function select user from database
    function m_get_user(){
        $query ="SELECT  * FROM user";
        include "connection.php";
        $result=mysqli_query($conn,$query);
        $rows = [];
        if($result && mysqli_num_rows($result)>0){
            while ($get_result_to_array=mysqli_fetch_array($result,MYSQLI_ASSOC)){
                $rows[]=$get_result_to_array;
            }
        }
        return $rows;
    }
    
    // function add user to database
    function user_insert_data(){
        include_once "connection.php";
        if(isset($_POST['user_add'])){
            $username=$_POST['username'];
            $name=$_POST['name'];
            $password=$_POST['txt_pwd'];
           
        $query= "INSERT INTO user(username,name,password) VALUES('$username','$name','$password')";
        $result= mysqli_query($conn,$query);
        }
        
    }
    
    // function validate when user login
    function loginValidation(){
        include "connection.php";
        if(isset($_POST['but_submit'])){

            $uname = mysqli_real_escape_string($conn,$_POST['txt_uname']);
            $password = mysqli_real_escape_string($conn,$_POST['txt_pwd']);
            if ($uname != "" && $password != ""){
        
                $sql_query = "select count(*) as cntUser from user where username='".$uname."' and password='".$password."'";
                $result = mysqli_query($conn,$sql_query);
                $row = mysqli_fetch_array($result);
        
                $count = $row['cntUser'];
        
                if($count > 0){
                    $_SESSION['uname'] = $uname;
                    header('Location: index.php?action=view');
                }else{
                    header('Location: index.php?action=login');
                }
            }
        }
    } 
?>