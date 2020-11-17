<?php
$con = mysqli_connect("localhost", "root", "", "survey");
$surname = $_POST['surname'];
$firstname = $_POST['name'];
$contact = $_POST['contact'];
$date = $_POST['date'];
$age=$_POST['age'];
$eat = $_POST['eat'];
$movies = $_POST['movies'];
$tv = $_POST['tv'];
$radio = $_POST['radio'];
$checkbox1 = $_POST['food'];
    $chk="";  
    foreach($checkbox1 as $chk1)  
       {  
          $chk.= $chk1.",";  
       }  


if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
if($age<5 or $age>120)
{
    echo"data not saved";
}else{
$sql = "INSERT INTO person(surname,firstName,contact,date,age,food,eat,movies,tv,radio)VALUES('$surname','$firstname','$contact','$date','$age','$chk','$eat','$movies','$tv','$radio' )";

}   

if(mysqli_query($con,$sql)) {
    

    echo 'Data added sucessfully';
  
} 
else {
    echo "Error: " . $sql . "<br>" . mysqli_error($con);
}
mysqli_close($con);

?>



