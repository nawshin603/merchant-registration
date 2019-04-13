<?php include 'modHeader.php';
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;

    require 'PHPMailer/src/Exception.php';
    require 'PHPMailer/src/PHPMailer.php';
    require 'PHPMailer/src/SMTP.php';?>

    <!-------------------------------------- Page Body -->

    <div class="pageCoverPanel shortHeight">
        <img class="pageCoverImg" src="./img/ContactPCP.jpg" alt="Page Cover">
    </div>


    <div class="contactPageContainer">
        <div class="contactInfoContainer">
            <h4>Contact Info:</h4>

            <h3>Paperfly Private Limited</h3>
            House 52, Road 1, <br>
            Block I, Banani, <br>
            Dhaka 1213, <br>
            Bangladesh<br>
            <br>
            Call: +88 01998706032 <br>
<!--            Call: +88 01 6767 29534 <br>-->
            Email: info@paperfly.com.bd<br>
            <a href="https://www.facebook.com/paperfly123/"><img src="./img/facebookButton.jpg"></a>
        </div>
        <div class="contactFormContainer">
            <?php
            if (isset($_POST['qrySubmit'])) {
//                $qryName = trim($_POST['qryName']);
//                $qryName = mysqli_real_escape_string($conn, $qryName);
//                $qryEmail = trim($_POST['qryEmail']);
//                $qryEmail = mysqli_real_escape_string($conn, $qryEmail);
//                $qryPhone = trim($_POST['qryPhone']);
//                $qryPhone = mysqli_real_escape_string($conn, $qryPhone);
//                $qryQuery = trim($_POST['qryQuery']);
//                $qryQuery = mysqli_real_escape_string($conn, $qryQuery);
                /*$to = "info@paperfly.com.bd";
                $subject = "Customer Query from ".trim($_POST['qryName']);
                $message = "Name: " . trim($_POST['qryName']) . "\nEmail: " . trim($_POST['qryEmail']) . "\nContact Number :" . trim($_POST['qryPhone']) . "\nQuery: " . trim($_POST['qryQuery']);
                $from = "Website Query<noreply@paperfly.com.bd>";
                $headers = "From:" . $from . "\r\n";
                $headers .= "Bcc:ishtiaq.ahsan@gmail.com\r\n";
                mail($to, $subject, $message, $headers);
                echo "<div class='alert-success'>";
                echo "Thank you for writing to us. <br>One of our Relationship Manager will contact you soon.";
                echo "</div>";*/
 $mail = new PHPMailer(); // create a new object
           $mail->IsSMTP(); // enable SMTP
           $mail->SMTPDebug = 0; // debugging: 1 = errors and messages, 2 = messages only
           $mail->SMTPAuth = true; // authentication enabled
           $mail->SMTPSecure = 'auto'; // secure transfer enabled REQUIRED for Gmail
           $mail->Host = "mail.paperfly.com.bd";
           $mail->Port = 587; // or 587
           $mail->IsHTML(true);
           $mail->Username = "info@paperfly.com.bd";
           $mail->Password = "@info$";
           $mail->SetFrom('noreply@paperfly.com.bd', 'Website Query');
           $mail->AddReplyTo('noreply@paperfly.com.bd', 'Website Query');
           $mail->Subject = "Customer Query from ".trim($_POST['qryName']);
           $mail->Body = "Name: " . trim($_POST['qryName']) . "\nEmail: " . trim($_POST['qryEmail']) . "\nContact Number :" . trim($_POST['qryPhone']) . "\nQuery: " . trim($_POST['qryQuery']);
           $mail->AddAddress("info@paperfly.com.bd");
           //$mail->send();
          
      

         if(!$mail->Send()) {
            echo "Mailer Error: " . $mail->ErrorInfo;
         } else {
            //echo "Message has been sent";
             echo "<div class='alert-success'>";
                echo "Thank you for writing to us. <br>One of our Relationship Manager will contact with you very soon.";
                echo "</div>";
         }
            }
            ?>
            <form method="post" action="">
                <h4>Write to Us</h4>
                <label class="stdFormLabel">Name:</label><input class="stdFormInput" type="text" name="qryName"
                                                                required><br>
                <label class="stdFormLabel">Email:</label><input class="stdFormInput" type="text" name="qryEmail"
                                                                 required><br>
                <label class="stdFormLabel">Phone:</label><input class="stdFormInput" type="text" name="qryPhone"
                                                                 required><br>
                <label class="stdFormLabel">Query:</label><input class="stdFormInputBox" type="text" name="qryQuery"
                                                                 required><br>
                <input class="stdFormButton" type="submit" name="qrySubmit" value="Submit">
            </form>
        </div>
    </div>

<?php include 'modFooter.php'; ?>
