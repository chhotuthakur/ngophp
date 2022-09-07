<?php 

$dbhost='localhost';
$dbuser = 'root';
$dbpass = '';
$dbname = 'ngo';


$conn = mysqli_connect($dbhost,$dbuser,$dbpass,$dbname);

if ($conn) {

echo "success";
    # code...
}






?>