<?php
if(isset($_POST["submit"]))
{
$name=$_POST["name"];
$email=$_POST["email"];
$phonenum=$_POST["phone"];
$age=$_POST["age"];
$gender=$_POST["gender"];
$experience=$_POST["experience"];
if(isset($_FILES['resume']))
{
$file=$_FILES['resume']['name'];
$filesize=$_FILES['resume']['size'];
}
else
{
echo "Error in uploading file";
}
echo "The details you entered are: "."<br>";
echo "Name: ".$name."<br>";
echo "Email: ".$email."<br>";
echo "Phone Number: ".$phonenum."<br>";
echo "Age: ".$age."<br>";
echo "Gender: ".$gender."<br>";
echo "Previous experience entered: ".$experience."<br>";
echo "Resume uploaded!<br>";
echo "File name: ".$file."<br>";
echo "File size: ".$filesize."<br>";
echo "Thankyou for your application.<br>";
}
?>