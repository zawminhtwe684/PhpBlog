<?php

require_once "base.php";
//commom start
 function alert($data,$color="danger"){
     return "<p class='alert alert-$color'>$data</p>";
 }

 function runQuery($sql){
     if(mysqli_query(con(),$sql)){
         return true;
     }else{
         alert ("Db Error!");
     }
 }

 function redirection($location){
     header("location:$location");
 }


//common stop

//auth-start
function register(){
    $name=$_POST['name'];
    $email=$_POST['email'];
    $pass=$_POST['pass'];
    $cpass=$_POST['cpass'];


    if($pass==$cpass){
        $securePass=password_hash($pass,PASSWORD_DEFAULT);
        $sql= "Insert Into users (name,email,password) values ('$name','$email','$securePass')";
//        die($sql);
        if (runQuery($sql)){
            redirection("login.php");
        }
    }else{
        return alert ("Password don't match");
    }
}
//auth-stop

//login start
    function login(){
        $email=$_POST['email'];
        $pass=$_POST['pass'];
        $sql="SELECT * FROM users WHERE email='$email'";
        $query=mysqli_query(con(),$sql);
        $row=mysqli_fetch_assoc($query);
//        print_r($row);
            if(!$row){
                return alert ("Email and Password don't match!");
            }else{
         //   print_r($row);
                 if(!password_verify($pass,$row['password'])){
                     return alert ("Email and Password don't match!");
                 }else{
                     return alert('user iformation succeful',"success");
                 }
            }



    }
//login stop
?>