<?php echo $header; ?>
<a class="btn btn-info" href="/social/twitter_app">Update</a>
<?php if(isset($info)){ ?>
<div>
	<label>Location:</label> <?php echo $info['location']; ?><br/>
	<label>Description:</label> <?php echo $info['description']; ?><br/>
</div>
<?php } ?>
<?php echo $footer; ?>