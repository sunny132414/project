<?php 
require_once("connection.php");
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
{
 require_once("contact_mail.php");
 $yourName = $connect->real_escape_string($_POST['your_name']);
$yourEmail = $connect->real_escape_string($_POST['your_email']);
$yourPhone = $connect->real_escape_string($_POST['your_phone']);
$comments = $connect->real_escape_string($_POST['comments']);
$sql="INSERT INTO contact_form_info (name, email, phone, comments) VALUES ('".$yourName."','".$yourEmail."', '".$yourPhone."', '".$comments."')";
if(!$result = $connect->query($sql)){
die('There was an error running the query [' . $connect->error . ']');
}
else
{
echo "Thank you! We will contact you soon";
}
}
else
{
echo "Please fill Name and Email";
}
?>