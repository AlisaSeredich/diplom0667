<?php
$userName = $_POST["user_name"];
$contact = $_POST["contact"];
$textmail = $_POST["textmail"];
echo "$userName, $contact, $textmail";
mail('bootx64@mail.ru', 'Новая заявка', "$userName, $contact, $textmail");

?>