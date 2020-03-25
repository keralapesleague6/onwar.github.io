<html>
<head>
    <title>
       onWAR wesite offical 
    </title>
    <link rel="stylesheet" type="text/css" href="stylesheet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
    
    
</head>
<body style="background: #32324e">
        <div class="jumbotron" style="margin-bottom: 0px; background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.9)), url(imgs2/mixgraphic.jpg);">
            <h1 style="font-family: Gill Sans MT; font-size: 60px; color: white;" class="animated fadeindown">onWAR</h1>
            <p style="font-family: Gill sans MT; line-height: 0px; font-size: 27px; color: white;">The online gamers planet</p>
            <a href="registration.html" disabled><button style="margin-top: 15px;" type="button" class="btn btn-outline-warning disabled">REGISTER</button></a>
            
        </div>
         
<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <a class="navbar-brand active" href="#">onWAR</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">
    <ul class="navbar-nav">
      <li class="nav-item">
        <a class="nav-link" href="#">Home</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="tournaments.php">Tournaments</a>
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
   
    <img src="imgs/pes2.jpg" class="img-fluid shadow sm-3 mb-5 bg-black rounded">
    
    <div class="cound">
        
        <p id="demo"></p>
        
        

<script>
// Set the date we're counting down to
var countDownDate = new Date("may 17, 2020 12:00:00").getTime();

// Update the count down every 1 second
var x = setInterval(function() {

  // Get today's date and time
  var now = new Date().getTime();
    
  // Find the distance between now and the count down date
  var distance = countDownDate - now;
    
  // Time calculations for days, hours, minutes and seconds
  var days = Math.floor(distance / (1000 * 60 * 60 * 24));
  var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
  var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
  var seconds = Math.floor((distance % (1000 * 60)) / 1000);
    
  // Output the result in an element with id="demo"
  document.getElementById("demo").innerHTML = days + "d " + hours + "h "
  + minutes + "m " + seconds + "s ";
    
  // If the count down is over, write some text 
  if (distance < 0) {
    clearInterval(x);
    document.getElementById("demo").innerHTML = "TIME'S UP";
  }
}, 1000);
</script>
   
   <h1 style="color:  #8c8c8c;
                text-align: center;
                font-size: 24px;">The Game Will Start In A Few Days</h1>
   
    </div> <br><br><hr>
    
      <h1 style="color: #fff;
                 margin-left: 20px;
                 padding-bottom: 23px;
                 font-size: 27px;
                 font-family: Gill Sans MT;">Latest Updates</h1>
    
       <div class="card-deck">
  <div class="card">
    <img class="card-img-top" src="imgs/leagueAD.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">ONWAR LEAGUE</h5>
      <p  class="card-text">A few terms you need to know about ONWAR LEAGUE<br><br> <span id="dots"></span><span id="more"><b>Once the league is registered you will be looking for match fixture<br><br>When fixture comes,you can play depending on the time of your game<br><br>You must finish the game within the allotted time Otherwise your match will be drawn<br><br>If the connection is cut while playing, Whose connection is lost, he will lose. So make sure your net connection is strong<br></b><br>
      <br><br><br><label style="font-family: sans-serif; font-weight: 100">PRESS THE BUTTON TO JOIN THE LEAGUE</label><br></span> &nbsp;&nbsp;&nbsp;
<a  onclick="myFunction()" id="myBtn">Read more</a> </p>
     <a href="user.php"><button type="button" class="btn btn-outline-success">JOIN</button></a>
      <p class="card-text"><small class="text-muted">Last updated 3d ago</small></p>
    </div>
    
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
  <div class="card">
    <img class="card-img-top" src="imgs/ronoaldovsmessi.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">COMMING SOON</h5>
      <p class="card-text">There is no match now</p>
      <button type="button" class="btn btn-outline-success" disabled>COMING SOON</button>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
  <div class="card">
    <img class="card-img-top" src="imgs/leagueAD1.jpg" alt="Card image cap">
    <div class="card-body">
      <h5 class="card-title">COMMING SOON</h5>
      <p class="card-text">There is no match now</p>
      <button type="button" class="btn btn-outline-success" disabled>COMING SOON</button>
      <p class="card-text"><small class="text-muted">Last updated 3 mins ago</small></p>
    </div>
  </div>
</div> <br><br><br><br><br><br><br><hr>
                                                                                                                                                                                                                                                                                                                                                                                              
<div style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.9)), url(imgs2/mixgraphic.jpg)">
<h2 style="color: white; background: black; opacity: 0.8; text-align: center; font-size: 25px; padding-top: 5px; padding-bottom: 20px;">About OnWAR wesite</h2>
 
 <br>

<h2 style="font-size: 23px; text-align: center; color: white" >About Tournaments page</h2>
 <p style="text-align: center; color: white">This page contains details of the matches you can play. Here are the details of the new matches. You can choose your favorite tournament from it</p>
 
 <br>

<h2 style="font-size: 23px; text-align: center; color: white">About Match Details Page</h2>
 <p style="text-align: center; color: white">The match details page where you can see all the details of the match you palyed.<b> Detail of upcoming games, Result of past games, Point table,  Match fixture, etc.. can be found on this page</b> This page will be updated after each match</p>
 <br>

<h2 style="font-size: 20px; text-align: center"><mark style="background: #ffff1a; border-radius: 5px; opacity: 0.7">About My Panel page</mark></h2>
 <p style="text-align: center; padding-bottom: 100px; color: white">Once the match starts, play the version that you gave in the match's info. Take the screenshot of your match score after the game.Then within the specified time,You will post the screenshot on the website My panel page.Your score can be added to the website only if you post it to the screenshot. If not added, your score will be drawn</p>
  </div><br><br><br><br><br><br><br><br><hr>
   
   
   
    <footer style="background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.9)), url(imgs2/blackredW.jpg)">
    <div id="right-footer">
            <h3 style="color: white">Follow us on</h3>
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
            <p style="font-size: 19px; color: white">This website is developed AA Developer<br> <span style="color: white">onwaronline@gmail.com</span></p>
        </div>
</footer>  
                                                                                                                                                           
</body>
</html>