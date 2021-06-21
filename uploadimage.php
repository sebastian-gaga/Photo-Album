<!DOCTYPE html>
<html>
<head>
	<title>Upload Image</title>
</head>
    <meta charset="utf-8"/>
<?php include 'includes/hlinks.php'; ?>
  <style type="text/css">
    body {
      background-image: url('http://getwallpapers.com/wallpaper/full/a/5/d/544750.jpg');
  margin: 0;
  background-size:cover
  padding: 0;
  height: 100vh;
}
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
<body >
  <?php include 'includes/nav.php'; ?>
<div class="container">
  <div id="login">
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6 col-md-offset-3">
                    <div id="login-box" class="col-md-12">
                        <form id="imgForm" class="form" >
                            <h3 class="text-center text-info">Upload Image</h3>
                            <div class="form-group">
                                <label for="username" class="text-info">Choose Image:</label><br>
                                 <input type="file" name="fileToUpload" id="fileToUpload" placeholder="Name of Model" class="form-control" required>
                            </div>
                            <div class="form-group text-right">
                                  <input type="submit" name="submit" class="btn btn-info btn-md btimg" value="Upload">
                            </div>
                            
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

       <script type="text/javascript">
  $('.btimg').click(function(e){
       e.preventDefault();
      $.ajax({
                    url: 'image-ajax.php',
                    data: new FormData($("#imgForm")[0]),
                    cache: false,
                    contentType: false,
                    processData: false,
                    type: 'POST',
                    success: function(result) {
                        //alert(result);
                        if(result=='success'){
                          alert('Image Successfully Uploaded');
                          $('#imgForm').trigger("reset");
                        }
                    }
                });
      });
</script>

</body>
</html>