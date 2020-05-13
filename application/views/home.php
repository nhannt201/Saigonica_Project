<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><html lang="vi">
<head>
<title>Saigonica - Nền tảng Blog nhanh!</title>
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
<?php 
// if($checkform == TRUE){
// 	echo 'Login Success';
// }else{
// echo 'Login That bai';
// }
?>
<form action="form_post" method="POST"><!--Form post trang thai-->
  <div class="form-group">
    <label for="exampleFormControlTextarea1">Bạn đang cảm thấy gì?</label>
    <textarea class="form-control" id="posts" name = "posts" placeholder="Tôi cảm thấy..." rows="3"></textarea>
	  </div>
	   <div class="text-right">
	 <button type="submit" name ="submit" class="btn btn-default">Cập nhật</button>
	   </div>
	    </div>
		 </div>
</form>
<div class="panel panel-default">
<div class="list-group-item">
<p><b><a>Hoa Thiên Cốt</a></b> <span class="pull-right">10. 5. 2020</span></p>
Hôm nay trời nóng quá!!! Tôi mới làm ly đá bào ăn cho bỏ nóng này!
<br /><button class="btn btn-xs btn-default"><b>Thích</b> 500</button><button class="btn btn-xs btn-default"><b>Tim</b> 1000</button>
</div>
<div class="list-group-item">
<p><b><a>Lee Nann Anh</a></b> <span class="pull-right">1. 5. 2020</span></p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia doloremque minima ab? Id provident aperiam atque excepturi repudiandae quis eveniet expedita dolores esse doloremque quasi sed magnam commodi sit modi!
<br /><button class="btn btn-xs btn-default"><b>Like</b> 500</button>
</div>
<div class="list-group-item">
<p><b><a>Lee Nann Anh</a></b> <span class="pull-right">1. 5. 2020</span></p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia doloremque minima ab? Id provident aperiam atque excepturi repudiandae quis eveniet expedita dolores esse doloremque quasi sed magnam commodi sit modi!
<br /><button class="btn btn-xs btn-default"><b>Like</b> 500</button>
</div>
<div class="list-group-item">
<p><b><a>Lee Nann Anh</a></b> <span class="pull-right">1. 5. 2020</span></p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia doloremque minima ab? Id provident aperiam atque excepturi repudiandae quis eveniet expedita dolores esse doloremque quasi sed magnam commodi sit modi!
<br /><button class="btn btn-xs btn-default"><b>Like</b> 500</button>
</div>
<div class="list-group-item">
<p><b><a>Lee Nann Anh</a></b> <span class="pull-right">1. 5. 2020</span></p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia doloremque minima ab? Id provident aperiam atque excepturi repudiandae quis eveniet expedita dolores esse doloremque quasi sed magnam commodi sit modi!
<br /><button class="btn btn-xs btn-default"><b>Like</b> 500</button>
</div>
<div class="list-group-item">
<p><b><a>Lee Nann Anh</a></b> <span class="pull-right">1. 5. 2020</span></p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia doloremque minima ab? Id provident aperiam atque excepturi repudiandae quis eveniet expedita dolores esse doloremque quasi sed magnam commodi sit modi!
<br /><button class="btn btn-xs btn-default"><b>Like</b> 500</button>
</div>
<div class="list-group-item">
<p><b><a>Lee Nann Anh</a></b> <span class="pull-right">1. 5. 2020</span></p>
Lorem ipsum dolor sit amet, consectetur adipisicing elit. Officia doloremque minima ab? Id provident aperiam atque excepturi repudiandae quis eveniet expedita dolores esse doloremque quasi sed magnam commodi sit modi!
<br /><button class="btn btn-xs btn-default"><b>Like</b> 500</button>
</div>
<div class="list-group-item">
<ul class="pager">
<li class="previous"><a href="#">&larr; Older</a></li>
<li class="next"><a href="#">Newer &rarr;</a></li>
</ul>
</div>
</div>
</div>
<div class="col-md-3">
<div class="panel panel-default">
<div class="list-group-item active">
Introduction
</div>
<div class="list-group-item">
<h4 class="list-group-item-heading"><center>Micro BLog</center></h4>
<p class="list-group-item-text"> Chia se nhung bai viet cua ban
. viet nen cam xuc cau ban</p>
</div>
<div class="list-group-item">
<h4 class="list-group-item-heading"><center>About me</center></h4>
<p class="list-group-item-text">My name is XXX, I am a doctor and like write blogs</p>
</div>
<div class="list-group-item">
<h4 class="list-group-item-heading"><center>Thong KE</center></h4>
<p>post <span class="pull-right">10</span></p>
<p>usser <span class="pull-right">10</span></p>
<p>like <span class="pull-right">10</span></p>
<p>commet <span class="pull-right">10</span></p>
<p>view <span class="pull-right">10</span></p>
<p>traffic <span class="pull-right">10</span></p>
</div>
<div class="list-group-item">
<h4 class="list-group-item-heading"><center>Thanh Vien</center></h4><br />
<div class="row">
<div class="col-xs-6 col-md-3">
<a href="#" class="thumbnail">
<img data-src="holder.js/100%x180" alt="100%x180" style=" width: 100%; display: block;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMzYiIGhlaWdodD0iMTgwIj48cmVjdCB3aWR0aD0iMTM2IiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjY4IiB5PSI5MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjEzNngxODA8L3RleHQ+PC9zdmc+">
</a>
</div>
<div class="col-xs-6 col-md-3">
<a href="#" class="thumbnail">
<img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMzYiIGhlaWdodD0iMTgwIj48cmVjdCB3aWR0aD0iMTM2IiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjY4IiB5PSI5MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjEzNngxODA8L3RleHQ+PC9zdmc+" style=" width: 100%; display: block;">
</a>
</div>
<div class="col-xs-6 col-md-3">
<a href="#" class="thumbnail">
<img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMzYiIGhlaWdodD0iMTgwIj48cmVjdCB3aWR0aD0iMTM2IiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjY4IiB5PSI5MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjEzNngxODA8L3RleHQ+PC9zdmc+" style=" width: 100%; display: block;">
</a>
</div>
<div class="col-xs-6 col-md-3">
<a href="#" class="thumbnail">
<img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMzYiIGhlaWdodD0iMTgwIj48cmVjdCB3aWR0aD0iMTM2IiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjY4IiB5PSI5MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjEzNngxODA8L3RleHQ+PC9zdmc+" style=" width: 100%; display: block;">
</a>
</div>
<div class="col-xs-6 col-md-3">
<a href="#" class="thumbnail">
<img data-src="holder.js/100%x180" alt="100%x180" style=" width: 100%; display: block;" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMzYiIGhlaWdodD0iMTgwIj48cmVjdCB3aWR0aD0iMTM2IiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjY4IiB5PSI5MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjEzNngxODA8L3RleHQ+PC9zdmc+">
</a>
</div>
<div class="col-xs-6 col-md-3">
<a href="#" class="thumbnail">
<img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMzYiIGhlaWdodD0iMTgwIj48cmVjdCB3aWR0aD0iMTM2IiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjY4IiB5PSI5MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjEzNngxODA8L3RleHQ+PC9zdmc+" style=" width: 100%; display: block;">
</a>
</div>
<div class="col-xs-6 col-md-3">
<a href="#" class="thumbnail">
<img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMzYiIGhlaWdodD0iMTgwIj48cmVjdCB3aWR0aD0iMTM2IiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjY4IiB5PSI5MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjEzNngxODA8L3RleHQ+PC9zdmc+" style=" width: 100%; display: block;">
</a>
</div>
<div class="col-xs-6 col-md-3">
<a href="#" class="thumbnail">
<img data-src="holder.js/100%x180" alt="100%x180" src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHdpZHRoPSIxMzYiIGhlaWdodD0iMTgwIj48cmVjdCB3aWR0aD0iMTM2IiBoZWlnaHQ9IjE4MCIgZmlsbD0iI2VlZSIvPjx0ZXh0IHRleHQtYW5jaG9yPSJtaWRkbGUiIHg9IjY4IiB5PSI5MCIgc3R5bGU9ImZpbGw6I2FhYTtmb250LXdlaWdodDpib2xkO2ZvbnQtc2l6ZToxMnB4O2ZvbnQtZmFtaWx5OkFyaWFsLEhlbHZldGljYSxzYW5zLXNlcmlmO2RvbWluYW50LWJhc2VsaW5lOmNlbnRyYWwiPjEzNngxODA8L3RleHQ+PC9zdmc+" style=" width: 100%; display: block;">
</a>
</div>
</div>
</div>
</div>
</div>
</div>
</article>
</body>
</html>