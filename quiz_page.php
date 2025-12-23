<?php
$title = "quiz";
$backLink = "choice_quiz.php";
require_once "partials/page_infos.php";
?>


<header class="flex w-full p-2 items-center justify-between">
    <div class="w-10 flex flex-col items-center">
        <a href="<?= $backLink ?>" aria-label="Retourner à la page précédente"><img src="img/back_button.webp" alt="bouton retour"></a>
    </div>

    <div class="font-[Manrope] text-white h-auto border-solid border border-white flex flex-col items-center rounded-sm px-2   ">
        <p class="flex flex-col items-center p-1">10/10</p>
    </div>
</header>

<main class="flex flex-col items-center pt-8 gap-4 sm:gap-8 lg:gap-16 2xl:gap-24">
    <!-- main container -->
    <div class="w-[70%]  flex flex-col items-center gap-8  lg:gap-11 sm:w-[40%] lg:w-[30%] 2xl:w-[20%] ">

        <!-- quiz container -->
        <div class="w-full flex flex-col justify-center gap-4 ">
            <div class="w-full h-60">
                <img class="w-full h-full object-cover" src="img/quiz_animals/quiz_animals_cover.webp" alt="">
            </div>

            <div class="w-full h-auto font-[Inter] text-white text-[20px] text-center lg:text-xl">
                <p>Quel est cet animal si beau ? </p>
            </div>

            <div class="w-full h-auto gap-4 flex flex-col items-center">
                <button class="w-full h-auto bg-[#0879C9] rounded-lg text-white text-[20px] p-2">Test</button>
                <button class="w-full h-auto bg-[#0879C9] rounded-lg text-white text-[20px] p-2">Test</button>
                <button class="w-full h-auto bg-[#0879C9] rounded-lg text-white text-[20px] p-2">Test</button>
                <button class="w-full h-auto bg-[#0879C9] rounded-lg text-white text-[20px] p-2">Test</button>

            </div>
        </div>
    </div>
</main>

<?php
require_once "partials/footer.php";
?>