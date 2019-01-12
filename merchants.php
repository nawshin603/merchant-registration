<?php
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';
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
                    $merchantName = trim($_POST['merchantName']);
                    $merchantName = mysqli_real_escape_string($conn, $merchantName);
                    $businessType = trim($_POST['businessType']);
                    $productNature = trim($_POST['productNature']);
                    $productNature = mysqli_real_escape_string($conn, $productNature);
                    $address = trim($_POST['address']);
                    $address = mysqli_real_escape_string($conn, $address);
                    $districtid = trim($_POST['districtid']);
                    $thanaid = trim($_POST['thanaid']);
                    $website = trim($_POST['website']);
                    $website = mysqli_real_escape_string($conn, $website);
                    $facebook = trim($_POST['facebook']);
                    $facebook = mysqli_real_escape_string($conn, $facebook);
                    $companyPhone = trim($_POST['companyPhone']);
                    $companyPhone = mysqli_real_escape_string($conn, $companyPhone);
                    $contactName = trim($_POST['contactName']);
                    $contactName = mysqli_real_escape_string($conn, $contactName);
                    $designation = trim($_POST['designation']);
                    $designation = mysqli_real_escape_string($conn, $designation);
                    $contactNumber = trim($_POST['contactNumber']);
                    $contactNumber = mysqli_real_escape_string($conn, $contactNumber);
                    $email = trim($_POST['email']);
                    $email = mysqli_real_escape_string($conn, $email);
                    $accountName = trim($_POST['accountName']);
                    $accountName = mysqli_real_escape_string($conn, $accountName);
                    $accountNumber = trim($_POST['accountNumber']);
                    $accountNumber = mysqli_real_escape_string($conn, $accountNumber);
                    $bankName = trim($_POST['bankName']);
                    $bankName = mysqli_real_escape_string($conn, $bankName);
                    $branch = trim($_POST['branch']);
                    $branch = mysqli_real_escape_string($conn, $branch);
                    $routeNumber =trim($_POST['routeNumber']);
                    $routeNumber = mysqli_real_escape_string($conn, $routeNumber);
                    $paymentMode = trim($_POST['paymentMode']);

    //    $district = trim($_POST['district']);
    //    $thanaid = trim($_POST['thanaid']);

    $insertsql = "INSERT INTO temporary_merchant_reg
                (merchantName, shopMarket, productNature, 
                    address, thanaid, district, website, facebook, companyPhone, contactPerson, designation, contactNumber, email, accountName, accountNumber, bankName, branch, routeNumber,paymentMode, creation_date)
                values ('$merchantName' ,'$businessType' ,'$productNature' ,'$address' ,'$thanaid'  ,'$districtid', '$website',
                    '$facebook' , '$companyPhone', '$contactName', '$designation', '$contactNumber', '$email', '$accountName', '$accountNumber', '$bankName', '$branch', '$routeNumber' ,'$paymentMode', NOW() + INTERVAL 6 HOUR)";
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

       /* $to = "nawshin@paperfly.com.bd";
        $subject = "Merchant Application from" . " " . $merchantName;
        $message = "Application Received from :" . " " . $merchantName . "nContact Person : " . $contactPerson . "nContact Number :" . $contactNumber . "nAddress: " . $address;
        $from = "Website Merchant Registration<noreply@paperfly.com.bd>";
        $headers = "From:" . $from . "rn";
        $headers.= "Bcc:shamsuddinlitu@gmail.com";
        mail($to, $subject, $message, $headers);
        echo "<div class='alert-success'>";
        echo "Thank you for your interest. One of our Relationship Manager will contact you soon.";
        echo "</div>";
*/
        $url='http://paperflybd.com/api_find_tem_reg.php?id='.$contactNumber;
        $html = '<div>Someone has registered.Please Click the link below to complete the registration:<br>'
        .$url.'</div>';
           $mail = new PHPMailer(); // create a new object
           $mail->IsSMTP(); // enable SMTP
           $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
           $mail->SMTPAuth = true; // authentication enabled
           $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
           $mail->Host = "mail.paperfly.com.bd";
           $mail->Port = 587; // or 587
           $mail->IsHTML(true);
           $mail->Username = "nawshin@paperfly.com.bd";
           $mail->Password = "mypassword";
           $mail->SetFrom("info@paperfly.com.bd");
           $mail->Subject = "Test";
           $mail->Body = $html;
           $mail->AddAddress("tuli@paperfly.com.bd");
           $mail->send();
            echo "<div class='alert-success'>";
            echo "Thank you for your interest. One of our Relationship Manager will contact you soon.";
            echo "</div>";

         if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
         } else {
            echo "Message has been sent";
         }

        }

    mysqli_close($conn);
    }


include 'frm_merchant_reg.php'

?>
    </div>
 

<?php
include 'modFooter.php';
 ?>