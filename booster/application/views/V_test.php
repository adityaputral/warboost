


<html>
  <head>
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/booster/css/login.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/booster/css/bootstrap.min.css">
<script type = 'text/javascript' src = "<?php echo base_url();  ?>/booster/js/jquery.min.js"></script>
<script type = 'text/javascript' src = "<?php echo base_url(); ?>/booster/js/bootstrap.min.js"></script>

<!------ Include the above in your HEAD tag ---------->
  </head>
<div class="container">
<h1 class="form-heading">login Form</h1>
<div class="login-form">
<div class="main-div">
    <div class="panel">
   <h2>Booster Login</h2>
                
   <p><?php echo $this->session->userdata('id');?></p>
   
   <p><?php echo $this->session->userdata('username');?></p>
   
   <p><?php echo $this->session->userdata('nama');?></p>
   
   <p><?php echo $this->session->userdata('nickname');?></p>

   <p><?php echo $this->session->userdata('email');?></p>
   
   <p><?php echo $this->session->userdata('rating');?></p>
   
   <p><?php echo $this->session->userdata('status');?></p>
   
   

</body>
</html>
