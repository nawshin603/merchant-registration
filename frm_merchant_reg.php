<script>
    function myfunction(){
      var x = document.forms["merchant_reg"]["email"].value;
   
        if (x == "") {
        alert("You must enter your email");
      }else{

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
     }


   </script>

<div class="stdFormHeader"> New Merchant Registration</div>
<form id="merchant_reg" action="" method="POST">
  <table>
  <tbody>
    <tr>
      <td colspan="3">
      <h3><u>Basic Information</u></h3>
    </td>
    </tr>
    <tr>
      <td>
          <label class="stdFormLabel">Merchant name : </label>
          <input class="stdFormInput" type="text" name="merchantName" required>
      </td>
      <td> 
          <label class="stdFormLabel">Business Type : </label>
          <select class="stdFormInput" id="businessType" name="businessType">
              <option value="Market Place">Market Place</option>
              <option value="Shop">Shop</option>
          </select>
      </td>
      <td>
          <label class="stdFormLabel">Product(s) Nature : </label>
          <input class="stdFormInput" type="text" name="productNature">
      </td>
    </tr>
    <tr>
      <td>
          <label class="stdFormLabel">Address : </label><input  class="stdFormInput" type="text" name="address">
      </td>
      <td> 
          <label class="stdFormLabel">District : </label>
          <select class="stdFormInput" id="districtid" name="districtid">
              <option value=""></option>
              <option value=""></option>
          </select>
      </td>
      <td> 
          <label class="stdFormLabel">Thana : </label>
          <select class="stdFormInput" id="thanaid" name="thanaid">
              <option value=""></option>
              <option value=""></option>
          </select>
      </td>
    </tr>
    <tr>
      <td>
          <label class="stdFormLabel">Website : </label>
          <input class="stdFormInput" type="text" name="website">
      </td>
      <td>
          <label class="stdFormLabel">Facebook Page : </label>
          <input class="stdFormInput" type="text" name="facebook">
      </td>
      <td>
          <label class="stdFormLabel">Company Phone : </label>
          <input class="stdFormInput" type="text" name="companyPhone">
      </td>
    </tr>
    <tr>
      <td colspan="3">
      <h3><u>Contact Person Details</u></h3>
    </td>
    </tr>
    <tr>
      <td>
      <label class="stdFormLabel">Name : </label><input class="stdFormInput" type="text" name="contactName" required>
      </td>
      <td>
      <label class="stdFormLabel">Designation : </label><input class="stdFormInput" type="text" name="designation" >
      </td>
      <td>
      <label class="stdFormLabel">Contact Number : </label><input class="stdFormInput" type="text" name="contactNumber" required>
      </td>
    </tr>
    <tr>
    <td>
      <label class="stdFormLabel">Email : </label><input class="stdFormInput" type="text" id="email" name="email" >
      </td>
    </tr>
    <tr>
      <td colspan="3">
      <h3><u>Bank Information</u></h3>
    </td>
    </tr>
    <tr>
        <td>
        <label class="stdFormLabel">Account Name : </label><input class="stdFormInput" type="text" name="accountName" >
        </td>
        <td>
        <label class="stdFormLabel">Account Number : </label><input class="stdFormInput" type="text" name="accountNumber" >
        </td>
        <td>
        <label class="stdFormLabel">Bank Name : </label><input class="stdFormInput" type="text" name="bankName" >
        </td>
      </tr>
      <tr>
        <td>
        <label class="stdFormLabel">Branch : </label><input class="stdFormInput" type="text" name="branch" >
        </td>
        <td>
        <label class="stdFormLabel">Routing Number : </label><input class="stdFormInput" type="text" name="routeNumber" >
        </td>
        <td>
        <label class="stdFormLabel">Payment Mode : </label>
        <select name="paymentMode" class="stdFormInput" id="paymentMode" >
            <option value="cheque">Cheque</option>
            <option value="beftn">BEFTN</option>
            <option value="cash">Cash</option>
        </select>
        </td>
      </tr>
    <tr colspan="3">

      <td>
      <input class="stdFormButton"  type="submit" name="submit" onClick="myfunction()" value="Apply">
      </td>
    </tr>

  </tbody>
</table>
  <!--  <label class="stdFormLabel">Merchant name : </label><input class="stdFormInput" type="text" name="merchantName" required><br>
   <label class="stdFormLabel">Contact Person : </label><input class="stdFormInput" type="text" name="contactPerson" required><br>
   <label class="stdFormLabel">Contact Number : </label><input class="stdFormInput" type="text" name="contactNumber" id="c_number" required><br>
   <label class="stdFormLabel">Address : </label><textarea class="stdFormInputBox" name="address"></textarea><br>

   <input class="stdFormButton"  type="submit" name="submit" onClick="myfunction()" value="Apply"> -->
</form>