<html>
<head>
<link rel="stylesheet" href="style.css">
<title> CSS Login Screen Tutorial </title>
<style>
@import url(https://fonts.googleapis.com/css?family=Roboto:300);
header .header{
  background-color: #fff;
  height: 45px;
}
header a img{
  width: 134px;
margin-top: 4px;
}
.login-page {
  width: 360px;
  padding: 8% 0 0;
  margin: auto;
}
.login-page .form .login{
  margin-top: -31px;
margin-bottom: 26px;
}
.form {
  position: relative;
  z-index: 1;
  background: 00FFFFFF;
  max-width: 360px;
  margin: 0 auto 100px;
  padding: 45px;
  text-align: center;
  box-shadow: 0 0 20px 0 rgba(0, 0, 0, 0.2), 0 5px 5px 0 rgba(0, 0, 0, 0.24);
    box-shadow:10px 10px 30px black;
  
}
.form input {
  font-family: "Roboto", sans-serif;
  outline: 0;
  background: #f2f2f2;
  width: 100%;
  border: 0;
  margin: 0 0 15px;
  padding: 15px;
  box-sizing: border-box;
  font-size: 14px;
  border-radius:10px;
}
.form button {
  font-family: "Roboto", sans-serif;
  text-transform: uppercase;
  outline: 0;
  background-color: #328f8a;
  background-image: linear-gradient(45deg,#328f8a,#08ac4b);
  width: 100%;
  border: 0;
  padding: 15px;
  color: #FFFFFF;
  font-size: 14px;
  -webkit-transition: all 0.3 ease;
  transition: all 0.3 ease;
  cursor: pointer;
   border-radius:10px;
}
.form .message {
  margin: 15px 0 0;
  color: #000000;
  font-size: 16px;
}
.form .message a {
  color: #000000;
  text-decoration: none;
}

.container {
  position: relative;
  z-index: 1;
  max-width: 300px;
  margin: 0 auto;

}

body {
  background-color: #328f8a;
  background-image: url('https://pickyourtrail.com/blog/wp-content/uploads/2020/05/nils-nedel-ONpGBpns3cs-unsplash-scaled.jpg');
  background-size: cover;
  font-family: "Roboto", sans-serif;
  -webkit-font-smoothing: antialiased;
  -moz-osx-font-smoothing: grayscale;
}
</style>
</head>
<body>
<?php
include 'connect.php';
if(isset($_POST["submit"]))
{

$uname =$pwd ="";
$uname = $_POST["uname"];
$pwd = $_POST["password"];
if($con)
{
    $query= "INSERT INTO `info`( `username`, `password`) VALUES ('$uname','$pwd')";
    if(mysqli_query($con,$query))
    {
        echo"<script>alert('Sucessfully Login!')</script>";
    }
    else{
        echo "error";
    }
}
}

?>
  <body>
    <div class="login-page">
      <div class="form">
        <div class="login">
          <div class="login-header">
            <h3 style="font-size:30px;">SIGN IN</h3>
            <p><b>Please enter your credentials to sign in.<b></p>
          </div>
        </div>
        <form class="login-form" action="sginup.php" method="post">
          <input type="text" name="uname" placeholder="username"/>
          <input type="password" name="password" placeholder="password"/>
          <button value="submit" name="submit">submit</button>
          <p class="message"><a href="travelling.html"><b>Not registered?</a><b><a href="login.html"><b>Create an account</a><b></p>
        </form>
      </div>
    </div>
</body>
</body>
</html>