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

if (!isset($_SESSION['questions'])) {
    $request = $db->prepare(
        'SELECT 
                            q.id AS question_id,
                            q.questions,
                            q.img_path_600,
                            q.img_path_desktop,
                            q.id_theme,
                            a.id AS answer_id,
                            a.answer,
                            a.id_question,
                            a.good_answer
                         FROM
                            questions AS q
                        JOIN answers AS a ON a.id_question = q.id
                        WHERE id_themes = :theme_quiz
                        ORDER BY q.id, a.id'
    );

    $request->execute([
        'theme_quiz' => $_SESSION['theme']['id']
    ]);

    $_SESSION['questions'] = $request->fetchAll();
}
