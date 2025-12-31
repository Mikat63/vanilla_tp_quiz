<?php
session_start();
// control post values
if ($_SERVER['REQUEST_METHOD'] !== "POST") {
    echo json_encode(['error' => 'bad_method']);
    exit;
}

if (!isset($_POST['question']) || !isset($_POST['answer'])) {
    echo json_encode(['error' => 'informations_not_received']);
    exit;
}

if (empty(trim($_POST['question']))) {
    echo json_encode(['error' => 'empty_variable']);
    exit;
}

if (!filter_var($_POST['question'], FILTER_VALIDATE_INT)) {
    echo json_encode(['error' => 'Error_format']);
    exit;
}

$question = (int)$_POST['question'];
$answer = htmlspecialchars(strip_tags($_POST['answer']));

// db connect and query for have all questions and answers by theme selected
require_once "db_connect.php";

$request = $db->prepare(
    'SELECT 
                            q.*,
                            a.*
                         FROM
                            questions AS q
                        JOIN answers AS a ON a.id_question = q.id
                        WHERE id_themes = :theme_quiz'
);

$request->execute([
    'theme_quiz' => $_SESSION['theme']['id']
]);

$questionsAnswers = $request->fetchAll();

// return to js
