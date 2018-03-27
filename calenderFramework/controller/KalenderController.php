<?php
	require(ROOT . "model/KalenderModel.php");
	function index() {
		render("kalender/index", array(
			"birthdays" => getKalender()
		));
	}

	function create() {
		render("birthday/create");
	}

	function createAction() {
		getCreateBirthday($_POST);
		header('Location: ' . URL . 'kalender/index');
	}


	function edit($id) {
		$edit = getPerson($id);
		if ($edit == null) {die("Dead");}
		$data['person'] = $edit['person'];
		$data['year'] = $edit['year'];
		$data['month'] = $edit['month'];
		$data['day'] = $edit['day'];
		$data['id'] = $edit['id'];
		render("birthday/edit", $data);
	}

	function editAction() {
		editBirthday($_POST);
		header('Location: ' . URL . 'kalender/index');
	}

	function delete($id) {
		deletebirthday($id);
		header('Location: ' . URL . 'kalender/index');
	}
?>