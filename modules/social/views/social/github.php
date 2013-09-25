<?php echo $header; ?>
<br/>
<?php echo Form::open(); ?>
        <label>Your GitHub public key</label>
        <?php echo Form::input('public_key', isset($post['public_key'])?$post['public_key']:($public_key?$public_key:''), array('class'=>'form-control')); ?>
        <?php echo Form::submit('submit', 'Save', array('class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo Form::close(); ?>
<?php echo $footer; ?>