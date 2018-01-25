<?php
include 'header.php';
?><head>
<link rel="stylesheet" type="text/css" href="../css/mystyle.css"/></head>
<body>
<form method=get action=hover1.php>
<!--container start-->
<div class="wrapper">
  <div id="slider">
    <div id="slide-wrapper" class="rounded clear"> 
<div id="container">

  <div id="container_body">
  
    <div>
   <center>   <h2 class="form_title"><font size=5 color=white>Registration Form</font></h2></center>
    </div>
    <!--Form  start-->

    <center><div id="form_name">
      <div class="firstnameorlastname">
       <form name="form">  
        <input  id="first" type="text" name="fnm" onkeypress="nameValid()" value="" placeholder="First Name"  class="name" required=required>
        <input  id="first" type="text" name="lnm" value="" placeholder="Last Name" class="name"  required=required>         
      </div>
      <div id="email_form">
        <input  id="first"  type="text" name="email" value=""  placeholder="Your Email" class="email"  required=required>
      </div>
      <div id="Re_email_form">
        <input   id="first" type="text" name="reemail" value=""  placeholder="Re-enter Email" class="email1"  required=required>
    </div>
      <div id="password_form">
        <input   id="first" type="text" name="mobile" value=""  placeholder="Enter Mobile Number" class="password"  required=required>
      </div>
<div id="mobile_form">
        <input   id="first" type="text" name="qualification" value=""  placeholder="Enter Qualification" class="qualification"  required=required>
      </div>
      <!--birthday details start-->
      <div>
        
<input  id="first"  type=date name="date" value=""  placeholder="Enter Your Date of Birth" class="dateofbirth"  required=required>

      </div>
   <div id="address_form">
        <input   id="first" type="text" name="address" value=""  placeholder="Enter Address" class="address"  required=required>
      </div>
   
      <!--birthday details ends-->
      <div id="radio_button">
        <input type="radio" name="gender" value="Female"  required=required>
        <label >Female</label>
        &nbsp;&nbsp;&nbsp;
        <input type="radio" name="gender" value="Male"  required=required>
        <label >Male</label>             
      </div>  
      <div id="btn">
      <div id="submit">
        	<input id=first type=submit value=Submit >
<input id=first type=reset value=Cancel </p>     	
      </div>   	
      </div>
     </form>
     <div id="errorBox"></div>
    </div>        
    <!--form ends-->

  </div>
</div>
</div>
</div></div></center>

<!--container ends-->
<script type="text/javascript" src="../js/jquery"></script>
	<script src="../js/jquery.js"></script>
	<script src="../js/myjs.js"></script><br><br><br><br><br><br><br><br><br>
<?php
include 'footer.php';
?>
</form>
</body>
</html>