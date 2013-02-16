<?php 
echo $this->Form->create(
	'User', 
	array(
		'type' => 'post', 
		'action' => ''
	)
) 
?>
name<br />
<?php echo $this->Form->error('User.name') ?>
<?php echo $this->Form->text('name') ?>
mail<br />
<?php echo $this->Form->error('User.mail1') ?>
<?php echo $this->Form->text('mail1') ?>
<?php echo $this->Form->end('Add User') ?>
