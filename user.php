<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://kit.fontawesome.com/04a73e5734.js" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <link rel="stylesheet" type="text/css" href="style.css" />
    <script src="https://kit.fontawesome.com/04a73e5734.js" crossorigin="anonymous"></script>
    <title>Log in</title>
</head>
<body>
<center><h1> Login <i class="fa-solid fa-bone"></i></h1></center>
<hr class="mx-auto text-white w-50" />

<!-- start login -->
<center>
<form action="connect.php" method="POST" style="margin: 4rem;"> 
<?php if(isset($_GET['error'])){ ?>
    <p class="error"><?php echo $_GET['error']; ?></p>
<?php } ?>
<label for="username" style="color:white;"> Name: </label> <br>
<input type="text" name="username" id="name" /><br><br>

<label for="password" style="color:white;"> Password: </label><br>
<input type="password" name="password" id="password" /><br><br>

<input type="submit" name="submit" id="submit" value="Login" />

</form>

<p style="color:white ;"> Don't have an account? <a href="signup.php" id="sign">Sign up!</a></p>
</center>
<!-- end login -->

<footer>
    <center><a href="index.php"><h3><i class="fa-solid fa-house"></i> Homepage</h3></a></center>
</footer>
</body>
</html>