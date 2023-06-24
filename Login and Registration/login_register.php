<?php
$servername="localhost";
$username="root";
$password="";
$databasename="login and registration";

$con=mysqli_connect($servername,$username,$password,$databasename);

if(!$conn)
{
    die("Connection failed:" >mysqli_connect_error());

}
if(isset($_post['save']))
{
  $username=$_POST['username'];
  $email=$_POST['email'];
  $Age=$_POST['Age'];
  $DOB=$_POST['DOB'];
  $phone_num=$_POST['phone_num'];
  $password=$_POST['password'];

  $sql_query="INSERT INTO  login and registration(username,mail,Age,DOB,phone_num,password)
  VALUES('$username,$email,$Age,$DOB,$phone_num,$password)";

  if(mysqli_query($conn,$sql_query))
  {
    echo "New details inserted successfully!!";

  }
  else{
    echo "Error: ". $sql . "" . mysqli_error($conn);
  }
  mysqli_close($conn);
}
?>