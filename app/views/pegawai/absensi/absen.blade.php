<!DOCTYPE html>
<html>

<head>
	<base href="{{ URL::to('/') }}/login">
  <meta charset="UTF-8">

  <title>ABSENSI PEGAWAI</title>

  <link rel='stylesheet prefetch' href='appabsen/css/animate.min.css'>
    <link rel="stylesheet" href="appabsen/css/style.css" media="screen" type="text/css" />
 <!-- FAVICON -->
    <link rel="shortcut icon" href="/logo.ico" type="image/x-icon" >
</head>

<body>

  <div class='form animated flipInX'>
  <div style="text-align:center;margin-bottom:10px;">
	<img src="appabsen/images/logo-min.png" width="30%" />
  </div>
  
  <h2 style="text-align:center;">SELAMAT DATANG</h2>
  <h2 style="text-align:center;" >SISTEM ABSENSI PEGAWAI</h2>
  <h2 style="text-align:center;" >STKW SURABAYA</h2>
  
  <form>
      <audio id="welaudio" src="audio/selamatdatang.mp3"></audio>
    <input placeholder='NIP - Inputkan nomor NIP anda' type='text'>
    <input placeholder='PIN - dan inputkan PIN anda' type='password'>
    <button class='animated infinite pulse'>Absen</button>
  </form>
  
</div>

  <script src='js/jquery-2.1.1.min.js'></script>

  <script src="js/index.js"></script>

</body>
<script type="text/javascript">
    jQuery('form').submit(function(e){
        e.preventDefault();
        document.getElementById('welaudio').play();
        alert('Selamat Datang');
        location.reload();
    });
</script>
</html>