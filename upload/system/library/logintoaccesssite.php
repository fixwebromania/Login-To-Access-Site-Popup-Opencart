<style>
body
{
	overflow: hidden;
}
.fw-login-overlay
{
	position: absolute;
	z-index: 9999;
    width: 100%;
    height: 9000px;
	backdrop-filter: blur(5px);
}
.fw-login-box
{
	margin-top: 50px!important;
	padding: 11px;
    border: 1px solid;
	width:300px;
	box-sizing: border-box;
    border-radius: 5px;
    background: #fff;
	margin:0 auto;
	z-index: 10000;
    position: absolute; 
	left: 0; 
	right: 0; 
	margin-left: auto; 
	margin-right: auto; 	
}
.fw-login-box h1
{
	text-align:center;
	margin: 0 auto;
	font-size: 20px;	
}
.fw-login-box p
{
    margin-top: 11px;	
}
.fw-login-box strong
{
	font-weight: 100;
}
.fw-login-box .btn
{
    width: 100%;	
}
.fw-login-box .custom-padding
{
	padding: 11px;
}
</style>
<div class="fw-login-overlay">	
</div>
<div class="fw-login-box">
	  <h1>Welcome</h1>
	  <p><strong>Please login to access this website.</strong></p>
	  <form action="<?php print $action; ?>" method="post" enctype="multipart/form-data">
		 <div class="form-group">
			<label class="control-label" for="input-email">E-Mail Address</label>
			<input type="text" name="email" value="" placeholder="E-Mail Address" id="input-email" class="form-control">
		 </div>
		 <div class="form-group">
			<label class="control-label" for="input-password">Password</label>
			<input type="password" name="password" value="" placeholder="Password" id="input-password" class="form-control">
		 </div>
		 <div class="form-group">
			<a href="<?php print $register; ?>">Register</a> now
			<a href="<?php print $forgotten; ?>">Reset Password</a>
		 </div>
		 <input type="submit" value="Login" class="btn btn-primary">
	  </form>
   </div>
</div>