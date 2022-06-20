<?php
$user = getenv("USER");
$pass = getenv("PASS");
$db = getenv("DB");

if($user == "") {
    $user = "mysql";   
}
if($pass == "") {
    $pass = "mysql";   
}
if($db == "") {
    $db = "mysql";   
}

$id = mysqli_connect("$db", "$user", $pass);
mysqli_select_db($id, "sampledb");
$qr = "create table lixo (lixo int)";
$rs = mysqli_query($id, $qr);
for($x=0;$x<10;$x++) {
    $qrins = "insert into lixo set lixo = '$x'";
    $rsins = mysqli_query($id, $qrins);
}
?>
