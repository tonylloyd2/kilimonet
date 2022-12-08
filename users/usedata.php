<?php 
include ("../lib/connect.php") ;

 $query = mysqli_query($conn,"SELECT * FROM questionnaire");
 while($result=mysqli_fetch_assoc($query)){
?>
 <div><?php echo($result["price"]); ?></div>
 <div><?php echo($result["price"]); ?></div>
<?php
 }
?>

