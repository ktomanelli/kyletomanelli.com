<?php 
if(isset($_POST['submit'])){
    $to = "kyletomanelli@gmail.com"; // this is your Email address
    $from= $_POST['email']; // this is the sender's Email address
    $name = $_POST['name'];
    $subject = $_POST['contactnumber'];
    $message = $name . " Contact Number:" . "\n\n" . $_POST['contactnumber'];

    $headers = "From:" . $from;
    mail($to,$subject,$message,$headers);

    echo "Mail Sent. Thank you " . $name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    }
?>