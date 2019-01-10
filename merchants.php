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

      /*  $to = "test@paperfly.com.bd";
        $subject = "Merchant Application from" . " " . $merchantName;
        $message = "Application Received from :" . " " . $merchantName . "nContact Person : " . $contactPerson . "nContact Number :" . $contactNumber . "nAddress: " . $address;
        $from = "Website Merchant Registration<noreply@paperfly.com.bd>";
        $headers = "From:" . $from . "rn";
        $headers.= "Bcc:ishtiaq.ahsan@gmail.comrn";
        mail($to, $subject, $message, $headers);
        echo "<div class='alert-success'>";
        echo "Thank you for your interest. One of our Relationship Manager will contact you soon.";
        echo "</div>";*/
        

        $url='http://paperflybd.com/api_find_tem_reg.php?id='.$contactNumber;
        $html = '<div>Someone has registered.Please Click the link below to complete the registration:<br>'
        .$url.'</div>';
        $mail = new PHPMailer(); // create a new object
        $mail->IsSMTP(); // enable SMTP
        $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
        $mail->SMTPAuth = true; // authentication enabled
        $mail->SMTPSecure = 'ssl'; // secure transfer enabled REQUIRED for Gmail
        $mail->Host = "smtp.gmail.com";
        $mail->Port = 465; // or 587
        $mail->IsHTML(true);
        $mail->Username = "nawshin603@gmail.com";
        $mail->Password = "Poroshektabae1993";
        $mail->SetFrom("example@gmail.com");
        $mail->Subject = "Test";
        /*$mail->Body = "helloo" ;
        $mail->AddAddress("ridwana.tuli@gmail.com");
        //$mail->AddEmbeddedImage('img/sample 2.png', 'yeee');
        $mail->send();
        $mail->ClearAllRecipients();*/
        $mail->Body = $html;
        $mail->AddAddress("nawshin603@gmail.com");
        $mail->send();

         /*if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
         } else {
            echo "Message has been sent";
         }*/

        }

    mysqli_close($conn);
    }


include 'frm_merchant_reg.php'

?>
    </div>
 

<?php
include 'modFooter.php';
 ?>