<script>
    function myfunction(){

         $.ajax({
           type: 'post',
           url: 'merchants.php',
           data: $('form').serialize(),
           success: function () {
             alert('form was submitted');
           }
         });
          $.ajax({
           type: 'post',
           url: 'http://paperflybd.com/api_temporary_merchant_registration.php',
           data: $('form').serialize(),
           success: function () {
             alert('form was submitted');
           }
         });
     }


   </script>

<div class="stdFormHeader"> New Merchant Registration</div>
<form action="" method="POST">
   <label class="stdFormLabel">Merchant name : </label><input class="stdFormInput" type="text" name="merchantName" required><br>
   <label class="stdFormLabel">Contact Person : </label><input class="stdFormInput" type="text" name="contactPerson" required><br>
   <label class="stdFormLabel">Contact Number : </label><input class="stdFormInput" type="text" name="contactNumber" required><br>
   <label class="stdFormLabel">Address : </label><textarea class="stdFormInputBox" name="address"></textarea><br>
<input class="stdFormButton"  type="submit" name="submit" onClick="myfunction()" value="Apply">
</form>