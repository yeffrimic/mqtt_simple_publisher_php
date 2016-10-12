<?php
 require("phpMQTT.php");
  $host = $_POST['server']; 
  $port = $_POST['port'];
  $username = $_POST['username']; 
  $password = $_POST['password']; 
  $message = $_POST['message'];
  $topic = $_POST['topic'];
  $clientID = $_POST['ClientID'];
  //MQTT client id to use for the device. "" will generate a client id automatically
  $mqtt = new phpMQTT($host, $port, $clientID); 

  if ($mqtt->connect(true,NULL,$username,$password)) {
    $mqtt->publish($topic,$message, 0);
    $mqtt->close();
    echo "message send";
  }else{
    echo "Fail or time out<br />";
  }


?>
