<?php 
if(isset($_POST['submit'])){
    $to = "noahzk@outlook.com"; // this is your Email address
    $from = $_POST['Email']; // this is the sender's Email address
    $first_name = $_POST['Voornaam'];
    $last_name = $_POST['Achternaam'];
    $subject = "Form submission";
    $subject2 = "Copy of your form submission";
    $message = $Voornaam . " " . $Achternaam . " wrote the following:" . "\n\n" . $_POST['Opmerking'];
    $message2 = "Here is a copy of your message " . $first_name . "\n\n" . $_POST['Opmerking'];

    $headers = "From:" . $from;
    $headers2 = "From:" . $to;
    mail($to,$subject,$message,$headers);
    mail($from,$subject2,$message2,$headers2); // sends a copy of the message to the sender
    echo "Mail Sent. Thank you " . $first_name . ", we will contact you shortly.";
    // You can also use header('Location: thank_you.php'); to redirect to another page.
    // You cannot use header and echo together. It's one or the other.
    }
?>