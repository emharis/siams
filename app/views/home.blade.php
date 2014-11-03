<!DOCTYPE html>
<html>

<head>
	<base href="{{ URL::to('/') }}/login">
  <meta charset="UTF-8">

  <title>SIAM BAAK</title>

  <link rel='stylesheet prefetch' href='login/css/animate.min.css'>
    <link rel="stylesheet" href="login/css/style.css" media="screen" type="text/css" />
 <!-- FAVICON -->
    <link rel="shortcut icon" href="/logo.ico" type="image/x-icon" >
</head>

<body>

  <div class='form animated flipInX'>
  <div style="text-align:center;margin-bottom:10px;">
	<img src="login/images/logo-min.png" width="30%" />
  </div>
  
  <h2 style="text-align:center;">Selamat Datang</h2>
  <h2 style="text-align:center;" >SIAM BAAK - STKW SURABAYA</h2>
  
  {{Form::open(array('url'=>URL::to('home/login')))}}
    <input placeholder='Username' type='text'>
    <input placeholder='Password' type='password'>
    <button class='animated infinite pulse'>Login</button>
  {{Form::close()}}
</div>

  <script src='js/jquery-2.1.1.min.js'></script>

  <script src="js/index.js"></script>

</body>

</html>