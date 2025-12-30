<?php
session_start();

// control if exist and int format
if (!isset($_GET['id'])) {
    header("location: ../choice_quiz.php?error=missing_variable");
    exit;
}

if (!filter_var($_GET['id'], FILTER_VALIDATE_INT)) {
    header("location: ../choice_quiz.php?error=variable_format");
    exit;
}

if (empty(trim($_GET['id']))) {
    header("location: ../choice_quiz.php?error=variable_format");
    exit;
}


$themeId = htmlspecialchars(strip_tags($_GET['id']));

// db connect
require_once "db_connect.php";

$request = $db->prepare(
    'SELECT
                            *
                        FROM
                            themes
                        WHERE
                            id = :themeId'
);

$request->execute([
    'themeId' => $themeId
]);

if (!$request) {
    header("location: ../choice_quiz.php?error=unknown_theme");
    exit;
} else {
    $request = $db->prepare(
        'SELECT
                                q.*,
                                a.*
                            FROM 
                                questions AS q
                            JOIN 
                                answers AS a ON a.id_question = q.id
                            WHERE 
                                q.id_theme = :theme_id'

    );
    $request->execute([
        'themeId' => $themeId
    ]);

    $_SESSION['quiz_question_answers'] = $request->fetchAll();
    
    header("Location: ../quiz_page.php");
    exit;
}
