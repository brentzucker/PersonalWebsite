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
	echo '<nav class="navbar navbar-inverse navbar-fixed-top">';
	echo '<div class="container-fluid">';
	echo '<div class="navbar-header">';
	echo '<a class="navbar-brand" href="">Brent Zucker</a>';
	echo '</div>';
	echo '<div>';
	echo '<ul class="nav navbar-nav navbar-right">';
	echo '<li><a href="#Experience">Work Experience</a></li>';
	echo '<li><a href="#Projects">Projects</a></li>';
	echo '<li><a href="#Skills">Skills</a></li>';
	echo '<li><a href="https://www.github.com/brentzucker"><span class="fui-github"></span></a></li>';
	echo '<li><a href="https://www.linkedin.com/in/brentzucker"><span class="fui-linkedin"></span></a></li>';
	echo '</ul>';
	echo '</div>';
	echo '</div>'; //closes container-fluid
	echo '</nav>';
}

function experience()
{
	$experience = [];

	//Read in from Experience.txt and load into Experience Object List
	$experience_file = fopen("Experience.txt", "r");
	while(!feof($experience_file))
	{
		$job = new Experience(fgets($experience_file), fgets($experience_file), fgets($experience_file), fgets($experience_file), fgets($experience_file));

		$line = fgets($experience_file);
		while(strlen($line) > 1)
		{
			$job->Description[] = $line;
			$line = fgets($experience_file);
		}
		$experience[] = $job;
	}

	//Print Experience Object List to web page
	echo '<div id="Experience" class="container">';
	echo '<h3 class="text-center page-header">Work Experience</h3>';
	foreach($experience as $job)
	{
		echo '<div class="container">';
		echo '<div class="col-lg-10">';
		echo '<h5>' . $job->Company . '&nbsp<small style="font-size:50%;color:inherit;">' . $job->Location . '</small></h5>';
		echo '<h6>' . $job->Title . '</h6>';

		echo '<ul>';
		foreach($job->Description as $bullet_point)
			echo '<li>' . substr($bullet_point, 1) . '</li>';
		echo '</ul>';
		echo '</div>';
		echo '<h5><small style="font-size:50%;color:inherit;" class="col-lg-2 text-right">' . $job->Date . '</small><h5>';
		echo '</div>';
		echo '<br>';
	}
	echo '</div>';
}
?>