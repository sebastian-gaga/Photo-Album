<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
</head>
    <meta charset="utf-8"/>
<?php include 'includes/hlinks.php'; ?>
  <style type="text/css">

#login .container #login-row #login-column #login-box {
  margin-top: 120px;
  border: 1px solid #9C9C9C;
  background-color: white;
  border-radius: 6px;
}
#login .container #login-row #login-column #login-box #login-form {
  padding: 20px;
}
#login .container #login-row #login-column #login-box #login-form #register-link {
  margin-top: -85px;
}
  </style>
</head>
<body style="background: #8080803b;background-size:cover;background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');">
  <?php include 'includes/nav.php'; ?>
<div class="container">
  <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6 col-md-offset-3">
                    <div id="login-box" class="col-md-12">
                        <form id="LoginForm" class="form" >
                            <h3 class="text-center text-info">Login</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Name:</label><br>
                                <input type="text" placeholder="Enter Name ..." name="name" id="username" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="password" class="text-info">Password:</label><br>
                                <input type="password" placeholder="Enter Password ..." name="password" id="password" class="form-control">
                            </div>
                            <div class="form-group text-right">
                                <a href="Signup.php" class="text-info"><strong><< Sign Up Here >></strong></a> 
                              </div>
                            <div class="form-group text-right">
                                  <input type="submit" name="submit" class="btn btn-info btn-md btlogin" value="Sign in">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

       <script type="text/javascript">
  $('.btlogin').click(function(e){
       e.preventDefault();
      $.ajax({
                    url: 'Login-ajax.php',
                    data: new FormData($("#LoginForm")[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success: function(result) {
                        //alert(result);
                        if(result=='success'){
                          //alert('Record Successfully Added');
                          window.location="Upload.php";
                        }
                    }
                });
      });
</script>

</body>
</html>