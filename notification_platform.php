<?php
$usr = $_SESSION['username'];
$conn = mysqli_connect("localhost", "root", "", "learns");

	$i=0;
	while($row = mysqli_fetch_array($result)) {
    $video=$row['url'];
?>
<br/>
	<div class='item'><?php echo $row['subject']?>:<?php echo $row['details']?>
	
	

	<?php
	$i++;
	}
	?>