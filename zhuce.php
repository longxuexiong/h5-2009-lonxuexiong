<?php
    header("content-type:text/html;charset=utf-8");
    $name=$_POST['name'];
    $word=$_POST['word'];
    $com = mysqli_connect('localhost','root','root','shop');
    $jia = "INSERT INTO `denglu` (`_name`,`word`) VALUES ('$name','$word')";
    $res = mysqli_query($com,$jia);
    
    if($res){
           echo "1";
    }else{
           echo "0" ;
    };
    mysqli_close($com);
?>