<!-- Created by GautamKumar -->
<link rel="shortcut icon" href="logo.ico"><script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<?php
// Initialize the session
session_start();
error_reporting(E_ERROR | E_PARSE);
$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
if ($query && $query['status'] == 'success') {
$country=$query['country'] ;
$city= $query['city'] ;
$info2=$city.",".$country;
foreach ($query as $data) {
     $data;
}
}
$usr = $_SESSION['username'];
$conn = mysqli_connect("localhost", "root", "", "learns");
$result = mysqli_query($conn,"SELECT * FROM `lib` ORDER BY `lib`.`Date` DESC");
$delete_jpg = mysqli_query($conn,"DELETE FROM lib WHERE url like '%.jpg%'");
$delete_png = mysqli_query($conn,"DELETE FROM lib WHERE url like '%.png%'");
$delete_invalid = mysqli_query($conn,"DELETE FROM lib WHERE url =''");
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo  '<div class="top card fullw filleft large standard" style="background-color: rgb(89, 185, 209);color:white;"><span style="font-size:1.5rem;">Learns<sup style="font-size:0.5rem;">'.$country.'</sup></span><ol class="helvetica"><li><a id="notify"><i class="fa-solid fa-bell"></i></a></li><li><a id="live" href="#live"><i class="fa-solid fa-chalkboard-user"></i></a></li></li><li><a href="uploader">
    <i class="fa-solid fa-circle-plus"></i></a></li></li><li><a><i class="fa-solid fa-circle-question"></i></a><li onclick="showProfile()" class="right"> ' ;

}
else{
    echo '<script>window.location.href="login"</script>';
}

// Include config file
require_once "config.php";
?>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<script src="https://kit.fontawesome.com/1364c3c233.js" crossorigin="anonymous"></script>
<script>
function showProfile() {
 window.location.href="profile";
}
</script>
<script src="service_perform.js"></script>

<meta charset="UTF-8">
<title>Aptitude learns</title>
  <meta name="description" content="Education quick vidfeos">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="GautamKumar">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>@import url("main.css");.custom-file-input {
  color: transparent;
}
.lcg{
  display: grid;
  gap: 50px;
  grid-template-columns: auto auto auto;
 
}
.item {
  background-color: rgba(255, 255, 255, 0.8);
  border: 1px solid rgba(0, 0, 0, 0.8);
  padding: 20px;
  font-size: 30px;
  text-align: center;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: hidden;

}
.custom-file-input::before {
  content: 'Upload a video';
  color: black;
  display: inline-block;
  /*background: -webkit-linear-gradient(top, #f9f9f9, #e3e3e3);*/
  background-color: aqua;
  border: 1px solid #999;
  border-radius: 3px;
  padding: 5px 8px;
  outline: none;
  white-space: nowrap;
  -webkit-user-select: none;
  cursor: pointer;
  text-shadow: 1px 1px #fff;
  font-weight: 700;
  font-size: 10pt;
}
.custom-file-input:hover::before {
  border-color: black;
}
.custom-file-input:active {
  outline: 0;
}
.custom-file-input:active::before {
  background: -webkit-linear-gradient(top, #e3e3e3, #f9f9f9); 
}

body {
  padding: 20px;
}
</style><script src="dMd_lgn_al.js"></script>
<h2>&nbsp;<li><button style="border-radius:50%;background:none;padding:none;margin:none;text-align:none;"><i class="fa-solid fa-user"></i></button><!--?php echo $usr?--></span> </h2></li></ol></div>
<br/><br/><div id="notify_panel">

	

<script>
  setInterval(up, 1000);
function up() {
  
  
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("notify_panel").innerHTML = this.responseText;
      }
    }
    xmlhttp.open("GET", "sr.php", true);
    xmlhttp.send();
  }

</script>
</div><div class="sidenav">
<!-- <img src="http://localhost/EGPEHS/logo.ico"style="width:50%;justify-item:center"> -->
<h1>Aptitude<sup><?php echo $country?></sup>
<a id ="hovered"><i class="fa-solid fa-bars-progress"></i> Dashboard</a>
<a id ="Randoms" onclick='window.location.href="randoms"'><i class="fa-solid fa-shuffle"></i> Randoms</a>
<a onclick='window.location.href="settings"'><i class="fa-solid fa-gear"></i> Settings</a>
<!-- <button onclick="location.replace('logout.php')" style="color:white;background-color: red;">Log Out</button> -->
</div>
<div class="main">
<br/><br/><br/><br/><div class="fillcenter">
  <!-- <div style="background: red;border: 1px solid #3f8dfc1d;
        border-radius:10px !important; color:white !important;"> -->
        <div class="banner_ad">
        <?php
 echo generateQuote();

 function generateQuote() {
   
 
     $lastname = array(
         '“The most important day of a person’s education is the first day of school, not Graduation Day.” – Harry Wong',
         '“Today is the first day of the rest of your life.” – Charles Dederich',
         '“You are off to great to great places. Today is your first day! Your mountain is waiting, so get on your way!” – Dr. Seuss',
        '“I’ve always loved the first day of school better than the last day of school. Firsts are best because they are beginnings.” – Jenny Han',
        'The first day of school: The day when the countdown to the last day of the school begins.',
        '“All children start their school careers with sparkling imaginations, fertile minds, and a willingness to take risks with what they think.” – Ken Robinson',
     );
     $name = '';
     $name .= $lastname[rand ( 0 , count($lastname) -1)];
 
     echo $name;
 }?></div>
 <div class="lcg">
 <!-- <div style="background-color: #fff;height:max-content;"> -->
<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
    $video=$row['url'];
?>

	<div class='item'><video class='black' src='uploads/<?php echo $row["url"]; ?>' onclick="window.location.href='library.php?video=<?php echo $video?>'" ><!--style="height:320px;width:620px"--></video></div>
	
	

	<?php
	$i++;
	}
	?>	</div>
<span class="center fillcenter">

 