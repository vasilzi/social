<?php echo $header; ?>
<a class="btn btn-info" href="/social/twitter_app">Update</a>
<?php if(isset($info)){ ?>
<div>
<br>
	<img src="<?php echo $info['avatar']; ?>" style="max-width:100px;max-height:100px;"/><br/>
	<label>Location:</label> <?php echo $info['location']; ?><br/>
	<label>Description:</label> <?php echo $info['description']; ?><br/>
</div>
<?php } ?>
<?php echo $footer; ?>