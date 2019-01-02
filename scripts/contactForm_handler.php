<?php
$email = $_REQUEST['email'];
$select_option = $_POST['states'];
//if "email" variable is filled out, send email
if (filter_var($email, FILTER_VALIDATE_EMAIL) && ($select_option != 'Select State'))  {

    //Email information
    $first_name = $_REQUEST['firstName'];
    $last_name = $_REQUEST['lastName'];
    $admin_email = "nick@canaanxpress.com";
    $subject = "Request from " . $email;
    $address = $_REQUEST['address'];
    $city = $_REQUEST['city'];
    $state = $_REQUEST['state'];
    $zip = $_REQUEST['zip'];
    $phone = $_REQUEST['phone'];
    $fax = $_REQUEST['fax'];
    $comments = $_REQUEST['comments'];
    $final_message = "Dear Canaan Xpress Manager, " . "\r\n\r\n" . $comments . "\r\n\r\nHere's my info: \r\n\r\nAddress: "
        . $address . " " . $city . ", " . $zip . "\r\nPhone: " . $phone . "\r\nFax: " . $fax . "\r\n\r\nSincerely, " . "\r\n" . $first_name . " " . $last_name;

    //send email
    mail($admin_email, "$subject", $final_message, "From:" . $email);

    //Email response
    $message_success = "Email sent. Thank you for contacting us!";
    echo "<script type='text/javascript'> alert('$message_success'); location='../contact.html'; </script>";
}

//if "email" variable is not filled out, display the form
else {
    $message_failed = "Email is invalid. Please use format (name@example.com)";
    echo "<script type='text/javascript'> alert('$message_failed'); location='../contact.html'; </script>";
}
?>