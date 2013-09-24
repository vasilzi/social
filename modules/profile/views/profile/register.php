<?php echo $header; ?>
       <?php echo Form::open(); ?>
    <?php if ($errors): ?>
<p class="message">Some errors were encountered, please check the details you entered.</p>
<ul class="errors">
<?php foreach ($errors as $message): ?>
    <li><?php echo $message ?></li>
<?php endforeach ?>
<?php endif ?>
        <h2 class="form-signin-heading">Please register</h2>
        <?php echo Form::input('email', isset($post['email'])?$post['email']:'', array('class'=>'form-control', 'placeholder'=>'email@3fs.si')); ?>
        <?php echo Form::password('password', isset($post['password'])?$post['password']:'', array('class'=>'form-control', 'placeholder'=>'Password')); ?>
        <?php echo Form::submit('Register', 'submit', array('class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo Form::close(); ?>

  <!-- /container -->
<?php echo $footer; ?>