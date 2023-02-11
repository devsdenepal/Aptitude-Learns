<?php
session_start();
//error_reporting(E_ERROR | E_PARSE);
$usr = $_SESSION['username'];
$video=$_GET['video'];
$usr = $_SESSION['username'];
$conn = mysqli_connect("localhost", "root", "", "learns");

if(isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true){
    echo  '<div class="top card fullw filleft large standard"><ol class="helvetica"><li><a class="aqua left"> Aptitude learns</a></li><li><a>Explore</a></li><li><a>Library</a><li><a>Worksheets</a></li></li><li><a>Tutorials</a><li><a>Support</a></li></li><li onclick="showProfile()" class="right">' ;

}
else{
    echo '<script>window.location.href="login.php"</script>';
}

// Include config file
require_once "config.php";

?>
<link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />
<link rel="stylesheet" href="main.css">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><h2><?php echo $usr?> </h2></li></ol></div>
 <br/><br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 

<?php
// echo "<video src='". $video."'controls>";
echo "<h2 class='center seto thulo normal down-slide'>".$video."</h2><br/><div id='wrapper'><div class='fillcenter' style='align-items:center;'><video
id='my-video'
class='video-js'
controls
preload='auto'
width='640'
height='264'

data-setup='{}'
><source src='uploads/".$video."' type='video/mp4' /></video>
";
?>
<script name="cT3">document.title="<?php echo $video?>";</script>
<script src="https://vjs.zencdn.net/7.18.1/video.min.js"></script>
<script name="vid_plclk_pause">
player = document.getElementById('my-video');
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
// document.addEventListener('contextmenu', event => event.preventDefault());
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
<!-- <script>
document.addEventListener("DOMContentLoaded", function() { startplayer(); }, false);


function startplayer() 
{

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
player.currentTime=document.getElementById("change_tim").value;
update_tim.cancel();
}
function skip(){
player.currentTime += 0.5;

}
function back(){
player.currentTime -= 0.5;

}
setInterval(update_tim,100);
//setInterval(update_tim,500);

function update_tim(){
player = document.getElementById('video_player');
document.getElementById('change_tim').value = player.currentTime;
Time = player.currentTime + "/" +parseFloat(player.duration).toFixed( 2 ).replace(".",":") ;
Time= String(Time);
let player_dur="" + player.duration/60;
document.getElementById('duration').innerHTML = Time;
}
</script> -->

