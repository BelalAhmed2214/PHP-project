<?php
if (!empty($_POST['Username']))
{
    $id=$_POST['Id'];
    $name=$_POST['Username'];
    $email=$_POST['Email'];
    
    $connection=mysqli_connect("localhost","root","","profile");
    $deletequery="DELETE FROM `student` WHERE `id` = '$id' AND `name`='$name' AND `email`='$email' ";
    mysqli_query($connection,$deletequery);
    if(mysqli_affected_rows($connection))
        echo "True";
    else
        echo "Failed";
}
?>