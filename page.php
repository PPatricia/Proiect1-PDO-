
<!DOCTYPE HTML>
<html>

<head>
  <title>Video</title>
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
          <li class="selected"><a href="page.php">Video</a></li>
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
          <!--canvas si svg-->
          <table>
              <td>
                  <svg width="100" height="100">
                    <polygon points="50,5 20,96 95,39 5,39 80,96" accesskey="" style="fill:brown;stroke:black;stroke-width:5;fill-rule:evenodd;" />
                     Sorry, your browser does not support inline SVG.
                  </svg>
              </td>
              <td> 
                <canvas id="myCanvas" width="150" height="70" style="border:1px solid #d3d3d3;">
                Your browser does not support the HTML5 canvas tag.</canvas>

               <script>
                 var c = document.getElementById("myCanvas");
                 var ctx = c.getContext("2d");
                 ctx.font = "30px Arial";
                 ctx.strokeText("Giving",20,50);
              </script>
              </td>
               <!-- js-->
              <td>
                  <svg width="100" height="100">
                  <polygon points="50,5 20,96 95,39 5,39 80,96" style="fill:brown;stroke:black;stroke-width:5;fill-rule:evenodd;" />
                   Sorry, your browser does not support inline SVG.
                  </svg>
              </td>
              <td>
                  <button onclick="alert('Thank you!')">Donate</button>
              </td>
          </table>
         <!-- js-->
<SCRIPT LANGUAGE="JavaScript">
var message="Nope!";
function clickIE() {if (document.all) {alert(message);return false;}}
function clickNS(e) {if 
(document.layers||(document.getElementById&&!document.all)) {
if (e.which==2||e.which==3) {alert(message);return false;}}}
if (document.layers) 
{document.captureEvents(Event.MOUSEDOWN);document.onmousedown=clickNS;}
else{document.onmouseup=clickNS;document.oncontextmenu=clickIE;}

document.oncontextmenu=new Function("return false")
// --> 
</script>
       <!--video local-->
       <video width="600" height="450" controls>
           <source src="img/video1.mp4" type="video/mp4">
       </video>
          <p></p>
          <p>tralala song</p>
          <!--audio local-->
       <audio width="600" controls>
                <source src="img/f1.mp3" type="audio/ogg">
       </audio>
          <!--video youtube utilizand php-->
    <?php
    $url = 'https://www.youtube.com/watch?v=XQ7wV9DeEqw';
    preg_match('/[\\?\\&]v=([^\\?\\&]+)/', $url, $matches);
    $id = $matches[1];
    $width = '600px';
    $height = '450px';
    ?>
          
    <iframe id="ytplayer" type="text/html" width="<?php echo $width ?>" height="<?php echo $height ?>"
    src="https://www.youtube.com/embed/<?php echo $id ?>?rel=0&showinfo=0&color=white&iv_load_policy=3"
    frameborder="0" allowfullscreen>
    </iframe>
      </div>
    </div>
    
  </div>
     
  
</body>
</html>
