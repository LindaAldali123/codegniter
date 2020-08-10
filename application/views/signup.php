<!DOCTYPE html>
    <head><title>signup</title>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assests/css/bootstrap.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assests/css/font-awesome.min.css')?>">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('./assests/css/sign.css')?>">

</head>
    <body>
    <div class="row sig">
<div class="container">
<div class="h">
<H1>Sign Up</H1></div>
<?php echo form_open('Welcome/signup');?>
<?php if(isset($result_message_fail)){
    echo $result_message_fail;
} ?>
<div>
    <div>
       <label for="Name">User Name &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
       <?php echo form_error('Name','<div><span class="sr-only">Error:</span>','</div>'); ?>
       <?php
       $nameData=array(
           'name'=>'Name',
           'placeholder'=>'put your name here'
       );
       echo form_input($nameData);
       ?>
</div>
<div>
       <label for="Email">User Email &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
       <?php echo form_error('Email','<div><span class="sr-only">Error:</span>','</div>'); ?>
       <?php
       $emailData=array(
           'name'=>'Email',
           'placeholder'=>'put your email here'
       );
       echo form_input($emailData);
       ?>
</div>
    <div>
       <label for="Password">Password &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp</label>
       <?php echo form_error('Password','<div><span class="sr-only">Error:</span>','</div>'); ?>
       <?php
       $passData=array(
           'name'=>'Password',
           'placeholder'=>'*******'
       );
       echo form_password($passData);
       ?>
    </div>
    <div>
       <label for="confirmpassword">RepeatPassword</label>
       <?php echo form_error('confirmpassword','<div><span class="sr-only">Error:</span>','</div>'); ?>
       <?php
       $conpassData=array(
           'name'=>'confirmpassword',
           'placeholder'=>'*******'
       );
       echo form_password($conpassData);
       ?>
    </div>
    
<div class="btn1">
        <?php echo form_submit('login_submit','Signup'); ?>
    </div>

</div>
<?php echo form_close();?>
    </div>
    </div>
    <script type="text/javascript" src="<?php echo base_url('./assests/js/popper.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo base_url('./assests/js/bootstrap.min.js')?>"></script> 
</body>
    </html>