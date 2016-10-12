<?php
 require("phpMQTT.php");
  $host = $_POST['server']; 
  $port = $_POST['port'];
  $username = $_POST['username']; 
  $password = $_POST['password']; 
  $message = $_POST['message'];
  $topic = $_POST['topic'];
  //MQTT client id to use for the device. "" will generate a client id automatically
  $mqtt = new phpMQTT($host, $port, "ClientID".rand()); 

  if ($mqtt->connect(true,NULL,$username,$password)) {
    $mqtt->publish($topic,$message, 0);
    $mqtt->close();
    echo "message send";
  }else{
    echo "Fail or time out<br />";
  }


?>
