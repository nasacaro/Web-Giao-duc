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
	<h2>Confirm</h2>
	<?php if (isset($record)): $row = $record[0]?>
	<p>
		<input type="hidden" name='id' value=<?php echo $row->id;?>/>
		<label for="title">Title:</label>
		<label for='title'><?php echo $row->title;?></label>
	</p>
	
	<p>
		<label for="content">Content:</label>
		<label for='content'><?php echo $row->content;?></label>
	</p>
	<p>
		Update successful.
	</p>
	
	<?php else: ?>
	<p>Update error</p>
	<?php endif;?>
	<h2><?php  echo anchor('',"Back" ); ?></h2>
	
</body>
</html>