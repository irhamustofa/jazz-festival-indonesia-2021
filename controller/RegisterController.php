<?php
include_once '../config/Database.php';
include_once '../model/Registration.php';

$database = new Database();
$db = $database->getConnection();

$registration = new Registration($db);
$registration->name = isset($_POST['name']) ? $_POST['name'] : die();
$registration->email = isset($_POST['email']) ? $_POST['email'] : die();
$registration->address = isset($_POST['address']) ? $_POST['address'] : die();
$registration->category = isset($_POST['category']) ? $_POST['category'] : die();
$registration->ticket_total = isset($_POST['ticket_total']) ? $_POST['ticket_total'] : die();
$registration->total_price = isset($_POST['total_price']) ? $_POST['total_price'] : die();

$result = $registration->register();

if (!$result) {
    echo json_encode(['message' => 'Something went wrong while registration proccess']);
}

header('Location: ' . $_SERVER['HTTP_REFERER']);
