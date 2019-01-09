<div class="stdFormHeader"> New Merchant Registration</div>
<form action="merchants.php" method="POST">
    <label class="stdFormLabel">Merchant name : </label><input class="stdFormInput" type="text" name="merchantName" required><br>
<!--    <label class="stdFormLabel">Business Type : </label><select class="stdFormSelect" name="shopMarket" required>-->
<!--        <option value="shop">Shop</option>-->
<!--        <option value="market">Market Place</option>-->
<!--    </select><br>-->
    <label class="stdFormLabel">Contact Person : </label><input class="stdFormInput" type="text" name="contactPerson" required><br>
    <label class="stdFormLabel">Contact Number : </label><input class="stdFormInput" type="text" name="contactNumber" required><br>
    <label class="stdFormLabel">Address : </label><textarea class="stdFormInputBox" name="address"></textarea><br>

    <input class="stdFormButton"  type="submit" name="submit" value="Apply">
</form>
