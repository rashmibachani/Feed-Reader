<?php
require 'funx.php';
?>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="home.css" />
		<link rel="stylesheet" type="text/css" href="friends.css" />
	</head>
	<body>
		<div id="dashboard" style="color:#F2F5ED">
			Friends List
		</div>
		<div id="wrapper">
		<table>
		  <tr>
			<td>
			<div id="friendslist">
			<?php
			$userfriends=$_SESSION['userfriends'];
			echo '<ul>';
			foreach($userfriends as $friendobject)
				{
					echo '<li>';
					echo '<a href="#"><img src="'.$friendobject->userid.'.jpg" /><br />';
					echo $friendobject->fname.' '.$friendobject->lname.'</a><br />';//name
					echo '</li>';
				}
			echo '</ul>';
			?>
			</div>
			</td>
			<td>
				<h5>Add Friends</h5>
				<input type="text" size="50" name="email" /><br />
				<input type="submit" value="Add" />
				
			</td>
		</div>
	</body>
</html>