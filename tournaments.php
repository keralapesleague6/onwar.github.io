<html>
<head>
    <title>
       onWAR Tour
    </title>
    <link rel="stylesheet" type="text/css" href="tourStyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
</head>
<body style="background: #32324e">
    
    
    
    <nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand" href="index.html">onWAR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="index.php">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link active" href="#">Tournaments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="matchdetailes.php">Match detailes</a>
      </li>   
       <li class="nav-item">
        <a class="nav-link" href="mypanel.php">My Panel</a>
      </li> 
    </ul>
  </div>  
</nav>
    <img src="imgs/pes3edit.jpg" class="img-fluid"><br><br>
    
    <div style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.9)), url(imgs2/mixgraphic.jpg)" class="jumbotron jumbotron-fluid card shadow p-3 mb-2 bg-black rounded">
  <div style="color: white" class="container">
    <h1 class="display-4">MATCH LATEST UPDATES HERE</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
    
    <br>
    <div class="onwar-champ">
    <img src="imgs/ronoaldovsmessi.jpg" class="img-fluid">
    </div><br>
    <button onclick="myFunction()" type="button" class="btn btn-danger btn-lg btn-block" disabled >COMING SOON</button>
    <br><br><br>
    
    <!-- button script -->
    
    <script>
function myFunction() {
  alert("The match will be comming soon, PLEASE WAIT FOR IT");
}
</script>
    
    <div class="card-deck">
  <div style="background: #63639c" class="card card shadow-lg p-1 mb-2 bg-black rounded">
    <img class="card-img-top" src="imgs/leagueAD.jpg" alt="Card image cap">
    <div  class="card-body">
      <h5 class="card-title">ONWAR League</h5>
      <p class="card-text">Click on the register button and join the onWAR League<br><br><span id="dots"></span><span id="more"><b>A few terms you need to know about ONWAR LEAGUE<br>Once the league is registered you will be looking for match fixture<br><br>When fixture comes,you can play depending on the time of your game<br><br>You must finish the game within the allotted time Otherwise your match will be drawn<br><br>If the connection is cut while playing, Whose connection is lost, he will lose. So make sure your net connection is strong<br><br>Those who are in the top 4 in the league by following these rules will be eligible to take part in the Direct ONWAR CHAMPIONSHIP</b></span> &nbsp;&nbsp;&nbsp;
<a  onclick="myFunction()" id="myBtn">Read more</a><br><br>
     <a href="registration.html"><button type="button" class="btn btn-outline-light">JOIN</button></a></p>
      
      <script>
function myFunction() {
  var dots = document.getElementById("dots");
  var moreText = document.getElementById("more");
  var btnText = document.getElementById("myBtn");

  if (dots.style.display === "none") {
    dots.style.display = "inline";
    btnText.innerHTML = "Read more"; 
    moreText.style.display = "none";
  } else {
    dots.style.display = "none";
    btnText.innerHTML = "Read less"; 
    moreText.style.display = "inline";
  }
}
</script>
      
    </div>
  </div>
  <div style="background: #63639c" class="card card shadow-lg p-1 mb-2 bg-black rounded">
    <img class="card-img-top" src="imgs/ronoaldovsmessi.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">COMING SOON</h5>
      <p class="card-text">There is no match now</p>
      <button type="button" class="btn btn-outline-light" disabled>JOIN</button>
    </div>
  </div>
  <div style="background: #63639c" class="card shadow-lg p-1 mb-2 bg-black rounded">
    <img class="card-img-top" src="imgs/leagueAD1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">COMING SOON</h5>
      <p class="card-text">There is no match now</p>
      <button type="button" class="btn btn-outline-light" disabled>JOIN</button>
    </div>
  </div>
</div><br><br><br><br><br><br><br><br><br>
   
   
    
<footer style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.9)), url(imgs2/blackredW.jpg)">
    <div id="right-footer">
            <h3>Follow us on</h3>
            <div id="social-media-footer">
                <ul>
                    <li>
                        <a href="#">
                            <i class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fab fa-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <p style="font-size: 19px">This website is developed AA Developer</p>
        </div>
</footer>
    
</body>
</html>