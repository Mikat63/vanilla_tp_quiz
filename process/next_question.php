<?php
session_start();

require_once "../utils/is_quiz_started.php";
require_once "../utils/is_connected.php";

// Permettre les requêtes depuis n'importe quelle origine (pour le développement local)
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json; charset=utf-8');


// Récupérer les données JSON
$json = file_get_contents('php://input');
$data = json_decode($json, true);

error_log(print_r($data, true));


// // control post values
// if ($_SERVER['REQUEST_METHOD'] !== "POST") {
//     echo json_encode(['error' => 'bad_method']);
//     exit;
// }

// if (!isset($_POST['question'])) {
//     echo json_encode(['error' => 'informations_not_received']);
//     exit;
// }

// if (empty(trim($_POST['question']))) {
//     echo json_encode(['error' => 'empty_variable']);
//     exit;
// }

// if (!filter_var($_POST['question'], FILTER_VALIDATE_INT)) {
//     echo json_encode(['error' => 'Error_format']);
//     exit;
// }

// $question = (int)$_POST['question'];

// if ($_SESSION['question_number'] >= count($_SESSION['questions'])) {
//     header('location: ../score_player.php');
//     exit();
// }
