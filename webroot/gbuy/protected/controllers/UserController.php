<?php

class UserController extends Controller
{
	public function actionAll()
	{
		$data=User::allUsers();
		echo json_encode($data);
	}
}