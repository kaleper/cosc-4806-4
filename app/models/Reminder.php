<?php

class Reminder {


    public function __construct() {

    }

    public function get_all_reminders () {
      $db = db_connect();
      // Selects reminders only associated with logged in user
      $statement = $db->prepare("SELECT * from reminders WHERE user_id = :userid");
      $statement->bindParam(':userid', $_SESSION['userid']);
      $statement->execute();
      $rows = $statement->fetchAll(PDO::FETCH_ASSOC);
      return $rows;
    }

    public function update_reminder ($reminder_id) {
     //TODO: Update Statement 
    }

    public function create_reminder ($new_reminder) {
       if ($_SERVER['REQUEST_METHOD'] === 'POST') {
          $db = db_connect();
          // var_dump($_SESSION['userid']);
          $statement = $db->prepare("INSERT INTO reminders(subject, user_id) VALUES (:subject, :userid)");
          //TODO:Make newReminder session variable
          $statement->bindParam(':subject', $new_reminder);
          $statement->bindParam(':userid', $_SESSION['userid']);
          $statement->execute();
    
                $_SESSION['successful_reminder'] = "Reminder created successfully!";
                header('Location: /reminders/index');
                die;
       }
    }
}
?>
