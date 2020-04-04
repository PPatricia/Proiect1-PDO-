<!DOCTYPE HTML>
<html>

<head>
  <title>Giving</title>
  <meta name="description" content="website description" />
  <meta name="keywords" content="website keywords, website keywords" />
  <meta http-equiv="content-type" content="text/html; charset=windows-1252" />
  <link rel="stylesheet" type="text/css" href="style/style.css" />
  <!--HARTAAA           ........................................                       -->
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.4.0/dist/leaflet.css" crossorigin=""/>
       <script src="https://unpkg.com/leaflet@1.4.0/dist/leaflet.js"  crossorigin=""></script>
       <!--HARTAAA           ........................................                       -->
</head>

<body>
    <!--like and share facebook-->
    <div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_GB/sdk.js#xfbml=1&version=v3.2"></script>
    
 


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
          <li class="selected"><a href="index.php">Home</a></li>
          <li><a href="examples.php">Examples</a></li>
          <li><a href="page.php">Video</a></li>
          <li><a href="another_page.php">Sign in</a></li>
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
        <h1>Donate To Save Lives</h1>
        <p>Aid for Africa is a unique partnership of select nonprofit organizations, all dedicated to solving the complex, inter-related challenges facing Sub Saharan Africa. Whether we are distributing books to school children, introducing medical strategies to combat the spread of HIV/AIDS, supporting small businesses for women, or finding new approaches to protect endangered elephants and lions, Aid for Africa members are working to build a better future for Africa’s children, families, and communities. Our charity organizations:</p>
        <ul>
          <li>Are fully vetted, meeting some of the strictest tests of fiscal accountability, governance, and programmatic impact in philanthropy.</li>
          <li>Have a track-record of introducing innovative solutions to seemingly intractable problems.</li>
          <li>Partner with each other and share best practices for maximum efficiency and top results.</li>
        </ul>
        
       
        <!--HARTAAA           ........................................                       -->
        
       <div id="mapid">
        <script>
var mymap = L.map('mapid').setView([47.1740429,27.5714553],15);
L.tileLayer('https://api.tiles.mapbox.com/v4/{id}/{z}/{x}/{y}.png?access_token=pk.eyJ1IjoibWFwYm94IiwiYSI6ImNpejY4NXVycTA2emYycXBndHRqcmZ3N3gifQ.rJcFIG214AriISLbB6B5aw', {
		maxZoom: 19,
		attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, ' +
			'<a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, ' +
			'Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
		id: 'mapbox.streets'
	}).addTo(mymap);
    var circle = L.circle([47.174,27.571], {
    color: 'rgb(231,109,131)',
    fillColor: 'rgb(231,109,131)',
    fillOpacity: 0.5,
    radius: 50
}).addTo(mymap);
</script>
        </div>
        <!--SF HARTAAA ....................................................... -->
      </div>
        
        
        
    </div>
      
      <!--like and share -->
      <div id="footer">
    <div class="fb-like" data-href="http://localhost/PhpProject5/index.php" data-width="12" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
  </div>
  </div>
</body>
</html>
