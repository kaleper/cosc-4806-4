<?php

class Reminder {


    public function __construct() {

    }

    public function get_all_reminders () {
      $db = db_connect();
      // Selects reminders only associated with logged in user
      $statement = $db->prepare("select * from reminders WHERE user_id = :userid");
      $statement->bindParam(':userid', $_SESSION['userid']);
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
    }

    public function update_reminder ($reminder_id) {
     //TODO: Update Statement 
    }
}
?>
