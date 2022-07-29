<?php
$name = $_POST['name'];
$email = $_POST['email'];
$date = $_POST['date'];
$time = $_POST['time'];
$select = $_POST['select'];

$mailheader = "from: ".$name."<".$email. ">\r\n";

$recipient = "ym1233445@gmail.com";

mail($recipient , $date , $time , $select , $mailheader )
or die("Error!");

echo"message send";



?>