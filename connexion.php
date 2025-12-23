<?php
$title = "Connexion";
$backLink = "index.php";
require_once "partials/page_infos.php";
require_once "partials/header.php";
?>



<main class="flex flex-col items-center justify-center ">
    <!-- back button -->

    <!-- main container -->
    <div class="w-[80%] h-auto flex flex-col items-center gap-24 ">
        <?php require_once "partials/logo.php" ?>

        <!-- connexion with pseudo -->
        <form class="flex flex-col items-center gap-6" action="process/Connexion.php" method="POST">
            <div class="flex flex-col items-center w-full">
                <input class=" bg-white placeholder-black text-center" type="text" minlength="3" maxlength="30" placeHolder="Entrez votre pseudo">
            </div>

            <div class="flex flex-col items-center">
                <button type="submit" class="font-[Inter] text-white text-base w-32 p-2 rounded-md flex items-center justify-center cursor-pointer bg-linear-to-b from-cyan-300 to-blue-800 transition duration-300 hover:from-blue-800 hover:to-cyan-300 hover:brightness-110 focus:from-blue-800 focus:to-cyan-300 focus:brightness-110 lg:text-xl">Valider</button>
            </div>
        </form>
    </div>
</main>

<?php
require_once "partials/footer.php";
?>