<?php
session_start();
$link = mysqli_connect("localhost","root","");
mysqli_select_db($link,"project");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta charset="utf-8">
    <link rel="stylesheet" href="admin/css/form.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="short icon" href="images/favicon.png" type="image/gif">
    <title>Login</title>
    <style>
        .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        -ms-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>
</head>
<div class="container col-sm-4 mt-5">

    <body class="text-center">
        <form class="form-signin" name="form1" action="" method="post">
            <img class="mb-4" src="https://static-s.aa-cdn.net/img/gp/20600007210739/Ul0jwq4PHv2Vpk4tnI0fp_59r7PMYylQT4buDM_Pf6PWaLn2Ybl3K_FacknuNl7WVgQ=s300?v=1" alt="" width="72" height="72">
            <h1 class="h3 mb-4 font-weight-normal">Login</h1>
            <label for="inputname" class="sr-only">User Name</label>
            <input type="text" id="inputname" name="username" class="form-control  mb-3" placeholder="User Name" required autofocus>
            <label for="inputPassword" class="sr-only">Password</label>
            <input type="password" id="inputPassword" name="password" class="form-control  mb-3" placeholder="Password" required>
            <!-- <div class="checkbox mb-3">
                <label>
                    <input type="checkbox" value="remember-me"> Remember me
                </label>
            </div> -->
            <input class="btn btn-lg btn-danger btn-block text-white" type="submit" name="submit1">
            <br>
            <small><a href="../index.php">Back to Home Page</a></small>
            <p class="mt-5 mb-3 text-muted">UsmanAliWallara&copy; 2020</p>
        </form>
</div>
</body>

</html>
<?php
if(isset($_POST["submit1"]))
{
    $res=mysqli_query($link,"select * from admin_login where username='$_POST[username]' && password='$_POST[password]'");
    while($row=mysqli_fetch_array($res))
    {
        $_SESSION["admin"] = $row["username"];
        ?>
        <script type="text/javascript">
            window.location ="admin.php";
        </script>
        <?php
    }
}

?>