<?php
$title = "Connexion";
$backLink = "index.php";
require_once "partials/header.php";
?>


<main class="bg-main-color min-h-svh flex flex-col items-center justify-center overflow-hidden">
    <!-- back button -->
    <?php require_once "partials/back_button.php" ?>

    <!-- main container -->
    <div class="w-[80%] flex-1 flex flex-col items-center justify-around">
        <?php require_once "partials/logo.php" ?>

        <!-- connexion with pseudo -->
        <form class="flex flex-col items-center gap-6" action="process/Connexion.php" method="POST">
            <div class="flex flex-col items-center w-full">
                <input class=" bg-white placeholder-black text-center" type="text" minlength="3" maxlength="30" placeHolder="Entrez votre pseudo">
            </div>

            <div class="flex flex-col items-center">
                <button type="submit" class="font-[Inter] text-white text-base lg:text-xl bg_button_color w-32 p-2 rounded-md flex items-center justify-center cursor-pointer">Valider</button>
            </div>
        </form>
    </div>
</main>

<?php
require_once "partials/footer.php";
?>