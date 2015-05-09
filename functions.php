<?php

function openHtml($title)
{
	echo '<html>';
	head($title);
	echo '<body>';
}

function closeHtml()
{
	echoScripts();
	echo '</body>';
	echo '</html>';
}

function head($title)
{
	echo '<head>';
	echo '<title>' . $title . '</title>';
	echoStyleSheets();
	echo '</head>';
}

function echoScripts()
{
	echo '<!-- jQuery (necessary for Bootstrap\'s JavaScript plugins) -->';
    echo '<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>';
    echo '<!-- Include all compiled plugins (below), or include individual files as needed -->';
    echo '<script src="bootstrap/js/bootstrap.js"></script>';
}

function echoStyleSheets()
{
	echo '<!-- Bootstrap -->';
    echo '<link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">';
    echo '<!-- Flat UI -->';
    echo '<link href="bootstrap/css/flat-ui.css" rel="stylesheet">';
}

function navBar()
{
	echo '<nav class="navbar navbar-inverse nvabar-fixed-top">';
	echo '<div class="container-fluid">';
	echo '<div class="navbar-header">';
	echo '<a class="navbar-brand" href="">Brent Zucker</a>';
	echo '</div>';
	echo '<div>';
	echo '<ul class="nav navbar-nav">';
	echo '<li><a href="#Experience">Experience</a></li>';
	echo '<li><a href="#Projects">Projects</a></li>';
	echo '<li><a href="#Skills">Skills</a></li>';
	echo '</ul>';
	echo '<ul class="nav navbar-nav navbar-right">';
	echo '<li><a href="https://www.github.com/brentzucker"><span class="fui-github"></span></a></li>';
	echo '<li><a href="https://www.linkedin.com/in/brentzucker"><span class="fui-linkedin"></span></a></li>';
	echo '</ul>';
	echo '</div>';
	echo '</div>'; //closes container-fluid
	echo '</nav>';
}
?>