<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html lang="vi">
<head>
<title>Quản lí tài khoản - Saigonica.com</title>
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

    <h3 class="panel-title">Thông tin cá nhân</h3>

  </div>

  <div class="panel-body">
  <div class="row">
	<div class="col-md-2">
		<!--ShowAVT-->
		<div class="text-center">
          <img src="https://i.imgur.com/ntrJCDc.jpg" id="avt" alt="...">	  
		   <ul class="pager">	
				<li><a>Avatar here</a></li>
			</ul>
		  </div>
		  </div>
		  <div class="col-md-10">
		  <form id="frm_profile" method="POST" action="/profile/update_profile">
		<!--ChooseAVT-->
<div class="input-group">
  <span class="input-group-addon">Chọn ảnh đại diện</span>
  <input type="file" id="my_avt"  name="my_avt" class="form-control">
</div>
	<!--endchose-->
	<br/>
	<!--InforPrivate-->
<div class="input-group">
  <span class="input-group-addon">Họ và tên (Nickname)</span>
  <input type="text" class="form-control" id="my_fullname" name="my_fullname" value="Sơn Tùng MTP" placeholder="Trần Văn B">
</div>
<!--Sex-->
  <br/>
<div class="form-group">
  <label for="my_sex">Giới tính:</label>
  <select class="form-control" id="my_sex" name="my_sex">
    <option>Nam</option>
    <option>Nữ</option>
  </select>
</div>
<!--DateDay-->
           <label for="sel1">Sinh nhật:</label>
          <!-- Datepicker as text field -->         
          <div class="input-group date" data-date-format="dd.mm.yyyy">
            <input  type="text" id="my_birthday" name="my_birthday" class="form-control" placeholder="dd.mm.yyyy">
            <div class="input-group-addon" >
              <span class="glyphicon glyphicon-th"></span>
            </div>
          </div>
<script id="rendered-js">
$('.input-group.date').datepicker({ format: "dd.mm.yyyy" });
    </script>
<!--Mail-->
<br/>
<div class="input-group">
  <span class="input-group-addon">Địa chỉ E-mail</span>
  <input type="text" class="form-control" id="my_email" name="my_email" value="myemail@gmail.com" placeholder="example_mail@example.com">
</div>
<!--Phone-->
<br/>
<div class="input-group">
  <span class="input-group-addon">Số điện thoại (+84)</span>
  <input type="text" class="form-control" id="my_phone" name="my_phone" value="0123456789" placeholder="0893346785">
</div>

	<!--MyHouse-->
<br/>
<div class="input-group">
  <span class="input-group-addon">Địa chỉ</span>
  <input type="text" class="form-control" id="my_address" name="my_address" value="Ba Đình, Hà Nội" placeholder="Hà Nội">
</div>
      <!--Intro_me-->
<br/>
 <label>Về bản thân tôi:</label>
   <div class="form-group">
    <textarea class="form-control" id="my_about" name="my_about" rows="3">Sky ơi, say oh yeah...!</textarea>
  </div>
<!--Save-->
<br/>
	    <div class="text-right">
	 <input type="submit" class="btn btn-default" value="Lưu thông tin"/>
	   </div>
		</div>
	</div>
  </div>
</div>
</form>
<script  type='text/javascript'>
//onclick="myProfile_update()"
function myProfile_update() {
document.getElementById("frm_profile").submit();
	 document.write("Waiting for moment...");
window.location.reload(true);
}
</script>

<?php 
//if(isset($my_email) && isset($my_fullname)){
//echo "<label class='label_output'>Entered User Name : </label>".$my_fullname;
//echo "<label class='label_output'>Entered Email: </label>".$my_email;
//} 
?>
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