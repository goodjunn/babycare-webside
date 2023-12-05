<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>無標題文件</title>
<style type="text/css">
/* CLEARFIX */
.clearfix:after {content: "."; display: block; height: 0; clear: both; visibility: hidden;}
.clearfix {display: inline-block;}
* html .clearfix { height: 1%;}	
.clearfix {display: block;}	

ul,li{
	list-style-type:none;
	margin:0px;
	padding:0px;
}

.box{width:165px; height:165px; float:left; margin:8px;}
.box hover{cursor:pointer;/*小手*/}

.box1{width: 165px; height: 165px; background:rgba(0,0,0,0.7); repeat;  display: none;}
.box1 a{ color:#FFF; display: block;}
.box1 a:hover{ position:absolute; color:#FF0;}
.box:hover .box1{ display:block;}
.box1 ul li{
	font-family: "微軟正黑體";
	font-size: 10px;
	line-height: 20px;
	color: #F90;
	padding:10px;
	text-shadow:1px 1px 1px #600;
	text-transform:uppercase;
}

</style>


</head>
<body>
<img src="images/p-top-03.jpg" width="165" height="165" />
<ul>
<li>
<a href="#">
<div class="box" style="background:url(images/p-top-03.jpg)">
  <div class="box1">
    <ul>
      <li>型號:abc</li>
      <li>品名:</li>
      <li>價格:</li>
    </ul>
  </div>
</div>
</a>
</li>
<li>
<a href="#">
<div class="box" style="background:url(images/p-top-03.jpg)">
  <div class="box1">
    <ul>
      <li>型號:</li>
      <li>品名:</li>
      <li>價格:</li>
    </ul>
  </div>
</div>
</a>
</li>
<li>
<a href="#">
<div class="box" style="background:url(images/p-top-03.jpg)">
  <div class="box1">
    <ul>
      <li>型號:</li>
      <li>品名:</li>
      <li>價格:</li>
    </ul>
  </div>
</div>
</a>
</li>
</ul>




</html>