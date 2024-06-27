<?php

class Reminders extends Controller {

    public function index() {		

      $reminder = $this->model('Reminder');
      $list_of_reminders = $reminder->get_all_reminders();
      $this->view('reminders/index', ['reminders' => $list_of_reminders]);

    }

  public function create_reminder() {		

    // Get reminder from create_reminders form
    $new_reminder = $_REQUEST['reminder'];

    $reminder = $this->model('Reminder');
    $successful_reminder_creation= $reminder->create_reminder($new_reminder); 
    $this->view('reminders/create_reminder'); 
  }
}