<?php
$page = getValue("page"); echo "page = $page ";
if ($page=="")
{
	?>
	<div class=title>Trang danh muc san pham.</div>
	<?php
	for($i=1; $i<=5; $i++)
	{
		?>
		<div class="sanpham">
		<div> 
			<a href="<?php echo URL;?>/index.php?mod=sp&page=chitiet&id=<?php echo $i;?>">Ten san pham </a>
		</div>
		<div><img src="<?php echo URL;?>/image/san-pham/<?php echo $i;?>.jpg" /></div>
		</div>
		<?php
	}
	
}
if ($page=="chitiet")
{ echo "------";
	include ROOT."/module/sanpham/chitiet.php";
}
if ($page=="moi")
{
	include ROOT."/module/sanpham/moi.php";
}
if ($page=="khuyenmai")
{
	echo "<hr> danh muc cac san pham khuyen mai!";
}

