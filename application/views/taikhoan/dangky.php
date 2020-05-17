<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html lang="vi">
<head>
<title>Tham gia Saigonica.com</title>
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

    <h3 class="panel-title">Đăng ký tài khoản mới</h3>

  </div>

  <div class="panel-body">
		  <form id="frm_profile" method="POST" action="/dangky/new_user">
	<!--endchose-->
	<br/>
	<!--InforPrivate-->
<div class="input-group">
  <span class="input-group-addon">Họ và tên (Nickname)</span>
  <input type="text" class="form-control" id="my_fullname" name="my_fullname" value="Sơn Tùng MTP" placeholder="Trần Văn B">
</div>

<!--Mail-->
<br/>
<div class="input-group">
  <span class="input-group-addon">Địa chỉ E-mail</span>
  <input type="email" class="form-control" id="my_email" name="my_email" value="myemail@gmail.com" placeholder="example_mail@example.com">
</div>
<!--Phone-->
<br/>
<div class="input-group">
  <span class="input-group-addon">Số điện thoại (+84)</span>
  <input type="number" class="form-control" id="my_phone" name="my_phone" value="0123456789" placeholder="0893346785">
</div>
<!--Pass-->
<br/>
<div class="input-group">
  <span class="input-group-addon">Mật khẩu</span>
  <input type="password" class="form-control" id="my_pass" name="my_pass" value="0123456789" placeholder="0893346785">
</div>
<!--Re-Pass-->
<br/>
<div class="input-group">
  <span class="input-group-addon">Nhập lại mật khẩu</span>
  <input type="password" class="form-control" id="my_repass" name="my_repass" value="0123456789" placeholder="0893346785">
</div>

<!--Save-->
<br/>
	    <div class="text-right">
	 <input type="submit" class="btn btn-default" value="Đăng ký"/>
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