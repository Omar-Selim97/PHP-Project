<?php
//to connect with database ['host','user','pass','abName']
$conn = mysqli_connect('localhost','Admin','123456','win');
if (!$conn){
    echo 'Error : ' . mysqli_connect_error();
}
?>