<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="app/views/css/reminders.css"> 
</head>

<body>
    <?php require_once 'app/views/templates/navbar.php' ?>

    <div class="container main">
        <div class="row mt-4">
            <div class="col-lg-12">
                <h3 class="reminders">Reminders</h3>
                <p> <a class="link" href="/reminders/create">Create a new reminder</a></p>
            </div>
        </div>
    </div>
</body>

<!-- 
    print_r($data['reminders']);
        Code below, doesn't display reminder subject . . . $data -> why is it undefined?
        
        foreach ($data['reminders'] as $reminder) {
        echo "<p>" . $reminder['subject'] . ' <a href="/reminder/update">update</a> delete</p>';

} -->
    
<!-- TODO: Display in table format by iterating through reminders -->


