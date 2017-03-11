<?php


	class Group
	{
		
		$id;
		$name;
		$screen_name;
		$description;
		$members_count;
		$country=[
			"id"=>0,
			"title"=>""];

		$city;
		$type;
		$site;
		$start_date;
		$finish_date;
		$status;
		$contacs; //массив Contacs_info

		function __construct(/*$response*/)
		{
			/*парситься из response*/
		}
	}

?>