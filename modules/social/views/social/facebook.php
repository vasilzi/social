<?php echo $header; ?>
<a class="btn btn-primary" href="/social/facebook_app">Update</a>
<a href="/social/facebook_revoke">Revoke</a>
<?php if(isset($info)){ ?>
<div>
<br/>
	<img src="<?php echo $info['avatar']; ?>" style="max-width:100px;max-height:100px;"/><br/>
	<label>First name:</label> <?php echo $info['first_name']; ?><br/>
	<label>Last name:</label> <?php echo $info['last_name']; ?><br/>
	<label>Location:</label> <?php echo $info['location']; ?><br/>
	<label>Gender:</label> <?php echo $info['gender']; ?><br/>
</div>
<?php } ?>
<?php echo $footer; ?>