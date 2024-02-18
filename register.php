<?php 

$conn=mysqli_connect("localhost","root","","register");


if($conn){
    //echo "Connect";

}
else
{
    echo"Failed";

}

$email=$_POST['email'];
$password=$_POST['password'];

$data = "INSERT INTO user VALUES ('','$email','$password')";
$check = mysqli_query($conn,$data);

if($check){
    echo "Data sended";

}

else{
    echo "Data not send";
}
?>