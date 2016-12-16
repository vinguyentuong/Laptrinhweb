<?php
include "config.php";
//Bat cu trang  nao su dung include deu kem hang so ROOT.
include ROOT."/include/function.php";
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" type="text/css" href="css/mystyle.css"/>
<title>My website</title>
</head>

<body>
<div id="container">
<div id="header">
	<div class="menu">
        <a href="index.php">Trang chu</a>
        <a href="index.php?mod=sp">San pham</a>
		<a href="index.php?mod=sp&page=khuyenmai">Khuyen mai</a>
		<a href="index.php?mod=sp&page=moi">san pham moi</a>
        <a href="index.php?mod=tt">Tin tuc</a>
	</div><!-- end Menu -->
</div>
<!-- end Header -->
<div id="content">
<div id="left">
left
</div>
<div id="right">
<?php
print_r($_GET);

$mod = getValue("mod");
if ($mod=="")
  echo "Trang chu";
if ($mod=="sp")
  {
	 // echo "Noi dung sp";
  		include ROOT."/module/sanpham/index.php";
  }
if ($mod=="tt")
  {
	 // echo "Noi dung sp";
  		include ROOT."/module/tintuc/index.php";
  }

?>
</div>

</div> <!-- end right -->
<!-- end content -->

<div style="clear:both"></div>
<div id="footer">
footer
</div>
<!-- end footer-->
</div><!-- end container -->
</body>
</html> 