<?php 

$contacts = [];

if(isset($_POST['name']) && isset($_POST['message'])) {
    echo 'Nachricht wurde geschickt';
    $newMessage = [
        'name' => $_POST['name'],
        'email' => $_POST['email'],
        'subject' => $_POST['subject'],
        'message' => $_POST['message']
    ];
    array_push($contacts, $newMessage);
    file_put_contents('Nachrichten.txt', json_encode($contacts));
}



?>