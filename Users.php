<?php
	class User{
		

		$id;
		$first_name;
		$last_name;
		$sex=0;
		$bdate;
		$country=[
			"id"=>0,
			"title"=>""];

		$city=[
			"id"=>"", 
			"title"=>""];

		$educatuion=[
			"university"="",
			"university_name"=>"",
			"faculty"=>"",
			"faculty_name"=>"",
			"graduation"=>""];

		$contacts=[
				"mobile_phone"=>"",
				"home_phone"=>""];

		$online=0;
		$books;
		$groups; //массив Group
		
		function __construct(/*$response*/){
			/*тут короче будет парситься из response*/
		}

		

	}
?>