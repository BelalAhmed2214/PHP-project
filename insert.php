<?php
if (!empty($_POST['Username']))
{
    $name=$_POST['Username'];
    $password=$_POST['Password'];
    $email=$_POST['Email'];
    $connection=mysqli_connect("localhost","root","","profile");
    $insertquery="INSERT INTO `student`(`name`,`password`,`email`) VALUES('$name','$password','$email')";
    mysqli_query($connection,$insertquery);
    if(mysqli_affected_rows($connection))
        echo "Your Information have been Added to Database";
    else
        echo "Failed";
}
?>