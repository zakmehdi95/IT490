<!DOCTYPE html>
<link rel="stylesheet" href="style.css">
<title> Sign up</title>
<style>
input[type=text], input[type=password]{
    width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=date]{
	 width: 25%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
</style>
<script>
function passwordCheck() {
    var pass1 = document.getElementById("password").value;
    var pass2 = document.getElementById("conf_password").value;
    var ok = true;
    if (pass1 != pass2) {
        document.getElementById("password").style.borderColor = "#E34234";
        document.getElementById("conf_password").style.borderColor = "#E34234";
        alert("Passwords Do not match");
        ok = false;
    }
    else {
        alert("Passwords Match!!!");
    }
    return ok;
}
</script>
<H2> Sign up </H2>
<form class="form-horizontal">
<fieldset>
<!-- Text input-->
<fieldset>
<div class="form-group">
  <label1  for="first_name">First Name</label1>  
  <div class="col-md-4">
  <input id="first_name" name="first_name" type="text" placeholder="First"   required="">
    
  </div>
</div>
<br>
<!-- Text input-->
<div class="form-group">
  <label1  for="last_name">Last Name</label1>  
  <div class="col-md-4">
  <input id="last_name" name="last_name" type="text" placeholder="Last"   required="">
    
  </div>
</div>
<br>
<!-- Multiple Radios -->
<div class="form-group">
  <label1  for="gender">Gender</label1>
  <div class="col-md-4">
  <div class="radio">
    <label1 for="gender-0">
      <input type="radio" name="gender" id="gender-0" value="M" checked="checked">
      Male
    </label1>
	</div>
  <div class="radio">
    <label1 for="gender-1">
      <input type="radio" name="gender" id="gender-1" value="F">
      Female
    </label1>
	</div>
  </div>
</div>
<br>

<div class="form-group">
  <label1  for="gender">Date of Birth</label1>
  <div class="col-md-4">
  <div class="radio">
    <label1 for="dob">
      <input type="Date" name="dob" id="dob">
    </label1>
	</div>
  </div>
</div>

</fieldset>
<br><br>


<!-- Text input-->
<fieldset>
<div class="form-group">
  <label1  for="street_address">Street Address</label1>  
  <div class="col-md-4">
  <input id="street_address" name="street_address" type="text" placeholder="House number, Street Name etc."   required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label1  for="city">City</label1>  
  <div class="col-md-4">
  <input id="city" name="city" type="text" placeholder="City"   required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label1  for="state">State</label1>  
  <div class="col-md-4">
  <input id="state" name="state" type="text" placeholder="State"   required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label1  for="zip">Zip Code</label1>  
  <div class="col-md-4">
  <input id="zip" name="zip" type="text" placeholder="5 - digits zip"   required="">
    
  </div>
</div>
</fieldset>
<br><br>
<fieldset>
<!-- Text input-->
<div class="form-group">
  <label1  for="user_name">User Name</label1>  
  <div class="col-md-4">
  <input id="user_name" name="user_name" type="text" placeholder="username"   required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label1  for="password">Password</label1>  
  <div class="col-md-4">
  <input id="form_password" name="password" id="password" type="password" placeholder="password"   required="">
    
  </div>
</div>

<!-- Text input-->
<div class="form-group">
  <label1  for="conf_password">Confirm Password</label1>  
  <div class="col-md-4">
  <input id="conf_password" name="conf_password" id="conf_password" type="password" placeholder="confirm password"   required="">
    
  </div>
</div>
</fieldset>
<br>
<input type="submit" name="Registrationsubmit" onsubmit="passwordCheck()">
<br>
</form>
</fieldset>
</form>
</html>