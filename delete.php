<?php
include('config.php');

$id = $_GET['id'];

$q = "DELETE FROM `student` WHERE `id`='$id'";
$run = mysqli_query($con,$q);

if($run){

	?>
  <script type="text/javascript">
  	alert('delete successfull');
  	window.location='display.php';
  </script>
    

	<?php
}else{
    
    ?>
  <script type="text/javascript">
  	alert('failled ');
  </script>
    

	<?php


}












?>