<?php
include 'modHeader.php';
 ?>
    <!-------------------------------------- Reg Form -->

    <div class="pageCoverPanel shortHeight">
        <img class="pageCoverImg imgBlurEfx" src="./img/MerchantPCP.jpg" alt="Page Cover">
        <div class="pageCoverHeading">Register <span class="thinText">as a</span> MERCHANT</div>
    </div>
    <div class="stdFormContainer">
        <?php
error_reporting(0);

if (!$conn = mysqli_connect("localhost", "root", "", "cms"))
    {
    $connError = 'Y';
    }

error_reporting(E_ALL & ~(E_WARNING | E_NOTICE));

if (isset($_POST['submit']))
    {
    header('location:http://paperflybd.com/api_temporary_merchant_registration.php');
    $merchantName = trim($_POST['merchantName']);
    $merchantName = mysqli_real_escape_string($conn, $merchantName);
    $contactPerson = trim($_POST['contactPerson']);
    $contactPerson = mysqli_real_escape_string($conn, $contactPerson);
    $contactNumber = trim($_POST['contactNumber']);
    $contactNumber = mysqli_real_escape_string($conn, $contactNumber);
    $address = trim($_POST['address']);
    $address = mysqli_real_escape_string($conn, $address);

    //    $district = trim($_POST['district']);
    //    $thanaid = trim($_POST['thanaid']);

    $insertsql = "INSERT INTO temporary_merchant_reg
                (merchantName, contactPerson, contactNumber, address, creation_date)
                values ('$merchantName', '$contactPerson', '$contactNumber', '$address', NOW() + INTERVAL 6 HOUR)";
    if (!mysqli_query($conn, $insertsql))
        {
        $error = "Insert Error : " . mysqli_error($conn);
        echo "<div class='alert-danger'>";
        echo "<strong>Error!</strong>" . $error;
        echo "</div>";
        }
      else
        {

        //        $tdQuery ="select thanaName, districtName from tbl_thana_info, tbl_district_info where tbl_thana_info.districtId = tbl_district_info.districtId and tbl_thana_info.thanaId = $thanaid";
        //        $tdResult = mysqli_query($conn, $tdQuery);
        //        $tdRow = mysqli_fetch_array($tdResult);

      /*  $to = "info@paperfly.com.bd";
        $subject = "Merchant Application from" . " " . $merchantName;
        $message = "Application Received from :" . " " . $merchantName . "nContact Person : " . $contactPerson . "nContact Number :" . $contactNumber . "nAddress: " . $address;
        $from = "Website Merchant Registration<noreply@paperfly.com.bd>";
        $headers = "From:" . $from . "rn";
        $headers.= "Bcc:ishtiaq.ahsan@gmail.comrn";
        mail($to, $subject, $message, $headers);
        echo "<div class='alert-success'>";
        echo "Thank you for your interest. One of our Relationship Manager will contact you soon.";
        echo "</div>";*/
        }

    mysqli_close($conn);
    }


include 'frm_merchant_reg.php'

?>
    </div>
   

<?php
include 'modFooter.php';
 ?>