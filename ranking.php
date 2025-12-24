<?php
$title = "Accueil";
$buttonLink = "choice_quiz.php";
$ariaDescription = "Revenir aux quiz";
$textButton = "Revenir aux quiz";
require_once "partials/page_infos.php";
?>



<main class="min-h-svh flex flex-col items-center">

    <!-- main container -->
    <div class="w-[80%] md:w-[50%]  lg:w-[50%] xl:w-[40%] 2xl:w-[30%] flex flex-col items-center pb-6">
        <div>
            <?php require_once "partials/logo.php" ?>
        </div>

        <!-- podium container  -->
        <div class="w-full h-auto flex flex-col gap-8">
            <div class=" w-full h-auto flex flex-col items-center gap-8">

                <!-- podium -->
                <div class="w-full flex flex-row justify-between ">
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
                    <div tabindex="0" aria-label="Quatrième position" class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2 focus:scale-105 focus:outline-0">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>

                    <div tabindex="0" aria-label="Cinquième position" class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2 focus:scale-105 focus:outline-0">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>

                    <div tabindex="0" aria-label="Sixième position" class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2 focus:scale-105 focus:outline-0">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>

                    <div tabindex="0" aria-label="Septième position" class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2 focus:scale-105 focus:outline-0">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>

                    <div tabindex="0" aria-label="Huitième position" class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2 focus:scale-105 focus:outline-0">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>

                    <div tabindex="0" aria-label="Neuvième position" class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2 focus:scale-105 focus:outline-0">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>

                    <div tabindex="0" aria-label="Dixième position" class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2 focus:scale-105 focus:outline-0">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>
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