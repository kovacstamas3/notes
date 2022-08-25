<?php 
session_start();
include "connect.php";

if(isset($_POST['username']) && isset($_POST['password'])){
    function validate($data){
        $data = trim($data);
        $data = stripslashes($data);
        $data = htmlspecialchars($data);
        return data;
    }
}

$username = validate($_POST['username']);
$password = validate($_POST['password']);

if(empty($username)){
    header('Location: user.php?erro=User Name is required.');
    exit();
}

else if(empty($password)){
    header('Location: user.php?erro=Password Password is required.');
    exit();
}

$sql = "SELECT * FROM users WHERE user_name='$username' AND password='$password'";

$result = mysqli_query($conn, $sql);

if(mysqli_num_rows($result) === 1){
    $row = mysqli_fetch_assoc($result);
    if($row['user_name'] === $username & $row['password'] === $password){
        echo 'Logged In!';
    $_SESSION['user_name'] = $row['username'];
    $_SESSION['password'] = $row['password'];
    $_SESSION['id'] = $row['id'];
    header('Location: notes.php');
    }

else{
    header('Location: signup.php?error=Incorrect Username Or Password');
    exit();
}

else{
    header('Location: signup.php ');
    exit();
}
}
?>

