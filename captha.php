<label>VARIFICATION CODE</label><input type="text" name="" required placeholder="ENTER VERIFICATION CODE"/>
<?php
$a=rand(65,90);
$b=chr($a);
$c=rand(10,99);
$d=rand(97,122);
$e=chr($d);
$f=rand(65,90);
$g=chr($f);
?>
<input type="text" value="<?php echo $b.$c.$e.$g; ?>" readonly />