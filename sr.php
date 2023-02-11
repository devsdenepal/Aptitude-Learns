<?php
$conn = mysqli_connect("localhost", "root", "", "learns");
$result2 = mysqli_query($conn,"SELECT * FROM `twicle` ORDER BY `twicle`.`pub_date` DESC");

$i=0;
	while($row2 = mysqli_fetch_array($result2)) {
    // $video=$row['url'];

?>

	<text style="text-align:center;"><?php echo $row2['pub_date']?> : <?php echo $row2['subject']?>:<?php echo $row2['details']?></text><br/>
	<?php
	$i++;
	}
	?>