
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untitled</title>
    <link rel="stylesheet" href="assets/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="assets/css/styles.css">
    <link rel="stylesheet" href="assets/css/Google-Style-Login.css">
    <link rel="stylesheet" href="assets/css/untitled.css">
    <link rel="stylesheet" href="assets/css/Pretty-Registration-Form.css">
	<style>
	body
{
	background-color:#8080ff;
}
</style>
    <script type="text/javascript">
   
function val(){
if(frm.password.value == "")
{
    alert("Enter the Password.");
    frm.password.focus(); 
    return false;
}
if((frm.password.value).length < 8)
{
    alert("Password should be minimum 8 characters.");
    frm.password.focus();
    return false;
}

if(frm.connfirmpassword.value == "")
{
    alert("Enter the Confirmation Password.");
    return false;
}
if(frm.connfirmpassword.value != frm.password.value)
{
    alert("Password confirmation does not match.");
    return false;
}

return true;
}


</script>
<script type="text/javascript">
if(frm.pnumber.value=="")
{
    alert("Please enter the phone number");
    frm.pnumber.focus(); 
    return false;
}
if(isNaN(frm.pnumber.value))
{
    alert("Invalid phone number");
    frm.pnumber.focus(); 
    return false;
}
if((frm.pnumber.value).length < 10)
{
    alert("Phone number should be minimum 10 digits");
    frm.pnumber.focus(); 
    return false;
}</script>
</head>
<!--onclick="phonenumber(document.form1.pnumber)"-->
<body >
    <div class="row register-form">
        <div class="col-md-8 col-md-offset-2">
            <form action="server.php" method="POST" name="frm" class="form-horizontal custom-form">
                <h1>Register Form</h1>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">User Name</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" required="" placeholder="User Name" autofocus="" name="username">
                    </div>
                </div>
				  <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">First Name</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" required="" placeholder="First Name" name="firstname">
                    </div>
                </div>
				  <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field">Last Name</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" required="" placeholder="Last Name" name="lastname">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="email-input-field">Email Id </label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="email" required="" placeholder="Email Id" name="email"> 
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="pawssword-input-field">Password</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password" id="password" required="" placeholder="Password" name="password" ng-model="user.password" ng-pattern="user.retypepassword"  required="true">
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="repeat-pawssword-input-field">Confirm Password</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="password" id= "connfirmpassword" required="" placeholder="Confirm Password" name="connfirmpassword" ng-model="user.retypepassword" ng-pattern="user.password" required="true">
                    </div>
                </div>
				  <div class="form-group">
                    <div class="col-sm-4 label-column">
                        <label class="control-label" for="name-input-field" >Phone Number</label>
                    </div>
                    <div class="col-sm-6 input-column">
                        <input class="form-control" type="text" required="" placeholder="Enter only 10 digit number"  name="pnumber" minlength="10" maxlength="10">
                    </div>
                </div>
                    
                <button class="btn btn-default submit-button" type="submit"  name="submit"  onclick="return val();"  >create account</button>
           
            </form>
        </div>
    </div>
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/bootstrap/js/bootstrap.min.js"></script>

</body>

</html>
