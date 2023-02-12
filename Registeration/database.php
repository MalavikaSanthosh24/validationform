<?php

include '../connection.php';


if(isset($_POST['dbbt'])){
  $name= $_POST['fname'];
  $emailid= $_POST['mail'];
  $phone= $_POST['mob'];
  $user= $_POST['personname'];
  $password= $_POST['word'];

  $pdoQuery ="INSERT INTO  register (name ,emailid , phone, user, password) VALUES(?,?,?,?,?)";
  $pdoQuery_run= $pdodbcon->prepare($pdoQuery);
  $pdoQuery_exec=$pdoQuery_run-> execute([$name,$emailid,$phone,$user,$password]);

  print_r($pdoQuery_exec);
   
}
?> 