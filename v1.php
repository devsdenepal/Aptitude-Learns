<!-- Created by GautamKumar -->
<link rel="shortcut icon" href="logo.ico">
<?php
// Initialize the session
session_start();
//error_reporting(E_ERROR | E_PARSE);
$usr = $_SESSION['username'];
$conn = mysqli_connect("localhost", "root", "", "learns");
$result = mysqli_query($conn,"SELECT * FROM lib");
$delete_jpg = mysqli_query($conn,"DELETE FROM lib WHERE url like '%.jpg%'");
$delete_invalid = mysqli_query($conn,"DELETE FROM lib WHERE url =''");
// Check if the user is already logged in, if yes then redirect him to welcome page
if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo  '<div class="top card fullw filleft large standard"><ol class="helvetica"><li><a class="aqua left"> Aptitude learns</a></li><li><a>Explore</a></li><li><a>
       <i class="fa-solid fa-circle-plus"></i></a><li><a>Worksheets</a></li></li><li><a href="uploader.php"><i class="fa-solid fa-clapperboard">Create</i></a><li><a>Support</a></li></li><li onclick="showProfile()" class="right"><li> ' ;

}
else{
    echo '<script>window.location.href="login.php"</script>';
}

// Include config file
require_once "config.php";
?>
<script src="https://kit.fontawesome.com/1364c3c233.js" crossorigin="anonymous"></script>
<script>
function showProfile() {
 window.location.href="profile.php";
}
</script>
<link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />
<meta charset="UTF-8">
<title>Aptitude learns</title>
  <meta name="description" content="Education quick vidfeos">
  <meta name="keywords" content="HTML, CSS, JavaScript">
  <meta name="author" content="GautamKumar">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
<style>@import url("main.css");.custom-file-input {
  color: transparent;
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
}</style>
 &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><h2><?php echo $usr?> </h2></li></ol></div>
 <br/><br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<ol>
<?php
	$i=0;
	while($row = mysqli_fetch_array($result)) {
    $video=$row['url'];
?>

	 <li oncontextmenu="<?php echo $row['title']; ?>"><video class='black' src='uploads/<?php echo $row["url"]; ?>' onclick="window.location.href='library.php?video=<?php echo $video?>'"width='640'
height='264' ></video></ li>
	
	

	<?php
	$i++;
	}
	?>	</ol>

</div>
  <?php
 echo randomName();

 function randomName() {
   
 
     $lastname = array(
         '3DMedicalAnimation',
         '11 Chap 03 Kinematics 06  Motion Under Gravity  Motion in a Straight Line  Class 11  JEE ',
         'ACID BASES AND SALTS  FULL CHAPTER  CLASS 10 CBSE',
         '10th Class Maths Chapter SETS',
         'Classification The Animal Kingdom',
         'COVID-19 The Facts',
         'class 10 math day 1',
         'Genetics - Part 2',
         'Genetics - Part 1',
         'Household Electricity  Domestic Electric Circuit  Ring System etc Class 10 ICSE CBSE',
         'Kidney anatomy',
         'Journey of Sound to the Brain',
         'math 4th day class',
     
     );
     $name = '';
     $name .= $lastname[rand ( 0 , count($lastname) -1)];
 
     echo "<h4 class='center helvetica right-slide'>Suggested:".$name."</h4><video style='width:640;height:254' src='http://localhost/aptitude learns/uploads/" . $name . ".mp4' id='my-video' class='video-js' controls></video>
  ";
 }?>
 <!-- <input type='range' id='change_tim' onchange='change_tim()' step='0.05' min='0' max='player.duration()' value='player.currentTime()'><br/>
     -->
<script name="vid_plclk_pause">
  var elem = document.getElementById("video_player");
function openFullscreen() {
  if (elem.requestFullscreen) {
    elem.requestFullscreen();
  } else if (elem.webkitRequestFullscreen) { /* Safari */
    elem.webkitRequestFullscreen();
  } else if (elem.msRequestFullscreen) { /* IE11 */
    elem.msRequestFullscreen();
  }
}
function hide_play(){
if(player.paused){
  play_vid();
}
else{pause_vid()}
}
</script>
<script type="text/javascript">
  document.addEventListener('contextmenu', event => event.preventDefault());
document.addEventListener('keyup', function(e){
  if(e.keyCode == 40)
    window.location.reload();
})
document.addEventListener('keyup', function(e){
  if(e.keyCode == 39)
    skip();
})
</script><script>
document.addEventListener('keyup', function(e){
  if(e.keyCode == 77)
    player.volume-=0.5
})
document.addEventListener('keyup', function(e){
  if(e.keyCode == 78)
    player.volume+=0.5
})
document.addEventListener('keyup', function(e){
  if(e.keyCode == 70)
    openFullscreen()
})
document.addEventListener('keyup', function(e){
  if(e.keyCode == 75)
    player.pause() 
})
document.addEventListener('keyup', function(e){
  if(e.keyCode == 80)
    player.play()
})
document.addEventListener('keyup', function(e){
  if(e.keyCode == 37)
    back()
})
</script>
<script>
    document.addEventListener("DOMContentLoaded", function() { startplayer(); }, false);
var player;

function startplayer() 
{
 player = document.getElementById('video_player');
 player.controls = false;
}

function play_vid()
{
  
 player.play();
}
function pause_vid()
{
 player.pause();
}
function stop_vid() 
{
 player.pause();
 player.currentTime = 0;
}
function change_vol()
{
 player.volume=document.getElementById("change_vol").value;
}
function change_tim(){
  player.currentTime=document.getElementById("change_tim").value
}
function skip(){
  player.currentTime += 0.5
  
}
function back(){
  player.currentTime -= 0.5
  
}
</script> 
<script>
  show();
function show() {
	var image = document.getElementById('output');
  document.getElementById('FileToUpload').innerText = "Preview";
	image.innerHTML = "<iframe src='" + URL.createObjectURL(event.target.files[0]) + "' alt='loading...'></iframe>";
}
</script>

