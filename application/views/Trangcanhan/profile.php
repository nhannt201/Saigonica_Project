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
<?php require($_SERVER["DOCUMENT_ROOT"]."/application/views/include/head_menu.php") ?>


<article class="container">
<div class="row">
<div class="col-md-9">
<!--Nam vao vung can le trai-->
<!--Profile-->
 <style>
 #avt{
	 width: 100px;
 }
 </style>
<div class="panel panel-default">

  <div class="panel-heading">

    <h3 class="panel-title">Thông tin cá nhân</h3>

  </div>

  <div class="panel-body">
  <div class="row">
	<div class="col-md-3">
		<!--ShowAVT-->
		<div class="text-center">
          <img src="https://i.imgur.com/ntrJCDc.jpg" id="avt" alt="...">	  
		   <ul class="pager">	
				<li><a>Avatar hiện tại</a></li>
			</ul>
		  </div>
		  </div>
		  <div class="col-md-9">
		<!--ChooseAVT-->
<div class="input-group">
  <span class="input-group-addon">Chọn ảnh đại diện</span>
  <input type="file" class="form-control">
</div>
	<!--endchose-->
	<br/>
	<!--InforPrivate-->
<div class="input-group">
  <span class="input-group-addon">Họ và tên:</span>
  <input type="text" class="form-control" value="Sơn Tùng MTP" placeholder="Trần Văn B">
</div>
<!--Save-->
<br/>
	    <div class="text-right">
	 <button type="submit" class="btn btn-default">Lưu thông tin</button>
	   </div>
		</div>
	</div>
  </div>

</div>
<!--ThongtinPage-->
<div class="panel panel-default">

  <div class="panel-heading">Thông tin trang</div>

  <div class="panel-body">

  <form>


<div class="panel-body">
  <!--Input name blog-->
  <!--Form Intro Page-->
  <div class="input-group">
  <span class="input-group-addon">Tên Blog</span>
  <input type="text" class="form-control" value="Những nồi niềm tâm tư..." placeholder="Những nồi niềm tâm tư...">
  </div><br/>
      <!--Input intro blog-->
 <label>Giới thiệu blog:</label>
   <div class="form-group">
    <textarea class="form-control" rows="3">Xin chào các bạn, blog tôi chia sẻ tin tức hót hòn họt đây nà!</textarea>
  </div>
  

	<!--Radio-->
<div class="form-group">
  <label for="sel1">Hiển thị:</label>
  <select class="form-control" id="sel1">
    <option>Công khai</option>
    <option>Riêng tư</option>
  </select>
</div>
  <!--End Radio-->
    <div class="text-right">
	 <button type="submit" class="btn btn-default">Lưu thông tin</button>
	   </div>
</form>

  </div>

</div>
</div>

<!--Vung can le-->
</article>
</body>
</html>