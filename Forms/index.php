<html>
<head><title>Welcome to My App</title>
<link href="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.css" rel="stylesheet"/>
<link href="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/css/bootstrap-datetimepicker.css" rel="stylesheet"/>
<script>
    var d = new Date();
</script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/moment.js/2.18.1/moment.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/bootstrap-datetimepicker/4.17.47/js/bootstrap-datetimepicker.min.js"></script>
</head>
<body style="background-color: #e6e6e6">
    <center><h1>Login to Continue</h1></center>
   <form action="index.php" method="post">
        <div style="margin-top: 5%" class="form group">
        <center> <label for="name"> Name </label>
        <input style="width:50%" type="text" class="form-control" id="name" name="name1">
        <input style="margin-top: 1%" class="btn btn-primary" type="submit"></center>
        </div>
   </form>
</body>
</html>
<?php 
  $str = $_POST["name1"];
  if(!empty($str))
  {
    echo "<p>Your name is $str </p>";
    $str_base64= base64_encode ($str);
    $date = "<script>document.write(d)</script>";
    echo "<h3>Hello $str_base64,Welcome to WNS!! $date <br></h3>";
  }  
?> 
