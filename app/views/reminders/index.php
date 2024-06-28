<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Reminders</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    
    <!-- **ADDRESSES CACHE ISSUE WHERE CSS DOESN'T LOAD**  -->
    
   <style>
      <?php include "app/views/css/reminders.css"?>
    </style>
    <link rel="stylesheet" href="app/views/css/reminders.css"
    <!-- JS Pluigin -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</head>

<body>
    <?php require_once 'app/views/templates/navbar.php' ?>

    <?php
        if (isset($_SESSION['successful_reminder'])) {
            echo 
                "<div class='container main text-center'>" .
                    "<div class='col-lg-12 mt-5'>" .
                        "<h3 class = 'text-success'>" . $_SESSION['successful_reminder'] . "</p>" .
                    "</div>" .
                "</div>"
                ;
            unset($_SESSION['successful_reminder']);
        } else if (isset($_SESSION['successful_deletion']) && $_SESSION['successful_deletion']) {
            echo
                "<div class='container main text-center'>" .
                    "<div class='col-lg-12 mt-5'>" .
                        "<h3 class = 'text-success'> Reminder deleted successfully!</p>" .
                    "</div>" .
                "</div>"
                ;
            unset($_SESSION['successful_deletion']);
        }
    ?>

    <div class="container main">
        <div class="row mt-4">
            <div class="col-lg-12">
                <h3 class="reminders">Reminders</h3>
                <p> <a class="link" href="/reminders/create_reminder">Create a new reminder</a></p>
            </div>
        </div>
    </div>
</body>

   
    <div class="container">
        <div class="row mt-2">
            <div class="col-lg-12">
                
                <?php
                    // print_r($data['reminders']);

                // Creates a table of reminders if there are reminders associate with the user 
                if (!$data['reminders']) {
                    echo "<p>No reminders found.</p>";
                } else {
                    // Create table header
                    echo "<table class= 'table table-striped'>
                            <thead>
                                <tr>
                                     <th> Reminder </th>
                                     <th> Date Created </th>
                                     <th> Completed? </th>
                                     <th colspan='2'> Actions </th>
                                </tr>
                            </thead>
                            <tbody>";
                }
                
                foreach ($data['reminders'] as $reminder) {
                    echo "<tr>" .
                            "<td>" . $reminder['subject'] . "</td>" .
                            "<td>" . $reminder['created_at'] . "</td>" .
                            "<td>" . $reminder['completed'] . "</td>" .
                            "<td>" . 
                                "<form action='/reminders/update_reminder' method='post'>
                                    <input type='hidden' name='id' value='" . $reminder['id'] . "'>
                                        <button type='submit'>Update</button>
                                </form>" 
                        . "</td>" .
                            "<td>" . "<form action='/reminders/delete_reminder' method='post'>
                            <input type='hidden' name='id' value='" . $reminder['id'] . "'>
                                <button type='submit'>Delete</button>
                        </form>"  . "</td>" .
                         "</tr>";
                }
                ?>
            </div>
        </div>
    </div>