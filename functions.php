<?php

function openHtml()
{
	echo '<html>';
	echo '<head>';
	echoStyleSheets();
	echo '</head>';
	echo '<body>';
}

function closeHtml()
{
	echoScripts();
	echo '</body>';
	echo '</html>';
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
}
?>