

<!DOCTYPE HTML>
<html>

<head>
  <title>ADMIN</title>
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
session_start();
echo "welcome ". $_SESSION['email'];
echo "     <a href='another_page.php'>logout</a>";
?>
    <!--inserare imagini sql-->
       <?php
       include 'Connection.php';
        $sql1="CALL images.viewImage()";
        $q=$con->query($sql1);
        ?>
       <table width="30%" cellpadding="4" cellspace="4" rules="rows">
           <tr>
               <th>Nume</th>
               <th>Imagine</th>
               <th colspan="3" align="center">Actions</th>
           </tr>
           <?php
           while($row = $q->fetch()){
             
           ?>
           <tr style="border-bottom: 1px solid black;">
               <td><?php echo $row['title'];?></td>
               <td><img src="<?php echo $row['image'];?>"</td>
               <td>
                   <?php echo "<a href=\"edit.php?id=".$row['id']."\">Edit</a><a href=\"delete.php?id=".$row['id']."\" onclick=\"return confirm('Are you sure?')\">Delete</a>"?>
               </td>
           </tr>
           <?php } ?>
       </table>
       <br><br>
       <a href="upload.php">Upload another image</a>
       <!--end of upload images-->      
      </div>
    </div>
   
  </div>
</body>
</html>
