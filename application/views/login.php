<!DOCTYPE html>
<html>
    <head><title>login The Resturant</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assests/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assests/css/font-awesome.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assests/css/log.css')?>">
    
</head>
    <body>
        <div class="row log">
<div class="container">
    <div class="h">
<H1>Login The Resturant</H1></div>
<?php echo form_open('Welcome/login');?>
<?php if(isset($result_message)){
    echo $result_message;
} ?>
<div>
    <div>
       <label for="Email">User Email</label>
       <?php
       $emailData=array(
           'name'=>'Email',
           'placeholder'=>'put your email here'
       );
       echo form_input($emailData);
       ?>
</div>
    <div>
       <label for="Password">Password &nbsp</label>
       <?php
       $passData=array(
           'name'=>'Password',
           'placeholder'=>'*******'
       );
       echo form_password($passData);
       ?>
    </div>
<div class="btn">
        <?php echo form_submit('login_submit','login'); ?>
        <a href="signup">&nbsp&nbsp&nbspincreat account</a>
    </div>

</div>
<?php echo form_close();?>
    </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url('./assests/js/popper.min.js')?>"></script>
       <script type="text/javascript" src="<?php echo base_url('./assests/js/bootstrap.min.js')?>"></script> 
</body>
    </html>