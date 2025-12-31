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


$themeId = (int)$_GET['id'];

// db connect
try {
    require_once "db_connect.php";

    $request = $db->prepare(
        'SELECT * FROM themes WHERE id = :themeId'
    );
    $request->execute([
        'themeId' => $themeId
    ]);

    $theme = $request->fetch();

    if (!$theme) {
        header("location: ../choice_quiz.php?error=unknown_theme");
        exit;
    }

    $_SESSION['theme'] = $theme;

    header("Location: ../quiz_page.php");
    exit;
} catch (PDOException $error) {
    header("location: ../choice_quiz.php?error=" . urlencode($error->getMessage()));
    exit;
}
