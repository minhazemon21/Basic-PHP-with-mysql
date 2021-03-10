<?php
include "connection.php";
$id=$_GET['id'];
$q="select * from users where id=$id";

$result=mysqli_query($conn,$q);

while($row=mysqli_fetch_array($result)){
echo "name:".$row['name']."</br>";
echo "id:".$row['id']."</br>";
echo "username:".$row['username']."</br>";
echo "age:".$row['age']."</br>";
echo "name:".$row['pass_word']."</br>";
}
?>
