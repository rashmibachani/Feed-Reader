<html>
	<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">

<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">
<head>
	<script type="text/javascript">
			
	</script>
	<link rel="stylesheet" type="text/css" href="profile.css" />
	<link rel="stylesheet" type="text/css" href="home.css" />
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
	<title><?php//here will be php code to display user login name ?></title>			
</head>
	
<body>
	<div id="dashboard"> 
			<div id="functions">
				<ul>
					<li>
						<a href="profile.php">Profile</a>
					</li>
					<li>
						<a href="#">Archive</a>
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
	<div id="nameandpic">
	<h1 id="fullname">Rashmi Bachani</h1>
	<img id="userimg" src="rashmi.jpg" />
	<!--give some depth to the image here! -->
	</div>
	
	<div id="datacolumn">
		<ul>
		<li>
			<!--recent shared items shud link to a page of all shared items-->
			<h3><a href="recents.php">Recent Shared Items</a></h3>
			<ul>
				<li><a href="javascript:void(0);" onclick="expand()" />Recent Item One</a></li>
				<li><a href="javascript:void(0);" onclick="expand()" />Recent Item Two</a></li>
				<li><a href="javascript:void(0);" onclick="expand()" />Recent Item Three</a></li>
			</ul>
				
		</li>
		<br />
		<li>
			<h3><a href="recents.php">Recent Discussions</a></h3>
			<ul>
				<li><a href="javascript:void(0);" onclick="expand()" />Discussion One</a></li>
				<li><a href="javascript:void(0);" onclick="expand()" />Discussion Two</a></li>
				<li><a href="javascript:void(0);" onclick="expand()" />Discussion Three</a></li>
			</ul>
		</li>
		</ul>
		
	</div>
	
	<div id="friends">
		<ul>
			<li>
				<h3><a href="friends.php">Friends</a></h3>
				<ul>
					<li><a href="prof.php">Friend One</a></li>
					<li><a href="prof.php">Friend Two</a></li>
					<li><a href="prof.php">Friend Three</a></li>
				</ul>
			</li>
			<li>
				<h3><a href="prof.php">Groups</a></h3>
				<ul>
					<li><a href="grpprof.php">Group One</a></li>
					<li><a href="grpprof.php">Group Two</a></li>
					<li><a href="grpprof.php">Group Three</a></li>
				</ul>
			</li>
		</ul>
	</div>
	</div>
	<div id="footer">
		Here is the footer
	</div>
</body>
	