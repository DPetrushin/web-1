<?php

	class Contacs_info
	{
		$user_id;
		$desc;//должность
		$phone;
		$email;
		function __construct($user)
		{
			$user_id=$user.user_id;
			$desc=$user.desc;
			$phone=$user.phone;
			$email=$user.email;
		}
	}

?>