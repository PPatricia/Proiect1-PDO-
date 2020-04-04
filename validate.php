<!DOCTYPE HTML>
<html>

<head>
  <title>Sign In</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
</head>

<body>
  <div id="main">
    <div id="header">
      <div id="logo">
        <div id="logo_text">
          <!-- class="logo_colour", allows you to change the colour of the text -->
          <h1><a href="index.php">GIVING<span class="logo_colour">_AFRICA</span></a></h1>
          <h2>Please Help African Children Give Them A Better Life.</h2>
        </div>
      </div>
      <div id="menubar">
        <ul id="menu">
          <!-- put class="selected" in the li tag for the selected page - to highlight which page you're on -->
          <li><a href="index.php">Home</a></li>
          <li><a href="examples.php">Examples</a></li>
          <li><a href="page.php">Video</a></li>
          <li><a href="another_page.php">Sign In</a></li>
        </ul>
      </div>
    </div>
    <div id="site_content">
      <div class="sidebar">
        <h1>Latest News</h1>
        <h4>New Website Launched</h4>
        <h5>January 1st, 2010</h5>
        <p>2010 sees the redesign of our website. Take a look around and let us know what you think.<br /><a href="#">Read more</a></p>
        <h1>Useful Links</h1>
        <ul>
          <li><a href="#">link 1</a></li>
          <li><a href="#">link 2</a></li>
          <li><a href="#">link 3</a></li>
          <li><a href="#">link 4</a></li>
        </ul>
        <h1>Search</h1>
        <form method="post" action="#" id="search_form">
          <p>
            <input class="search" type="text" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
      <div id="content">
         
        
 <?php

$myemail="admin@yahoo.com";
$mypass="12345";
$captcha=$_POST['captcha'];
$correctsum=$_POST['correctsum'];

if(isset($_POST['login'])){
    $email = $_POST['email'];
    $pass = $_POST['password'];
    
    if(($email == $myemail)&&($pass==$mypass)&&($_POST['captcha']==$_POST['correctsum']) ){
        if(!isset($_POST['captcha'])){
            $message.='enter captcha...</br>';
             }
        if( isset($_POST['remember'])){
             setcookie('email', $email , time()+60*60*7);
             setcookie('pass', $pass , time()+60*60*7);
        }
        
       
    
        session_start();
        $_SESSION['email']=$email;
        header("location:welcome.php");
    }else{
        echo "Email or Password or sum is Invalid.<br> click here <a href='another_page.php'> to try again </a> ";
    }
}else {
    header("location:another_page.php");
}
?>
          </div>
        </form>
      </div>
    </div>
    
  </div>
   
</body>
</html>
