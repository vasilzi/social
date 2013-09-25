<?php echo $header; ?>
<a class="btn btn-primary" href="/social/facebook">Facebook</a>
<a class="btn btn-info" href="/social/twitter">Twitter</a>
<a class="btn btn-info" href="/social/github" style="background-color:gray;border-color:gray;">GitHub</a>
<div>
<?php
if(isset($social))
{
	$info=array('first_name',
	'last_name',
	'location',
	'gender',
	'description',
	'public_key');
	
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
	<?php }
}
?>
</div>
<?php echo $footer; ?>