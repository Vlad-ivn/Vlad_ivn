<?php
if(isset($_POST['formSubmit']))
{
    $apiToken = "6429763059:AAG7FVwzJ19rqWKiUxQU1Bq7uDW417yQvBU";
    $chatId = "602384524"; // Вы должны получить ID чата с вашим ботом
    
    $name = $_POST['name'];
    $phone = $_POST['phone'];
    
    $message = "Имя: $name\nНомер телефона: $phone";
    
    $data = [
        'chat_id' => $chatId, 
        'text' => $message
    ];
    
    $response = file_get_contents("https://api.telegram.org/bot$apiToken/sendMessage?" . http_build_query($data) );
}
?>