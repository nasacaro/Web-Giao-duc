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
	<h2>Update</h2>
	<?php if (isset($record)): $row = $record[0];?>
	
	<?php echo form_open('site/update'); ?>
	
	<p>
		<input type="hidden" name='id' value=<?php echo $row->id;?>/>
		<label for="title">Title:</label>
		<input type='text' name='title' id='title' value=<?php echo $row->title;?>>
	</p>
	
	<p>
		<label for="content">Content:</label>
		<input type='text' name='content' id='content' value=<?php echo $row->content;?>>
	</p>
	
	<p>
		<input type='submit' name='submit' value='Submit'/>
	</p>
	<?php echo form_close(); ?>
	<?php else: ?>
	<h2>No record to update</h2>
	<?php endif;?>
	
</body>
</html>