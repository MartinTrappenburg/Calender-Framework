<?php
  function getKalender()	{
    $db = openDatabaseConnection();
    $sql = "SELECT * FROM birthdays ORDER BY month, day, year, person";
 	  $query = $db -> prepare($sql);
    $query -> execute();
    $db = null;
    return $query -> fetchall();
 }
  function getCreateBirthday($data) {
        $FirstName = $data['name'];
        $Day = $data['dag'];
        $Month = $data['maand'];
        $Year = $data['jaar'];
        $db = openDatabaseConnection();
        $sql_add_post = "INSERT INTO birthdays (person, day, month, year) VALUES ('$FirstName','$Day', '$Month', '$Year')";
        $query = $db->prepare($sql_add_post);
        $query->execute();
        $db = null;
  }

  function getPerson($id) {
    $db = openDatabaseConnection();
    $sql_select_all = "SELECT * FROM birthdays WHERE id=" . $id . " ORDER BY month, day, year, person";
    $query = $db->prepare($sql_select_all);
    $query->execute();
    $db = null;
    return $query->fetch();
  }

  function editBirthday($data) {
    $id = $data['id'];
    $FirstName = $data['name'];
    $Day = $data['dag'];
    $Month = $data['maand'];
    $Year = $data['jaar'];  
    $db = openDatabaseConnection();
    $sql_edit_post = "UPDATE birthdays SET person = '$FirstName', day = $Day, month = $Month, year = $Year WHERE id = $id";
    $query = $db->prepare($sql_edit_post);
    $query->execute();
    $db = null;
  }

  function deleteBirthday($id) {
    $db = openDatabaseConnection();
    $sql_delete_id = "DELETE FROM birthdays WHERE id = $id ";
    $query = $db->prepare($sql_delete_id);
    $query->execute();
    $db = null;
  }
?>