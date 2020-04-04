
    
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
    <?php
    /////////////////////////////////////////
require_once 'Connection.php';
/////////////////////////////////////
            $number1=rand(1,9);
            $number2=rand(1,9);
            $sum=$number1+$number2;
        ?>

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
          <li class="selected"><a href="another_page.php">Sign In</a></li>
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
            <input class="search" type="text" id="email" name="search_field" value="Enter keywords....." />
            <input name="search" type="image" id="pass" style="border: 0; margin: 0 0 -9px 5px;" src="style/search.png" alt="Search" title="Search" />
          </p>
        </form>
      </div>
       
       
        <h2>People who donated</h2>
        
        <!--inserare imagini sql-->
        
       <?php
      
       //$sql='SELECT*FROM images;';
       //$query=mysqli_query($con,$sql)or die(mysqli_error($con));
        
        
$sql1="DROP PROCEDURE IF EXISTS viewImage";
$sql2="CREATE PROCEDURE viewImage()
BEGIN
SELECT * FROM images.images;
END;";
$stmt1=$con->prepare($sql1);
$stmt2=$con->prepare($sql2);
$stmt1->execute();
$stmt2->execute();
$sql3="CALL viewImage()";
$q=$con->query($sql3);
     if($q){   
       ?>
       <table width="10" cellpadding="2" cellspace="2" rules="rows">
           <tr>
               <th>Nume</th>
               <th>Imagine</th>
               <th colspan="3" align="center">Actions</th>
           </tr>
           <?php while($row = $q->fetch()): ?>
           
           <tr style="border-bottom: 1px solid black;">
               <td><?php echo $row['title'];?></td>
               <td><img src="<?php echo $row['image'];?>" </td>
               <td>
                   <?php echo "<a href=\"view.php?id=".$row['id']."\">View</a>"?>
               </td>
           </tr>
          <?php endwhile; ?>
       </table>
       <br><br>
       <?php
}else{
echo "Vai vai vai!!!";    
}
?>
       
       <!--end of view images-->
        
       
        
      <div id="content">
          <h2> Where donations go</h2>
          <p>Your donation will go to helping us achieve real impact on the African continent. Our main priorities are reducing climate change, saving our dying oceans, breaking free from plastic, promoting ecological farming and preserving Africa’s precious forests.
Donations are mainly used for campaigning activities like public protests, lobbying, and volunteer support. Some of your valued donations will also help us keep our offices running across Africa.</p>  
      <img src="img/2.jpg"  width="600" height="400">
      </div>
        <!--remember pass-->
       <form name="form" method="post" action="validate.php">
    <table border="0" cellpadding="10" cellspacing="1" width="500" align="center">
        <tr>
            <td align="center" colspan="2">Sign In</td>
        </tr>
        <tr>
            <td align="right">Email</td>
            <td><input type="text" name="email"></td>
        </tr>
        <tr>
            <td align="right">Password</td>
            <td><input type="password" name="password"></td>
        </tr>
        <tr>
            <td align="right"><input type="hidden" name="correctsum" value="<?php echo $sum;?>"><?php echo $number1.'+'.$number2.'=';?></td>
            <td><input type="text" name="captcha"></td>

        </tr>
        
        <tr>
            <td colspan="2" align="center"><input type="checkbox" name="remember" value="1">Remember Me</td>
        </tr>
        
        <tr>
            <td align="center" colspan="2"><input type="submit" name="login" value="login"></td>
        </tr>
    </table>
</form> 
        
        <?php
        if((isset($_COOKIE['email']))&&(isset($_COOKIE['pass']))){
       $email=$_COOKIE['email'];
       $pass=$_COOKIE['pass'];
        echo "<script>
     document.getElementById('email').value='$email';
     document.getElementById('pass').value='$pass';
</script>";
       
        }
        ?>
        <!--end remember-->
        
       
        
    </div>
    
  </div>
  
</body>
</html>
