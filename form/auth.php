<?php

 
   if (isset($_POST['upload'])) {

    $name = $_POST['name']; 
    $department = $_POST['department'];
    $address = $_POST['address'];
    $batch = $_POST['batch'];
    $roll_no = $_POST['roll_no'];
 
    $db = mysqli_connect("localhost", "root", "", "form");

$sql = "INSERT INTO admissions (name, department, address, batch, roll_no) VALUES ('$name','$department','$address','$batch','$roll_no')"; 
    
   
    mysqli_query($db, $sql);

    

    
  
}
   
header("location:index.php");


?>