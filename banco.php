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
$qr = "select * from lixo";
$rs = mysqli_query($id, $qr);
while($x=mysqli_fetch_array($rs)) {
    $lixo = $x['lixo'];
    echo $lixo."<br>\n";
}
?>
