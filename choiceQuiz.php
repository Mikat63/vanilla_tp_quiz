<?php
$title = "Choix du quiz";
$backLink = "connexion.php";
require_once "partials/header.php";
?>



<main class="bg-main-color min-h-svh flex flex-col items-center gap-8 justify-center overflow-hidden">
    <?php require_once "partials/back_button.php" ?>

    <!-- main container -->
    <div class="w-[80%] flex-1 flex flex-col items-center gap-8 pb-8 lg:gap-11">
        <h2 class="font-[Manrope] font-medium text-white text-2xl lg:text-4xl">Choisissez un quiz</h2>

        <!-- quiz container -->
        <div class="w-full flex flex-col items-center gap-8 md:flex-row md:justify-around lg:flex-col ">
            <!-- container with 3 quiz cards links -->
            <div class="flex flex-col gap-8 lg:flex-row">
                <?php
                $imgQuiz = "img/quiz_animals/quiz_animals_cover.webp";
                $altMessage = "quiz sur les animaux";
                $quizName = "Animaux";
                require "partials/quiz_card.php";
                ?>

                <?php
                $imgQuiz = "img/quiz_cinema/quiz_cinema_cover.webp";
                $altMessage = "quiz sur le cinéma";
                $quizName = "Cinéma";
                require "partials/quiz_card.php";
                ?>

                <?php
                $imgQuiz = "img/quiz_litterature/quiz_litterature_cover.webp";
                $altMessage = "quiz sur la litterature";
                $quizName = "Littérature";
                require "partials/quiz_card.php";
                ?>
            </div>

            <!-- container with 3 quiz cards links -->
            <div class="flex flex-col gap-8 lg:flex-row">
                <?php
                $imgQuiz = "img/quiz_music/quiz_music_cover.webp";
                $altMessage = "quiz sur la musique";
                $quizName = "Musique";
                require "partials/quiz_card.php";
                ?>

                <?php
                $imgQuiz = "img/quiz_science/quiz_science_cover.webp";
                $altMessage = "quiz sur la science";
                $quizName = "Science";
                require "partials/quiz_card.php";
                ?>

                <?php
                $imgQuiz = "img/quiz_sport/quiz_sport_cover.webp";
                $altMessage = "quiz sur le sport";
                $quizName = "Sport";
                require "partials/quiz_card.php";
                ?>
            </div>
        </div>
    </div>
</main>

<?php
require_once "partials/footer.php";
?>