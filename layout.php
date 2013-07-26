<?php
	@session_start();
	
	function drawHeader($title = "Feedback System - Indian School of Mines") {
		echo '
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>The Title of The Page</title>


<link rel="stylesheet" type="text/css" href="css/feedback-layout-style.css" />
<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript" src="js/feedback-layout-script.js"></script>
</head>

<body>
	<div class="-feedback-search-bar">
		<div class="-feedback-logo"></div>
    	<div class="-feedback-search-button">
            <form id="-feedback-search-form">
            <input type="text" name="-feedback-search-text" class="-feedback-search-text" placeholder="Search Feedback" />
            <input type="submit" name="-feedback-search-submit" value="Search" />
            </form>
        </div>
		<div class="-feedback-right-options">
        	<a href="#">Logout</a>
        </div>
        <div class="-feedback-right-options">
            <a href="#">Mohit Punjabi</a>
        </div>        
		<div class="-feedback-right-options">
        	<img src="img/me.jpg" class="small-profile-thumb" />
        </div>
    </div>
    
    
    <div class="-feedback-navbar">
    	<div class="-feedback-profile-photo">
        	<img src="img/me.jpg" />
            <div class="-feedback-profile-details">
                <a href="#">Edit</a>
                <h2>Mohit Punjabi</h2>
                <span><strong>2011JE0862</strong></span><br />
                <span>Student</span><br />
                <span>B. Tech, Computer Science and Engineering</span><br /><br />
            </div>
        </div>
    	<ul>
        	<li class="current"><a href="#">Home</a></li>
        	<li><a href="#">Feedback</a></li>
        	<li><a href="#">Time Table</a></li>
        	<li><a href="#">Applications</a></li>
        	<li><a href="#">Result</a></li>
        	<li><a href="#">Foobar</a></li>
        	<li><a href="#">Another Link</a></li>
        	<li><a href="#">Another Link</a></li>
        </ul>
    </div>
    
    <div class="-feedback-content">
		';
	}
	
	
	function drawFooter() {
		echo '
    </div>
	
    <div class="-feedback-footer">
    	<a href="#">Indian School of Mines, Dhanbad</a> | 
    	<a href="#">Student Registration</a> | 
    	<a href="#">Faculty Registration</a> |
    	<a href="#">Developers</a> |
    	<a href="#">Help</a>
    </div>
</body>
</html>
		';
	}
?>