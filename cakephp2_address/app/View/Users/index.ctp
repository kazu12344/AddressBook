<h1>registerd user data list</h1>
<?php 
echo $this->Html->link(
	'create user',
	array(
		'controller' => 'users',
		'action'	 => 'addNewUser',
	)
);
?>
<table>
	<tr>
		<td>id</td>
		<td>name</td>
		<td>mail</td>
	</tr>
	<?php foreach ($users as $user) : ?>
	<tr>
		<td><?php echo $user['User']['id']    ?></td>
		<td><?php echo $user['User']['name']  ?></td>
		<td><?php echo $user['User']['mail1'] ?></td>
	</tr>
	<?php endforeach; ?>
</table>

