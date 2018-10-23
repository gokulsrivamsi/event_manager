<?php

// Create connection
$conn = mysqli_connect("localhost","root","","eventS");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}
else {
    echo "connected";
}
//if((isset($_POST['fullname'])&& $_POST['fullname'] !='') && (isset($_POST['email_id'])&& $_POST['email_id'] !=''))
//{
    $Fullname=$_POST["fullname"];
    $email= $_POST["email_id"];

    $y="INSERT INTO events_registration(id,Fullname,email) VALUES ('','".$Fullname."','".$email."')";
    if(mysqli_query($conn,$y)){
    // echo "data is inserted";
    header("Location: index.html");
    }else{
        echo "data is not inserted";
    } 

   /* $toEmail = "rajhacker724@gmail.com";
$mailHeaders = "From: " . $_POST["fullname"] . "<". $_POST["email_id"] .">\r\n";
if(mail($toEmail, $_POST["fullname"], $mailHeaders)) {
echo"<p class='success'>Contact Mail Sent.</p>";
} else {
echo"<p class='Error'>Problem in Sending Mail.</p>";
}*/
?>