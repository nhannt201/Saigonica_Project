<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html lang="vi">
<head>
<title>Quản lí tài khoản - Saigonica.com</title>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
</head>
<body>
<?php include("_menu.php") ?>
<!--
<header class="jumbotron text-center">
<h2>Saigonica - Nền tảng Blog nhanh!</h2>
<p class="text-warning">Chia sẻ mọi cảm xúc của bạn!</p>
</header> -->
<article class="container">
<div class="row">
<div class="col-md-9">
<!--Nam vao vung can le trai-->
<div class="panel panel-default">
<div class="panel-body">

<form><!--Form post trang thai-->
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Bạn đang cảm thấy gì?</label>
    <textarea class="form-control" id="exampleFormControlTextarea1" placeholder="Tôi cảm thấy..." rows="3"></textarea>
	  </div>
	   <div class="text-right">
	 <button type="submit" class="btn btn-default">Cập nhật</button>
	   </div>
	    </div>
		 </div>
</form>
</article>
</body>
</html>