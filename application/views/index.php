<?php echo $header; ?>
<a class="btn btn-primary" href="/social/facebook">Facebook</a>
<a class="btn btn-info" href="/social/twitter">Twitter</a>
<a class="btn btn-info" href="/social/other" style="background-color:gray;border-color:gray;">Other</a>
<div>
<br>
<?php
foreach($social as $s)
{
	if(isset($s['avatar']))
	{
		echo '<img src="'.$s['avatar'].'" style="max-width:100px;max-height:100px;margin:2px;"/>';
	}
}
?>
<br>
<?php
	$info=array('first_name',
	'last_name',
	'location',
	'gender',
	'description',
	'github',
	'team');
	
	foreach($info as $value){
	?>
	<label><?php echo ucfirst(str_replace('_', ' ', $value)); ?>:</label>
	<?php
	$tmp=array();
	foreach($social as $s)
	{
		if(isset($s[$value]))
		{
			$tmp[]=$s[$value];
		}
	}
	if(count($tmp)>0)
	{
		echo $tmp[0];
	}
	if(count($tmp)>1)
	{
		unset($tmp[0]);
		echo '<span style="color:grey;">, '.implode(', ', $tmp).'</span>';
	}
	?>
	<br/>
	<?php } ?>
</div>
<?php echo $footer; ?>