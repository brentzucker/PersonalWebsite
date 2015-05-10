<?php

class Experience
{
	public $Company;
	public $Image;
	public $Location;
	public $Title; 
	public $Date; 
	public $Description;

	function __construct($Company, $Image, $Location, $Title, $Date)
	{
		$this->Company = $Company;
		$this->Image = $Image;
		$this->Location = $Location;
		$this->Title = $Title;
		$this->Date = $Date;
	}
}

?>