<?php
$title = "quiz";
$backLink = "choice_quiz.php";
require_once "partials/page_infos.php";
?>


<header class="flex w-full p-2 items-center justify-between">
    <div class="w-10 flex flex-col items-center">
        <a href="<?= $backLink ?>" aria-label="Retourner à la page précédente" class="transition hover:scale-150 focus:scale-150 focus:outline-none"><img src=" img/back_button.webp" alt="bouton retour"></a>
    </div>

    <div class="font-[Manrope] text-white h-auto border-solid border border-white flex flex-col items-center rounded-sm px-2   ">
        <p class="flex flex-col items-center p-1">10/10</p>
    </div>
</header>

<main class="flex flex-col items-center opacity-100 gap-4 sm:gap-8 lg:gap-16 2xl:gap-24">


    <!-- main container -->
    <div class="w-[70%] flex flex-col items-center gap-8 lg:gap-11 sm:w-[40%] lg:w-[30%] 2xl:w-[20%] ">

        <!-- progression bar  -->
        <div class="w-full bg-gray-200 rounded-full h-4 dark:bg-gray-700 mt-4">
            <div id="timer-bar" class="bg-green-600 h-4 rounded-full transition-all duration-100" style="width: 100%"></div>
        </div>

        <!-- quiz container -->
        <div id="quiz_container" class="w-full flex flex-col justify-center gap-4 ">
            <div class="w-full h-60">
                <img
                    class="w-full h-full object-cover"
                    src="img/quiz_animals/quiz_animals_cover.webp"
                    srcset="img/quiz_animals/quiz_animals_cover_600.webp 600w, img/quiz_animals/quiz_animals_cover.webp 1024w"
                    sizes="(max-width: 600px) 600px, 1024px"
                    alt="">
            </div>

            <div class="w-full h-auto font-[Inter] text-white text-[20px] text-center lg:text-xl">
                <p>Quel est cet animal si beau ? </p>
            </div>

            <!-- answers container -->
            <div class="w-full h-auto gap-2 flex flex-col items-center">
                <?php
                $answer = "test";
                require "partials/answer_button.php"
                ?>
                <?php
                $answer = "test";
                require "partials/answer_button.php"
                ?>
                <?php
                $answer = "test";
                require "partials/answer_button.php"
                ?>
                <?php
                $answer = "test";
                require "partials/answer_button.php"
                ?>
            </div>
        </div>
</main>

<?php
require_once "partials/footer.php";
?>