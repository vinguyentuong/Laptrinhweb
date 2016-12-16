San pham chi tiet<br>
<?php
$id= getValue("id");
if ($id=="") echo "Khong co sp!";
else
{
	?>
	Thong tin san pham co id=:<?php echo $id;?><hr>
	<img class="chitiet" src="<?php echo URL;?>/image/san-pham/<?php echo $id;?>.jpg"?>
	<?php
	
}
?>