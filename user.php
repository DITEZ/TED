<?php
session_start();
include 'dbconnect.php';
if(isset($_POST['sign_user'])){
$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirm_password'];
$adm_no = $_POST['adm_no'];
$phone_no = $_POST['phone_no'];

if($password != $confirm_password){
    header('Location:signup.php');
    $_SESSION['error'] = "passwords don't match";
}

$password = sha1($password);

$sql = "INSERT INTO student (name,phone_no,adm_no,password) VALUES ('$username','$phone_no','$adm_no','$password')";


if ($conn->query($sql) === TRUE) {
    $_SESSION['username'] = $username;
    $_SESSION['adm_no'] = $adm_no;
        $_SESSION['phone_no'] = $phone_no;
    header('Location:index.php');
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
    header('Location:signup.php');
  }



}






if(isset($_POST['login_user'])){
    $username = $_POST['username'];
    $password = sha1($_POST['password']);
  
    
    $sql = "SELECT * FROM student WHERE name='$username' and password='$password' ";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
        // output data of each row
        $_SESSION['id'] = $row['id'];
        $_SESSION['username'] = $row['name'];
        $_SESSION['adm_no'] = $row['adm_no'];
        $_SESSION['phone_no'] = $row['phone_no'];
        header('Location:index.php');
      } else {
        $_SESSION['error'] = "passwords is incorrect";
        header('Location:login.php');
      }
 
    
    }
?>