<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>MasterCard Registration</title>
<script type="text/javascript" src="js/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="css/social-icon-font.css"/>
<link rel="stylesheet" type="text/css" href="fonts/custom-font.css"/>
<!-- Bootstrap -->
<link rel="stylesheet" type="text/css" href="css/bootstrap-theme.min.css"/>
<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"/>
<link rel="stylesheet" type="text/css" href="css/style.css"/>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
<script type="text/javascript" src="js/script.js"></script>
<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
<![endif]-->
</head>

<body>
<header>
<?php /*?><form action="<?php echo Yii::app()->createUrl('register/register');?>" method="POST" >*/?>
  <div class="main-div"> 
  <a href="#" class="logo-main front-logo"><img alt="" src="images/logo.png" ></a>  
    <div class="form-div" style="display:none"> <a href="#" class="btn-arrow reset-ac">Reset Activation</a> <a href="#" class="logo-small second-logo"><img alt="" src="images/logo2.png" ></a>
      <div class="inner-form-fild">
        <div class="row form-group">
          <div class="col-sm-4"> Title <span class="m-text"></span> </div>
          <div class="col-sm-8">
            <select id="title" name="title"  class="form-control" autocomplete="off">
              <option value="">Select Title</option>
              <option value="Mr.">Mr.</option>
              <option value="Ms.">Ms.</option>
              <option value="Mrs.">Mrs.</option>
            </select>
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4"> First name <span class="m-text"></span> </div>
          <div class="col-sm-8">
            <input type="text" id="firstName" name="firstName" placeholder="Enter First Name"  class="form-control" autocomplete="off">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4"> Last name </div>
          <div class="col-sm-8">
            <input type="text" id="lastName" name="lastName"  placeholder="Enter Last Name" class="form-control" autocomplete="off">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-4"> Email address </div>
          <div class="col-sm-8">
            <input type="email" id="email" name="email" placeholder="Enter Email Address" class="form-control" autocomplete="off">
          </div>
        </div>
        <div class="row form-group">
          <div class="col-sm-2" style="margin-right:0">
         	 <input type="checkbox" id="allow" name="allow" class="form-control"/> 
          </div>
          <div class="col-sm-10" style="margin-left:-20px;padding-top:5px">
            I agree to be contacted by MasterCard to hear more about products and services.
            </div>
          </div>
        <div class="row form-group" style="margin-top:30px;">
          <div class="col-sm-4"> </div>
          <div class="col-sm-8"> 
          	<span class="pull-left"><button  class="btn-arrow cancel-btn">Cancel</button></span> 
          	<span class="pull-right"><button class="btn-arrow sub-btn">Submit</button></span> 
          </div>
        </div>
      </div>
    </div>
    
    <div class="thank-you-page" style="display:none">
        	<a href="#" class=""><img alt="" src="images/logo.png" ></a>    
        	<h1>Thank You</h1>
        </div>
  </div>
  <?php /* ?></form>*/?>
</header>
</body>
</html>
