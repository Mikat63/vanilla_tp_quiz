<?php
$title = "Accueil";
$buttonLink = "choice_quiz.php";
$ariaDescription = "Revenir aux quiz";
$textButton = "Revenir aux quiz";
require_once "partials/page_infos.php";
?>



<main class="min-h-svh flex flex-col items-center">
    <div>
        <?php require_once "partials/logo.php" ?>
    </div>

    <!-- main container -->
    <div class="w-[80%] flex flex-col items-center pb-6 md:w-[70%] lg:w-[50%] 2xl:w-[30%]">
        <!-- podium container  -->
        <div class="w-full h-auto flex flex-col gap-8">
            <div class="w-full h-auto flex flex-col items-center gap-8 sm:flex-row">
                <!-- podium -->
                <div class="w-[80%] flex flex-row justify-between ">
                    <?php
                    $player = "J3";
                    $scorePlayer = "score";
                    $heightPodium = "h-12";
                    require "partials/podium.php";
                    ?>

                    <?php
                    $player = "J2";
                    $scorePlayer = "score";
                    $heightPodium = "h-20";
                    require "partials/podium.php";
                    ?>

                    <?php
                    $player = "J1";
                    $scorePlayer = "score";
                    $heightPodium = "h-16";
                    require "partials/podium.php";
                    ?>
                </div>

                <div class="w-full h-auto flex flex-col gap-2">
                    <?php
                    $ariaLabelPosition = "Quatrième position";
                    $position = "4e";
                    $player = "Pseudo";
                    $score = "Score";
                    require "partials/ranking.php";
                    ?>

                    <?php
                    $ariaLabelPosition = "Cinquième position";
                    $position = "5e";
                    $player = "Pseudo";
                    $score = "Score";
                    require "partials/ranking.php";
                    ?>

                    <?php
                    $ariaLabelPosition = "Sixième position";
                    $position = "6e";
                    $player = "Pseudo";
                    $score = "Score";
                    require "partials/ranking.php";
                    ?>

                    <?php
                    $ariaLabelPosition = "Septième position";
                    $position = "7e";
                    $player = "Pseudo";
                    $score = "Score";
                    require "partials/ranking.php";
                    ?>

                    <?php
                    $ariaLabelPosition = "Huitième position";
                    $position = "8e";
                    $player = "Pseudo";
                    $score = "Score";
                    require "partials/ranking.php";
                    ?>

                    <?php
                    $ariaLabelPosition = "Neuvième position";
                    $position = "9e";
                    $player = "Pseudo";
                    $score = "Score";
                    require "partials/ranking.php";
                    ?>

                    <?php
                    $ariaLabelPosition = "Dixième position";
                    $position = "10e";
                    $player = "Pseudo";
                    $score = "Score";
                    require "partials/ranking.php";
                    ?>
                </div>
            </div>


            <div>
                <?php require_once "partials/start_button.php";  ?>
            </div>
        </div>
    </div>
</main>

<?php
require_once "partials/footer.php";
?>