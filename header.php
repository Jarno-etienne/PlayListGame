<!DOCTYPE html>
<html>
  <head>
    <meta charset="UTF-8">
    <!-- https://developer.mozilla.org/en-US/docs/Web/HTTP/CSP -->
    <meta http-equiv="Content-Security-Policy" content="default-src 'self'; script-src 'self'; style-src 'self' 'unsafe-inline'">
    <link href="./styles.css" rel="stylesheet">
    <title>Play_later_list</title>
  </head>
  

  <body>

    


<div class="topnav_wrapper">

  <div class="topnav" id="myTopnav">
    <div class="dropdown">
        <button class="dropbtn">☰☰☰
        <i class="fa fa-caret-down"></i>
      </button>
        <div class="dropdown-content">
            <a href="account.html">
              <div class="patterns">
                <svg class="svg_1" width="100%" height="100%">
               <text x="50%" y="60%"  text-anchor="middle"  >
                 Account
               </text>
               </svg>
              </div>
            </a>
            <a href="library.html">              <div class="patterns">
              <svg class="svg_2" width="100%" height="100%">
             <text x="50%" y="60%"  text-anchor="middle"  >
               Library
             </text>
             </svg>
            </div>
          </a>
            <a href="playlater.html">              <div class="patterns">
              <svg class="svg_3" width="100%" height="100%">
             <text x="50%" y="60%"  text-anchor="middle"  >
               Play Later
             </text>
             </svg>
            </div>
          </a>
            <a href="wishlist.html">              <div class="patterns">
              <svg class="svg_4" width="100%" height="100%">
             <text x="50%" y="60%"  text-anchor="middle"  >
               Wishlist
             </text>
             </svg>
            </div></a>
        </div>
    </div>
    <a href="account.html">Account</a>
        <a id="home_button" class="nav_active" href="index.html">Home</a>
      <svg class="svg_logo" viewBox="0 0 960 200">
        <symbol id="s-text">
          <text text-anchor="middle" x="50%" y="80%">DARIUS</text>
        </symbol>
      
        <g class = "g-ants">
          <use xlink:href="#s-text" class="text-copy"></use>
          <use xlink:href="#s-text" class="text-copy"></use>
          <use xlink:href="#s-text" class="text-copy"></use>
          <use xlink:href="#s-text" class="text-copy"></use>
          <use xlink:href="#s-text" class="text-copy"></use>
          <use xlink:href="#s-text" class="text-copy"></use>
          
        </g>
      </svg>

    <a href="javascript:void(0);" class="icon" onclick="myFunction()">&#9776;</a>
    <div class="search_bar_wrapper">
    <input class="search_bar" type="text" placeholder="Search..">
  </div>
</div>



</div>

<div class="home_page_wrapper">
  
</div>



  </body>

  <script>
    /* Toggle between adding and removing the "responsive" class to topnav when the user clicks on the icon */
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
</html>