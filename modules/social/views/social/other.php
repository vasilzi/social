<?php echo $header; ?>
<br/>
<?php echo Form::open(); ?>
        <?php echo Form::input('github', isset($post['github'])?$post['github']:(isset($info['github'])?$info['github']:''), array('class'=>'form-control', 'placeholder'=>'Your GitHub username.')); ?>
        <?php echo Form::input('team', isset($post['team'])?$post['team']:(isset($info['team'])?$info['team']:''), array('class'=>'form-control', 'placeholder'=>'Your team\'s name.')); ?>
        <?php echo Form::submit('submit', 'Save', array('class'=>'btn btn-lg btn-primary btn-block')); ?>
    <?php echo Form::close(); ?>
<?php echo $footer; ?>