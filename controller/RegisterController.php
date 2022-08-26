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
$registration->price_total = isset($_POST['total_price']) ? $_POST['total_price'] : die();

$result = $registration->register();

if (!$result) {
    echo json_encode(['message' => 'Something went wrong while registration proccess']);
}

$data = [];
$data['name'] = $registration->name;
$data['email'] = $registration->email;
$data['address'] = $registration->address;
$data['category'] = $registration->category;

$data['category'] = str_replace("-", " ", $data['category']);
$data['category'] = ucwords($data['category']);

$data['ticket_total'] = $registration->ticket_total;
$data['total_price'] = $registration->price_total;

$data['invoice_number'] = rand(pow(10, 18-1), pow(10, 18)-1);

$data['barcode_image_url'] = 'https://barcode.tec-it.com/barcode.ashx?data='. urlencode($data['invoice_number']) .'&code=Code128&translate-esc=true&dmsize=Default';

$_SESSION['data'] = $data;

header('Location: ../thank-you.php');
