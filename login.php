<?php 
if(isset($_POST['uname']) and isset($_POST['psw'])){
  if(isset($_COOKIE[$_POST['uname']]) and ($_COOKIE[$_POST['uname']]==$_POST['psw'])){
    echo '<div style="font-size: 3rem; color:red;">Login Successful!</div>';
    echo '<script type="text/javascript">location.href = "home.php";</script>';
  }
  else{
    echo '<div style="font-size: 3rem; color:red;">* Username or password is incorrect!</div>';
  }
}
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Login - Horizon Photography</title>
    <link rel="stylesheet" href="camera_store.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Lobster" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel='stylesheet' type='text/css'>
    <script>
      function showPass() {
        var x = document.getElementById("psw");
        if (x.type === "password") {
          x.type = "text";
        } 
        else {
          x.type = "password";
        }
      }
    </script>
  </head>
  <body class="logregindbody">
  <span class="tag" style="margin-top: -15rem; text-align: center;">Horizon Photography</span>
    <form class="logform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
          <legend id="formtext" style="font-family: 'Lobster'; font-size: 3rem; font-weight: bold; color: #634298;">Login</legend>
          
          <label id="formtext" for="uname">Username:</label>
          <input type="text" id="uname" name="uname" placeholder="Login ID" required="required" style="margin-left: 1rem;"/><br /><br/>
          
          <label id="formtext" for="psw" style="margin-right: 0.5rem;">Password:</label>
          <input type="password" id="psw" name="psw" placeholder="Password" required="required" style="margin-left: 1.1rem;"/><br /><br/>
          
          <label id="formtext" for="showp" style="margin-right: 0.5rem; margin-top: 100rem; font-size: 1.5rem;">Show Password:</label>
          <input type="checkbox" id="showp" onclick="showPass()" style="vertical-align: middle;"><br/><br/><br/>
          
          <input id="formsub" type="submit" value="Submit" style="width: 10rem; height: 3rem; color: white; border-radius: 5px;"/> <br /> <br />
          
          <p style="font-size: 1.6rem;">New User? <a href="register.php">Register</a></p>
        </fieldset>
    </form>
    <footer style="margin-top: 8%; color: white;">&#169Horizon Technologies, 2021</footer>
  </body>
</html>