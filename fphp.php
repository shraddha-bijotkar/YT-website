<?php
require_once("config.php");
if((isset($_POST['your_name'])&& $_POST['your_name'] !='') && (isset($_POST['your_email'])&& $_POST['your_email'] !=''))
{
 require_once("fphp.php“);

$email = $conn->real_escape_string($_POST['email']);
$name = $conn->real_escape_string($_POST['name']);
$recipe = $conn->real_escape_string($_POST['recipe']);

$sql="INSERT INTO contact_form_info (name, email, phone, comments) VALUES ('".$email."','".$name."', '".$recipe."')";
if(!$result = $conn->query($sql)){
die('There was an error running the query [' . $conn->error . ']');
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
