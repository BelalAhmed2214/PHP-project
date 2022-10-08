<?php
if (!empty($_POST['Username']))
{
    $id=$_POST['Id'];
    $name=$_POST['Username'];
    $email=$_POST['Email'];
    
    $connection=mysqli_connect("localhost","root","","profile");
    $updatequery="UPDATE `student` SET `name` = '$name' , `email`='$email' WHERE `id` = $id";
    mysqli_query($connection,$updatequery);
    if(mysqli_affected_rows($connection))
        echo "True";
    else
        echo "Failed";
}
?>