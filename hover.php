<!DOCTYPE html>
<html class=''>
<head>
	<meta name='apple-mobile-web-app-capable' content='yes'>
	<meta content='text/html; charset=utf-8' http-equiv='Content-Type'>
	<meta name='viewport' content='width=device-width, initial-scale=1'>

	<title>personal website</title>

	<link rel="stylesheet" type="text/css" href="./css/mystyle.css"/>
	<!--[if lt IE 9]><script src="http://html5shin.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
</head>
<body>

<!--container start-->
<div id="container">

  <div id="container_body">
  
    <div>
      <h2 class="form_title">Registration Form</h2>
    </div>
    <!--Form  start-->
    <div id="form_name">
      <div class="firstnameorlastname">
       <form name="form">  
        <input type="text" name="Name" onkeypress="nameValid()" value="" placeholder="First Name"  class="name">
        <input type="text" name="LastName" value="" placeholder="Last Name" class="name">         
      </div>
      <div id="email_form">
        <input type="text" name="Email" value=""  placeholder="Your Email" class="email">
      </div>
      <div id="Re_email_form">
        <input type="text" name="enterEmail" value=""  placeholder="Re-enter Email" class="email">
      </div>
      <div id="password_form">
        <input type="password" name="Password" value=""  placeholder="New Password" class="password">
      </div>
      <!--birthday details start-->
      <div>
        <h3 class="birthday_title">Birthday</h3>
      </div>
      <div>
        <select name="birthday_month" >
          <option value="" selected >Month</option>
          <option value="1">Jan</option>
          <option value="2">Feb</option>
          <option value="3">Mar</option>
          <option value="4">Apr</option>
          <option value="5">May</option>
        </select>
        &nbsp;&nbsp;
        <select name="birthday_day" >
          <option value="" selected>Day</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        &nbsp;&nbsp;
        <select name="birthday_year">
          <option value="" selected>Year</option>
          <option value="2013">2013</option>
          <option value="2012">2012</option>
          <option value="2011">2011</option>
          <option value="2010">2010</option>
          <option value="2009">2009</option>
        </select>
      </div>
      <input data-provide="datepicker">
      <!--birthday details ends-->
      <div id="radio_button">
        <input type="radio" name="radiobutton" value="Female">
        <label >Female</label>
        &nbsp;&nbsp;&nbsp;
        <input type="radio" name="radiobutton" value="Male">
        <label >Male</label>             
      </div>  
      <div id="btn">
      <div id="submit">
        	<p id="sign_user" onClick="Submit()">&nbsp;Sign Up </p>    	
      </div>   	
      </div>
     </form>
     <div id="errorBox"></div>
    </div>        
    <!--form ends-->

  </div>
</div>
<!--container ends-->
<script type="text/javascript" src="js/jquery"></script>
	<script src="js/jquery.js"></script>
	<script src="js/myjs.js"></script>
</body>
</html>