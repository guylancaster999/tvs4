<?php
$id		=$_REQUEST["id"];
$created=$_REQUEST["created"];
$updated=$_REQUEST["updated"];
$tracks	=$_REQUEST["tracks"];
$title	=$_REQUEST["title"];
$er		=$_REQUEST["er"];
$status	=$_REQUEST["status"];
?>
<html>
<head>
<link href="main.css" rel="stylesheet"/>
</head>
<body>
<h1>Album System</h1>
<div align="center">
	<span class="er"><?php print $er; ?></span>
	<span class="status"><?php print $status;?></span>
</div>
<form action="doGetalbums.php" method="post">
	<table>
		<tr>
			<td>ID</td>
			<td><input type="text" name="id" id="id" size="10" value="<?php print $id;?>"/></td>
		</tr>
		<tr>
			<td>Title</td>
			<td><input type ="text" name="title" id="title" size="70" value="<?php print $title;?>"/></td>
		</tr>
		<tr>
			<td>Created</td>
			<td><input type ="hidden" name="created" id="created"  value="<?php print $created;?>"/>
			<?php print $created;?></td>
		</tr>
		<tr>
			<td>Updated</td>
			<td><input type ="hidden" name="updated" id="updated" value="<?php print $updated;?>"/>
			<?php print $updated;?></td>
		</tr>
		<tr>
			<td>&nbsp;</td>
			<td>
			<input type="submit" name="submit" id="submit"  value="Add">
			<input type="submit" name="submit" id="submit"  value="Change">
			<input type="submit" name="submit" id="submit"  value="Delete">
			<input type="submit" name="submit" id="submit"  value="Enquire"> 
			<input type="submit" name="submit" id="submit"  value="List">
			<input type="submit" name="submit" id="submit"  value="Tracks">
			</td>
		</tr>
	</table>
</form>
</body>
</html>
