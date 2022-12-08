<?php 
include ("../lib/connect.php") ;


if (isset($_POST['submit'])) {
   
    $fname = mysqli_real_escape_string($conn, $_POST['first_name'] );
    $surname =mysqli_real_escape_string ($conn, $_POST['surname'] );
    $mobile = mysqli_real_escape_string($conn, $_POST['mobile'] ); 
    $market =mysqli_real_escape_string($conn,  $_POST['market']);
    $species =mysqli_real_escape_string($conn, $_POST['species'] );
    $weight =mysqli_real_escape_string($conn, $_POST['weight']);
    $price =mysqli_real_escape_string ($conn, $_POST['price'] );
    $performance =mysqli_real_escape_string($conn, $_POST['performance'] );

    
    $sql ="INSERT INTO questionnaire(first_name,surname,mobile,market,species,weight,price,performance) 
    values ( '$fname' , '$surname','$mobile','$market','$species','$weight','$price', '$performance' )";
    $result = mysqli_query($conn , $sql);

    if ($result) {
        echo "
         <script>
         alert('questionnare was submitted successfully');
         location.replace('../');
         </script>
        ";
    } else {
        echo "
         <script>
         alert('data not inserted');
         </script>
        ";
    }




}
else {
    echo "<script> alert('send a post request');</script>";
}





?>