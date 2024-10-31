<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $phone = $_POST['phone'];
    $email = $_POST['email'];
    
    $data = "$phone, $email\n";

    // Сохраняем данные в text-файл
    file_put_contents('data.txt', $data, FILE_APPEND);
}
?>
