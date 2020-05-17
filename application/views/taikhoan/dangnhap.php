<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html lang="vi">
<head>
<title>Đăng nhập Saigonica.com</title>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.6.1/css/bootstrap-datepicker.min.css'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js'></script>
<script src='/js/bootstrap-datepicker.min.js'></script>


	 <style>
 #avt{
	 width: 100px;
 }
 </style>

</head>

</head>
<body>
<?php require($_SERVER["DOCUMENT_ROOT"]."/application/views/include/head_menu.php") ?>


<article class="container">
<div class="row">
<div class="col-md-9">
<!--Nam vao vung can le trai-->
<!--Profile-->

<div class="panel panel-default">

  <div class="panel-heading">

    <h3 class="panel-title">Đăng nhập hệ thống</h3>

  </div>

  <div class="panel-body">
		  <form id="frm_profile" method="POST" action="/dangnhap/login_user">
	<!--endchose-->
	<br/>

<!--Mail-->
<br/>
<div class="input-group">
  <span class="input-group-addon">Địa chỉ E-mail/SĐT</span>
  <input type="text" class="form-control" id="my_user" name="my_user" value="" placeholder="example_mail@example.com">
</div>
<!--Phone-->
<!--Pass-->
<br/>
<div class="input-group">
  <span class="input-group-addon">Mật khẩu</span>
  <input type="password" class="form-control" id="my_pass" name="my_pass" value="" placeholder="0893346785">
</div>

<!--Save-->
<br/>
	    <div class="text-right">
	 <input type="submit" class="btn btn-default" value="Đăng nhập"/>
	   </div>
		</div>
	</div>
</form>

<?php 
//if(isset($my_email) && isset($my_fullname)){
//echo "<label class='label_output'>Entered User Name : </label>".$my_fullname;
//echo "<label class='label_output'>Entered Email: </label>".$my_email;
//} 
?>

<!--Vung can le-->
</article>
</body>
</html>