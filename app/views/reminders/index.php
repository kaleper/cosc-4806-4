<?php require_once 'app/views/templates/header.php' ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="/app/views/css/login.css"> -->
</head>

<main role="main" class="container">
    <div class="page-header" id="banner">
        <div class="row">
            <div class="col-lg-12">
                <h1>Reminders</h1>
                <p> <a href="/reminders/create">Create a new reminder</a></p>
            </div>
        </div>
    </div>
    <?php

    // print_r($data['reminders']);


        // Code below, doesn't display reminder subject . . . $data -> why is it undefined?
    
        // foreach ($data['reminders'] as $reminder) {
        //     echo "<p>" . $reminder['subject'] . ' <a href="/reminder/update">update</a> delete</p>';

        // }
    ?>
<!-- TODO: Display in table format by iterating through reminders -->
<?php require_once 'app/views/templates/footer.php' ?>

