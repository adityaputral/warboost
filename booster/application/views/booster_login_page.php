


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
   <p>Please enter your email and password</p>
   </div>
    <form id="Login" method="post" action="<?php echo base_url();?>booster/loginAttempt ">

        <div class="form-group">


            <input type="text" class="form-control" id="username" name="username" placeholder="username">

        </div>

        <div class="form-group">

            <input type="password" class="form-control" id="password" name="password" placeholder="Password">

        </div>
        
        <button type="submit" class="btn btn-primary">Login</button>

    </form>
    </div>
</div></div></div>


</body>
</html>
