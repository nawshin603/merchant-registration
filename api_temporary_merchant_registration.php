<?php
require_once('config.php');

	$merchantName = trim($_POST['merchantName']);
    $merchantName = mysqli_real_escape_string($conn, $merchantName);
    $contactPerson = trim($_POST['contactPerson']);
    $contactPerson = mysqli_real_escape_string($conn, $contactPerson);
    $contactNumber = trim($_POST['contactNumber']);
    $contactNumber = mysqli_real_escape_string($conn, $contactNumber);
    $address = trim($_POST['address']);
    $address = mysqli_real_escape_string($conn, $address);

    $insertsql = "INSERT INTO temporary_merchant_reg
                (merchantName, contactPerson, contactNumber, address, creation_date)
                values ('$merchantName', '$contactPerson', '$contactNumber', '$address', NOW() + INTERVAL 6 HOUR)";

    mysqli_query($conn,$insertsql);

    mysqli_close($conn);

 ?>