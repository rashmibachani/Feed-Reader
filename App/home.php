<?php require 'funx.php'; ?>
<html>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
	<head>
		<script type="text/javascript" src="home.js" ></script>
		<link rel="stylesheet" type="text/css" href="home.css" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
		<title><?php//here will be php code to display user login name ?></title>			
	</head>
	
	<body onload="loadall()">
		<!--3 parts of the page - dashboard, reading area and the menu.-->
		<div id="dashboard"> 
			<div id="addsub">
				<form id="frmaddsub" method="post" action="addsub.php">
					<input type="text" id="subscribeto" name="subscribeto" value="Add Subscription"/>
					<!--include javascript to clear out the textbox on click -->
					<input type="submit" id="btnaddsub" value="Add" />
				</form>
			</div>
			<div id="functions">
				<ul>
					<li>
						<a href="profile.php">Profile</a>
					</li>
					<li>
						<a href="friends.php">Friends</a>
					</li>
					<li>
						<a href="#">Folders</a>
					</li>
					<li>
						<a href="#">Create Feed</a>
					</li>
					<li>
						<a href="#">Sign Out</a>
					</li>
				</ul>
			</div>
		</div>
		
		<div id="wrapper">
			<div id="readingarea">
				
			</div>
			
			<div id="menu">
				<?php
				echo '<ul>';
				$userfeeds=$_SESSION['userfeeds'];
				foreach($userfeeds as $onefeedobject)
					echo '<li><a href="javascript:void(0);" onclick="disp('.$onefeedobject->feedid.')">'.$onefeedobject->feedname.'</a></li>';
				echo '</ul> '; ?>
			</div>
			
			<!--PAGINATION....STILL TO BE DONE 
				<div id="footer">
				<!--
					<?php // how many to display?? hw do we know??!!
				//showthepage($count); //count is the number of elements on the page for now lets assume we are doing 3 with 10 p page ?>
				<a href="javascript:void(0)"; onclick="pag('1')">1</a>
				<a href="javascript:void(0)"; onclick="pag('2')">2</a>
				<a href="javascript:void(0)"; onclick="pag('3')">3</a>
			</div>
			-->
		</div>
		
	</body>
	
</html>