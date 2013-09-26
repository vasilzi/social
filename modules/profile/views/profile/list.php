<?php echo $header; ?>
<div class="table-responsive">
  <table class="table">
  <tr>
	  <th>Avatar</th>
	  <th>First name</th>
	  <th>Last name</th>
  </tr>
  <?php
  foreach($profiles as $profile)
  {
  	if(!$profile->getAvatar() && !$profile->getFirst_name() && !$profile->getLast_name())
  		continue;
  	?>
  <tr>
	  <td><img src="<?php echo $profile->getAvatar(); ?>" alt="<?php echo $profile->getFirst_name().' '.$profile->getLast_name(); ?>"/></td>
	  <td><?php echo $profile->getFirst_name(); ?></td>
	  <td><?php echo $profile->getLast_name(); ?></td>
  </tr>
  <?php } ?>
  </table>
</div>
<?php echo $footer; ?>