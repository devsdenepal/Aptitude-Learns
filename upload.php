<?php
session_start();
error_reporting(0);
$target_dir = "uploads/";
$target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
$uploadOk = 1;
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));
?>
<link rel = "stylesheet" href="main.css"/>

<?php
// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
  // if($check !== false) {
  //   echo "File is a video - " . $check["mime"] . ".";
  //   $uploadOk = 1;
  // } else {
  //   echo "File is not a video.";
  //   $uploadOk = 0;
  // }
}

// Check if file already exists
if (file_exists($target_file)) {
  echo '<div class="fillkrimson seto center fillcenter error"><h1>Harming Copyright Error</h1>Sorry, copyright problem.';
  $uploadOk = 0;
}

// Check file size
if ($_FILES["fileToUpload"]["size"] > 9999999999999) {
  echo '<div class="fillkrimson seto center fillcenter error">Sorry, your file is too large.';
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "mp4") {
  echo "<h1>INVALID FILE!</h1>Sorry, your file is invalid.</h1>";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0) {
  echo "<h6>Sorry, your file was not uploaded.</h6></div><script>document.title='error'</script><div class='card round center' style='width:100%'>Powered by <span class='aqua'>Aptitude</div>";
// if everything is ok, try to upload file
} else {
  if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
    // $done= mysqli_query($conn, $sql);
    echo "<script>window.location.href='index.php'</script>";
  $url=htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
  } else {
    echo "Sorry, there was an error uploading your file.";
  }
}
$url=htmlspecialchars( basename( $_FILES["fileToUpload"]["name"]));
  
$title=$_POST['title'];

$usr = $_SESSION['username'];
$conn = mysqli_connect("localhost", "root", "", "learns");
$sql= "INSERT INTO lib(Channel,url,title) VALUES ('$usr', '$url', '$title')";
mysqli_query($conn,$sql);
?>
<!-- <script>
while(error ==true){
  document.getElementsByTagName("body").style.background == "'url(bg_blocked.jpeg')"
}
</script> -->