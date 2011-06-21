<?php
//file will contain all functions used in entire application
session_start();
require 'connect.php';

/******************************** BEGIN: CLASSES *********************/
class feed{
	var  $feedid, $feedname, $feedurl;
}

class user{
	var $userid, $emailid, $fname, $lname;
}
/******************************** END: CLASSES **********************/


/******************************** BEGIN: ADD FEED FUNCTIONS *****************************************/

function savefeed($url, $userid)
{
	$fdid=updatefeed($url, $userid);
	updateafeeduser($fdid, $userid);
		
}

function updatefeed($url, $userid)
{
	$name=substr($url,4);
	$q="insert into feed values(null, '$name', '$url')";
	$r=mysql_query($q);
	$fdid=mysql_insert_id();
	refreshsessions($userid);
	return $fdid;
}

function updateafeeduser($fdid, $userid)
{
	$q="insert into afeeduser values($fdid, $userid)";
	$r=mysql_query($q);
}

/******************************** END: ADD FEED FUNCTIONS *****************************************/

/******************************* BEGIN: AUTHENTICATION FUNCTIONS ***********************************/

function validate($email, $pw)
{
	require 'connect.php';
	$q="select userid, password from user where emailid='$email'";
	$r=mysql_query($q);
	if(!$r)
		header("Location:error.html");
	else
		{
			$row=mysql_fetch_row($r);
			$resusid=$row[0];
			$respw=$row[1];
			$flag=compare($respw, $pw);
		}
	if($flag)
		{
			//user is authenticated
			authenticate($resusid);
		}
	else
		{
			header("Location:error.html");
		}
	 
}

function compare($respw, $pw)
{
	if(strcmp($respw, $pw)==0)
		return true;
	else
		return false;
}

function authenticate($usid)
{
	createsession($usid);
	refreshsessions($usid);
	header("Location:home.php");
}

/********************************* END: AUTHENTICATION FUNCTIONS **************************************/

/******************************* BEGIN: SESSION FUNCTIONS *********************************************/
function createsession($usid)
{
	$_SESSION['userid']=$usid;
	$q="select userid, emailid, fname, lname from user where userid='$usid'";
	$r=mysql_query($q);
	if(!$r)
		header("Location:error.html");
	else
		{
			$res=mysql_fetch_object($r, 'user'); //fetches result and stores in an object of type user names $res!! 
			$_SESSION['user']=$res;
		}
}

function refreshsessions($usid)
{
	sessionuserfeeds($usid); //all feeds subscribed by user
	sessionfeeds();
	sessionfriends($usid);
}

function sessionuserfeeds($userid)
{
	$q="SELECT feedid, feedname, feedurl FROM `feed` natural join `afeeduser` where userid='$userid'";
	$r=mysql_query($q);
	if(!$r)
		die(mysql_error());
	else
		{
			$n=mysql_num_rows($r);
			for($i=0;$i<$n;$i++)
				{
					$res[$i]=mysql_fetch_object($r, 'feed');
				}
			$_SESSION['userfeeds']=$res;
		}
}

function sessionfeeds()
{
	$q="select feedid, feedname, feedurl from feed";
	$r=mysql_query($q);
	for($i=0;$i<mysql_num_rows($r);$i++)
		{
			$res[$i]=mysql_fetch_object($r,'feed');
		}
	$_SESSION['allfeeds']=$res;
}

function sessionfriends($userid)
{
	$q="select friendid from afrienduser where userid='$userid'";
	$r=mysql_query($q);
	$n=mysql_num_rows($r);
	for($i=0;$i<$n;$i++)
	{
		$row=mysql_fetch_row($r);
		$res[$i]=$row[0];
	}
	$resfrnd=array();
	$resobj=new user();
	foreach($res as $id)
	{
		$q="select userid, emailid, fname, lname from user where userid='$id'";
		$r=mysql_query($q);
		$resobj=mysql_fetch_object($r, 'user');
		$resfrnd[$id]=$resobj;
	}
	$_SESSION['userfriends']=$resfrnd;
}

/******************************* END: SESSION FUNCTIONS *********************************************/

/******************************* BEGIN: FEED FETCHING *********************************************/
function getfeeditems($feedid)
{
	//get item titles only for starters
	$q="Select title, description from item where feedid='$feedid'";
	$r=mysql_query($q);
		$d=array();
		echo '<ul id="list">';
		$n=mysql_num_rows($r);
		for($i=0;$i<$n;$i++)
			{
				$row=mysql_fetch_row($r);
				$restitle=$row[0];
				$resdesc=$row[1];
				$d[$restitle]=$resdesc;
			}
		foreach($d as $title=>$desc)
			{
				echo '<li class="feed">';
				echo '<h6 class="tit">'.$title.'</h6>';
				echo '<p class="content">'.$desc.'</p>';
				echo '<div>
					  <a href="#">Share</a>
					  <a href="#">Email</a>
					  <a href="discuss.php">Discuss</a>
					  </div>';
				echo '</li>' ;
			}
		echo '</ul>';
}
/******************************* END: FEED FETCHING *********************************************/

/***************************** BEGIN: FRIEND FUNCTIONS *********************************************/
function displayfriends($userid)
{
	
}
/******************************* END: FRIEND FUNCTIONS*********************************************/

?>




