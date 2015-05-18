<!DOCTYPE html">
<html lang='en'>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title>untitled</title>
	<style type='text/css' media='screen'>
		label {display: block;}
	</style>
</head>
<body>
	<h2>Create</h2>
	<?php echo form_open('site/create'); ?>
	
	<p>
		<label for="title">Title:</label>
		<input type='text' name='title' id='title'/>
	</p>
	
	<p>
		<label for="content">Content:</label>
		<input type='text' name='content' id='content'/>
	</p>
	
	<p>
		<input type='submit' value='Submit'/>
	</p>
	<?php echo form_close(); ?>
	
	<hr />
	
	<h2>Read</h2>
	<?php if(isset($records)): foreach ($records as $row): ?>
	<h2><?php  echo anchor("site/update/$row->id", $row->title); ?></h2>
	<div><?php echo $row->content; ?></div>
	<?php endforeach;?>
	
	<?php else: ?>
	<h2>No records were returned.</h2>
	<?php endif; ?>
	
	<h2>Delete</h2>
	<p>Click on the title to delete the news</p>
</body>
</html>