<?php
include('DB-Connection.php');
    $Username = $_REQUEST['Username'];
    $Password = $_REQUEST['Password'];
    
$sql = "SELECT * from staff WHERE id_staff='".$Username."' and password_staff ='".$Password."' ";
$Result = mysql_query($sql) or die(mysql_error());

$countResult = mysql_num_rows($Result);
if ($countResult == 0){
   echo "<meta http-equiv = 'refresh' content = '100000; url=../index.php'>";
}
else{
   echo "<meta http-equiv = 'refresh' content = '0; url=../admin/modul/beranda.php'>";
}

    