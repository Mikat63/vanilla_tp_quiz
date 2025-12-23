<?php
$title = "Accueil";
$buttonLink = "choice_quiz.php";
$ariaDescription = "Revenir auux quiz";
$textButton = "Revenir aux quiz";
require_once "partials/page_infos.php";
?>



<main class="min-h-svh flex flex-col items-center">

    <!-- main container -->
    <div class="w-[80%] md:w-[60%]  lg:w-[50%] xl:w-[40%] 2xl:w-[30%] flex flex-col items-center pb-6">
        <div>
            <?php require_once "partials/logo.php" ?>
        </div>

        <!-- podium container  -->
        <div class="w-full h-auto flex flex-col gap-8">
            <div class=" testw-full h-auto flex flex-col gap-8">

                <!-- podium -->
                <div class="flex flex-row w-full justify-between">
                    <div class="w-[33%] flex flex-col items-center justify-end">
                        <p class="font-[Manrope] text-white text-[24px] font-bold">j3</p>
                        <p class="font-[Manrope] text-yellow-400 text-[20px] font-semibold">SCORE</p>
                        <div class="w-12 h-12 bg-white px-2"></div>
                    </div>

                    <div class="w-[33%] flex flex-col items-center justify-end">
                        <p class=" font-[Manrope] text-white text-[24px] font-bold">j3</p>
                        <p class="font-[Manrope] text-yellow-400 text-[20px] font-semibold">SCORE</p>
                        <div class="w-12 h-20 bg-white px-2"></div>
                    </div>

                    <div class="w-[33%] flex flex-col items-center justify-end">
                        <p class=" font-[Manrope] text-white text-[24px] font-bold">j3</p>
                        <p class="font-[Manrope] text-yellow-400 text-[20px] font-semibold">SCORE</p>
                        <div class="w-12 h-16 bg-white px-2"></div>
                    </div>
                </div>

                <div class="w-full h-auto flex flex-col gap-2">
                    <div class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>

                    <div class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>

                    <div class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>

                    <div class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>

                    <div class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>

                    <div class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2">
                        <p class="flex flex-col items-center">position</p>
                        <p class="flex flex-col items-center">pseudo</p>
                        <p class="flex flex-col items-center">score</p>
                    </div>

                    <div class="w-full h-auto flex flex-row justify-between bg-white rounded-lg text-black font-[Inter] text-[16px] p-2">
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