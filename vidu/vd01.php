<pre><?php
//print_r($_POST);
//print_r($_FILES);
if (isset($_POST["hoten"])) 
echo "Chao ban: ". $_POST["hoten"];
if (isset($_FILES["hinh"]))
{
	if ($_FILES["hinh"]["error"]!=0)
	{
		echo "Err!"; exit;	
	}	
	$tenfile = $_FILES["hinh"]["name"];
	$src = $_FILES["hinh"]["tmp_name"];
	$type = $_FILES["hinh"]["type"];
	$arr = array("image/jpeg", "image/gif", "image/png");
	if (in_array($type, $arr)==false)
	{
		echo "Khong dung loai file!";
		exit;	
	}
	if(move_uploaded_file($src, "image/".$tenfile))
	{
		?>
        <img src="image/<?php echo $tenfile;?>">
        <?php	
	}
	else
	{
	  echo "Err!";	
	}
	
}