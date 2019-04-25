<?php

class home extends Controller
{

	public function index($film = ''){
		// $user = $this->model('User');

		// $film == '' ? $film = 'avenger' : $film;

		// $user_all = $user->get_all($film);


		// $data = ['all' => $user_all];

		$this->view('home/index');
	}

	public function ajaxCall(){
		if (isset($_POST['film'])) {
			$film = $_POST['film'];
			$user = $this->model('User');
			$user_all = $user->get_all($film);
			echo json_encode($user_all);
		}
	}
}