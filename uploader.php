<?php
error_reporting(0);
?>
<html><head><title>Upload a File</title><link rel='stylesheet' href='main.css'><style>.custom-file-input {
  color: transparent;
}
.custom-file-input::-webkit-file-upload-button {
  visibility: visible;
}
.input{
        padding: 10px;
        
        padding-right: 35px;
        padding-left: 20px;
        border-radius: 30px;
        display: block;
    width: 60%;
    height: 34px;
    padding: 6px 12px;
    font-size: 14px;
    line-height: 1.42857143;
    color: #555;
    background-color: #fff;
    background-image: none;
    border: 1px solid #ccc;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    box-shadow: inset 0 1px 1px rgb(0 0 0 / 8%);
    -webkit-transition: border-color ease-in-out .15s, -webkit-box-shadow ease-in-out .15s;
    -o-transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
    transition: border-color ease-in-out .15s, box-shadow ease-in-out .15s;
}
   
.custom-file-input::before {
  content: 'Select from folder';
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
input{
    display: flex;
    margin: 5px 10px 5px 0;
    vertical-align: middle;
  margin: 5px 10px 5px 0;
  padding: 10px;
  /* background-color: #fff; */
  /* border: 1px solid #ddd; */
  position:relative;
  left:50%;
  border-radius: 10px;
  border:none;
}
body {
  padding: 20px;
  align-items: center;
}</style></head><body>
<?php
session_start();
//error_reporting(E_ERROR | E_PARSE);
$usr = $_SESSION['username'];
// $video=$_GET['video'];
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
<?php 
$ipAddress = gethostbyname('localhost');
?>
<?php
$query = @unserialize (file_get_contents('http://ip-api.com/php/'));
if ($query && $query['status'] == 'success') {
$country=$query['country'] ;
$city= $query['city'] ;
$info2=$city.",".$country;
foreach ($query as $data) {
    $info= $data;
}
}
?>
<script>
  let location="https://www.google.com/maps/search/" + <?php echo $info2?>;
 var map=document.getElementById("location_map");
 map.innerHTML += "<iframe src='"+ location +"'>";
 </script>
<link href="https://vjs.zencdn.net/7.18.1/video-js.css" rel="stylesheet" />
<link rel="stylesheet" href="main.css">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<li><h2><?php echo $usr?> </h2></li></ol></div>
 <br/><br/><br/><br/>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<div class="card  seto info"><h1 class="helvetica">Info</h1>Your video should follow our creator's discipline.We can remove your video if found harming society and social norms. </div>
<form action='upload.php' method='post' enctype='multipart/form-data' class='seto center'>
<span><input type='text'class='input' name='title' placeholder='Type the title...' style='width:40%' onclick='show()'  required/></span>  <br/><input type='file'name='fileToUpload' class='custom-file-input'  onclick='show()' required>
<br/>
<input type='submit'  name='submit' class='seto fileToUpload' value='Upload' style='cursor:pointer;background-color:red;'></input> <div  id='output'></div>
</form><div class='card bottom center' style='top:90%;left:50%'><a href=<?php echo "https://www.google.com/maps/search/" . $info2?> ><i class='fa-solid fa-pin'></i>You are connected with <?php echo $info .",".$info2?> Internet Server</a><br/></body></html>