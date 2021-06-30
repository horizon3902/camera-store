<?php
$nameErr = $emailErr = $genderErr = $unErr = $pswErr = $phNoErr = "";
$name = $email = $gender = $comment = $username = $password = $phNo = "";
if ($_SERVER["REQUEST_METHOD"] == "POST") { 
  if(empty($_POST['name'])){
    $nameErr = "* Name is required!\n";
    echoError($nameErr);
  }
  if(!empty($_POST['name']) and !filter_var($_POST['name'],FILTER_VALIDATE_REGEXP,array("options" => array("regexp"=>"/^[a-zA-Z-' ]*$/")))){
    $nameErr = "* Please enter name correctly!\n";
    echoError($nameErr);
  }
  if(empty($_POST['gender'])){
    $genderErr = "* Gender is required!";
    echoError($genderErr);
  }
  if(!empty($_POST['phNo']) and !filter_var($_POST['phNo'],FILTER_VALIDATE_INT)){
    $phNoErr = '* Phone Number Incorrect!';
    echoError($phNoErr);
  }
  if(empty($_POST['email']) or !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL)){
    $phNoErr = "* Email is required!";
    echoError($phNoErr);
  }
  $flag = 1;
  if(empty($_POST['uname'])){
    $unErr = "* Username is required!";
    echoError($unErr);
    $flag = 0;
  }
  if(!filter_var($_POST['uname'],FILTER_VALIDATE_REGEXP,array("options" => array("regexp"=>"/^\S*(?=\S{8,})\S*$/")))){
    $unErr = "* Username should contain atleast 8 characters!";
    echoError($unErr);
    $flag = 0;
  }
  
  if(empty($_POST['psw'])){
    $pswErr = "* Password is required!";
    echoError($pswErr);
    $flag = 0;
  }

  if(!filter_var($_POST['psw'],FILTER_VALIDATE_REGEXP,array("options" => array("regexp"=>"/^\S*(?=\S{8,})(?=\S*[a-z])(?=\S*[\W])(?=\S*[A-Z])(?=\S*[\d])\S*$/")))){
    $pswErr = "* Password should contain atleast 8 characters, with atlease one capital, one small, one special character and one number!";
    echoError($pswErr);
    $flag = 0;
  }
  elseif($flag){
    $username = $_POST['uname'];
    $password = $_POST['psw'];
    setcookie($username,$password);
    echo "<script>alert('Registration Successful! Use your newly created username and password at the login page!');</script>";
    echo '<script type="text/javascript">location.href = "login.php";</script>';
  }
  
}
function echoError($error){
  echo '<div style="font-size: 2rem; color:red; display: inline-block; vertical-align: top;">'. $error.'</div>';
}
?>

<html>
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" charset="UTF-8">
    <title>Register - Horizon Photography</title>
    <link rel="stylesheet" href="camera_store.css?v=<?php echo time(); ?>">
    <link href="https://fonts.googleapis.com/css2?family=Lobster" rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css2?family=Nunito" rel='stylesheet' type='text/css'>
  </head>
  <body class="logregindbody">
    <span class="tag" style="margin-top: -15rem; text-align: center;">Horizon Photography</span>
    <form class="regform" action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <fieldset>
          <legend id="formtext" style="font-family: 'Lobster'; font-size: 3rem; font-weight: bold; color: #634298;">Register</legend>
          
          <label id="formtext" for="name" style="padding-left: -1.5rem;">Name:</label>
          <input id="name" name="name" placeholder="Full Name" style="margin-left: 4.2rem;"/><br /><br/>

          <label id="formtext" style="margin-left: -21rem;">Gender:</label><br />
          <input type="radio" id="male" name="gender" value="male"/>
          <label for="male" id="formtext">Male</label>
          <input type="radio" id="female" name="gender" value="female"/>
          <label for="female" id="formtext">Female</label>
          <input type="radio" id="other" name="gender" value="other"/>
          <label for="other" id="formtext">Non-Binary</label><br /><br /><br />

          <label for="dob" id="formtext" style="margin-left: -6rem;">D.O.B:</label>
          <input type="date" name="dob" id="dob" style="margin-left: 5rem;"/><br /><br /><br />

          <label id="formtext" for="phNo">Contact:</label>
          <input type="text" id="phNo" name="phNo" placeholder="Phone Number" style="margin-left: 3rem;" /><br /><br /><br />

          <label id="formtext" for="email" style="margin-left: 0.5rem;">Email:</label>
          <input type="text" id="email" name="email" style="margin-left: 5rem;" placeholder="example@email.com"/><br /><br /><br />
         
          <label id="formtext" for="uname"  >Username: </label>
          <input type="text"   placeholder="Login ID"  id="uname" name="uname" style="margin-left: 0.3rem;"/><br /><br/>
         
          <label id="formtext" for="psww"  >Password: </label>
          <input type="password" placeholder="Password" id="psw" name="psw" style="margin-left: 0.7rem;"/><br /><br/><br/>
         
          <input id="formsub" type="submit" value="Submit" style="width: 10rem; height: 3rem; color: white; border-radius: 5px;"/> <br /> <br />
         
          <p style="font-size: 1.6rem; color: white;">Already a member? <a href="login.php" style="color: white; text-decoration: underline;">Login</a></p>
        </fieldset>
    </form>
    <footer style="margin-top: -1rem; color: white;">&#169Horizon Technologies, 2021</footer>
  </body>
</html>