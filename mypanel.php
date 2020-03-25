<?php
if(isset($_POST['upload'])) {
    
   $file_name = $_FILES['file']['name'];
    $file_type = $_FILES['file']['type'];
    $file_size = $_FILES['file']['size'];
    $file_tem_Loc = $_FILES['file']['tmp_name'];
    $file_store = "upload/".$file_name;
    
    if (move_uploaded_file($file_tem_Loc,  $file_store)) {
        echo"File are uploaded";
    }
}

?>
<!DOCTYPE html>
<html>
<head>
    <title>My panel</title>
    <link rel="stylesheet" type="text/css" href="mystyle.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.1.0/css/all.css" integrity="sha384-lKuwvrZot6UHsBSfcMvOkWwlCMgc0TaWr+30HWe3a4ltaBwTZhyTEggF5tJv8tbt"
    crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>
    
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
        <a class="nav-link" href="tournaments.php">Tournaments</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="matchdetailes.php">Match detailes</a>
      </li> 
      <li class="nav-item">
        <a class="nav-link active" href="#">My Panel</a>
      </li>   
    </ul>
  </div>  
</nav>
  
  <h2 style="color: black" class="page-heading2">My Panel</h2>
   
   <h6 style="text-align: center; margin-top: 150px;font-size: 25px;">Take the FT screenshot of your match and upload here to add score</h6>
   <form action="" method="post" enctype="multipart/form-data" style="text-align: center;">
      Upload Match Screen Shot Here
       <input type="file" name="file"><br><br>
       <input style="color: white;background: url(imgs2/blackred.jpg); width: 200px; font-size: 18px;font-family: Gill Sans MT" type="submit" name="upload" value="Upload Screen shot">
   </form>
   
   <br><br><br><br><br>
   <footer style=" background:linear-gradient(rgba(0,0,0,0.8),rgba(0,0,0,0.9)), url(imgs2/blackredW.jpg)">
    <div id="right-footer">
            <h3>Follow us on</h3>
            <div id="social-media-footer">
                <ul>
                    <li>
                        <a href="#">
                            <i style="color: #e4405f" class="fab fa-instagram"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i style="color: #25D366" class="fab fa-whatsapp"></i>
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i style="color: #3b5998" class="fab fa-facebook"></i>
                        </a>
                    </li>
                </ul>
            </div>
            <p style="font-size: 19px">This website is developed AA Developer</p>
        </div>
</footer>
    
</body>
</html>