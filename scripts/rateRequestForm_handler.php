<?php
$email = $_REQUEST['email'];
$state_option = $_POST['states'];
$terminal_option = $_POST['terminals'];
//if "email" variable is filled out, send email
if (filter_var($email, FILTER_VALIDATE_EMAIL))  {

    //Email information

    //NECESSARY Fields
    $name = $_REQUEST['name'];
    $admin_email = "nick@canaanxpress.com";
    $company_name = $_GET['companyName'];
    $subject = "Rate Request from " . $name;
    $city = $_REQUEST['city'];
    $zip = $_REQUEST['zip'];
    $phone = $_REQUEST['phone'];
    $comments = $_REQUEST['comments'];
    $final_message = "Dear Canaan Xpress Manager, " . "\r\n\r\n" . $comments . "\r\n\r\nHere's my info: \r\n\r\nAddress: "
         . " " . $city . ", " . $zip . "\r\nPhone: " . $phone . "\r\nFax: " . $fax . "\r\n\r\nSincerely, " . "\r\n" . $first_name . " " . $last_name;

    //UNNECESSARY Fields
    $weight = $_REQUEST['weight'];

    $palletized = $_GET['checkbox'];
    $number_skids = $_GET['skids'];

    $floor_loaded = $_GET['checkbox2'];
    $number_pallets = $_GET['pallets'];

    $shipping_line = $_GET['ship-line'];


    //Additional Charges
    $overweight = $_GET['overweight'];
    $drop_and_pick = $_GET['drop-and-pick'];
    $reefer = $_GET['reefer'];
    $open_top = $_GET['open-top'];
    $flat_rack = $_GET['flat-rack'];
    $hazmat = $_GET['hazmat'];

    //additional hazmat fields
    $class_charge = $_REQUEST['class'];
    $imco_charge = $_REQUEST['imco'];
    $description = $_REQUEST['description'];

    //send email
    mail($admin_email, "$subject", $final_message, "From:" . $name);

    //Email response
    $message_success = "Email sent. Thank you for contacting us!";
    echo "<script type='text/javascript'> alert('$message_success'); location='../rateRequestPage.html'; </script>";
}

//if "email" variable is not filled out, display the form
else {
    $message_failed = "Email is invalid. Please use format (name@example.com)";
    echo "<script type='text/javascript'> alert('$message_failed'); location='../rateRequestPage.html'; </script>";
}
?>