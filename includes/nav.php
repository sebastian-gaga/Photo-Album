<?php $uri = basename($_SERVER['PHP_SELF']);?>
<input type="hidden" class="url" value="<?php echo $uri; ?> " name="">
<nav class="navbar navbar-default" style="background: #000;border-color: #fff;">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a class="navbar-brand" style="color: white;" href="index.php"><i class="fa fa-home"></i></a>
    </div>
    <?php if($uri=="upload.php"){ ?>
     <ul class="nav navbar-nav navbar-right">
      <li><a href="logout.php" style="color: white;"><span class="fa fa-power-off"></span>&nbsp;&nbsp;Logout</a></li>
    </ul>
  <?php } else if($uri=="uploadimage.php" || $uri=="images.php"){  ?>
    <ul class="nav navbar-nav navbar-right">
      <li><a href="upload.php" style="color: white;"><span class="fa fa-arrow-left"></span>&nbsp;&nbsp;Back</a></li>
    </ul>
<?php } ?>
  </div>
</nav>
<!--<script type="text/javascript">
  $(function(){
    var url=$('.url').val();
    //alert(url);
    if(url='Report.php'){
      $('.report').addClass('active');
      $('.home').removeClass('active');
      $('.data').removeClass('active');
    }
    else if(url='index.php'){
      //alert();
      $('.home').addClass('active');
      $('.report').removeClass('active');
      $('.data').removeClass('active');
    }
    else if(url='datatable.php'){
      $('.data').addClass('active');
      $('.home').removeClass('active');
      $('.report').removeClass('active');
    }
    
  });
</script>-->