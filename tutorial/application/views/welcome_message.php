
<!doctype html>
<html class="no-js" lang="en" dir= "ltr">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Foundation for Sites</title>
    <link rel="stylesheet" href= "<?php echo base_url('assets/css/foundation.css'); ?>" />
    <link rel="stylesheet" href= "<?php echo base_url('assets/css/app.css'); ?>" />
    <link rel="stylesheet" href= "<?php echo base_url('assets/css/styles.css'); ?>" />
  </head>
    <style type= "text/css">
      body {
        background-image: url("<?php echo base_url();?>assets/img/bg1.jpg");
      }
      h1 {
        font-family: Microsoft Yi Baiti;
        font-size:50px;
        text-align:center;
        color:#343434;
        font-weight:bold;
      }
      h3 {
        font-family: Microsoft Yi Baiti;
        font-size:30px;
        text-align:center;
        color:#343434;
        font-weight:bold;
      }
    </style>
<body>
    <div class="container">
      <div class= "row">
        <div class= "small-12 medium-6 large-6 columns">
          <h1>Blogging System</h1>
          <div class= "row">
            <div class= "small-12 medium-9 large-9 columns">
              <h3>Sign in</h3>
              <?php echo form_open('Welcome/signin'); ?>
              <div class= "row"> 
                <div class= "small-12 medium-12 large-12 columns">
                  <?php echo form_input(['name'=>'email', 'placeholder'=>'Email', 'class'=>'Textbox']); ?>
                  <?php echo form_password(['name'=>'password', 'placeholder'=>'password', 'class'=>'Textbox']); ?>
                  <?php echo form_submit(['name'=>'submit', 'value'=>'SIGN IN', 'class'=>'hollow button secondary textbox']); ?>
                  <?php echo form_reset(['name'=>'reset', 'value'=>'RESET', 'class'=>'hollow button secondary textbox']); ?>
                </div>
              </div>
              <?php echo form_close(); ?>
            </div>
          </div>
        </div>
              <div class= "small-12 medium-6 large-6 columns">
                <h3>Registers</h3>
                    <?php echo form_open('Welcome/signup'); ?>
                    <?php if($msg = $this->session->flashdata('response'));?>
                      <div class ="response">
                        <?php echo $msg; ?>
                      </div>
                    <?php 
                    $data = array(
                      'user_role_id' => '2'
                    ); ?>
                    <?php echo form_hidden($data); ?>
                  <div class= "small-12 medium-12 large-12 columns">
                    <div class="row">                    
                    <?php echo form_input(['name'=>'username', 'placeholder'=>'Username', 'class'=>'Textbox']); ?>
                    <?php echo form_error('username', '<div class= "text denger">', '</div>'); ?>
                    
                    <?php echo form_input(['name'=>'email', 'placeholder'=>'Email', 'class'=>'Textbox']); ?>
                    <?php echo form_error('email', '<div class= "text denger">', '</div>'); ?>
                   
                    <?php echo form_password(['name'=>'password', 'placeholder'=>'Password', 'class'=>'Textbox']); ?>
                    <?php echo form_error('password', '<div class= "text denger">', '</div>'); ?>

                    <?php echo form_input(['name'=>'mobile', 'placeholder'=>'Mobile', 'class'=>'Textbox']); ?>
                    <?php echo form_error('mobile', '<div class= "text denger">', '</div>'); ?>

                    <?php echo form_submit(['name'=>'submit', 'value'=>'SIGN UP', 'class'=>'hollow button secondary textbox']); ?>
                    <?php echo form_reset(['name'=>'reset', 'value'=>'RESET', 'class'=>'hollow button secondary textbox']); ?>
                  </div>
                  </div>
              </div>
              <?php echo form_close(); ?>
            
      </div>
    </div>  

<script src = "<?php echo base_url('assets/js/vendor/jquery.js'); ?>"></script>
<script src = "<?php echo base_url('assets/js/vendor/what-input.js'); ?>"></script>
<script src = "<?php echo base_url('assets/js/vendor/foundation.js'); ?>"></script>
<script src = "<?php echo base_url('assets/js/app.js'); ?>"></script>

</body>
</html>
