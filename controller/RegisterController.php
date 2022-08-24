<?php
include_once '../config/Database.php';
include_once '../model/Registration.php';

session_start();

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

$data = [];
$data['name'] = $registration->name;
$data['email'] = $registration->name;
$data['address'] = $registration->name;
$data['category'] = $registration->name;

$data['category'] = str_replace("_", " ", $data['category']);
$data['category'] = ucwords($data['category']);

$data['ticket_total'] = $registration->name;
$data['total_price'] = $registration->name;

$_SESSION['data'] = $data;

header('Location: ' . $_SERVER['HTTP_REFERER']);
