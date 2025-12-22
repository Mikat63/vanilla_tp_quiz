<?php
$title = "Connexion";
require_once "partials/header.php";
?>


<main class="bg-main-color min-h-svh flex flex-col items-center justify-center overflow-hidden">
    <div class="w-[80%] flex-1 flex flex-col items-center justify-around">
        <?php require_once "partials/logo.php" ?>

        <form class="flex flex-col items-center gap-6" action="pseuConnexion.php" method="POST">

            <div class="flex flex-col items-center w-full">
                <input class=" bg-white placeholder-black text-center" type="text" minlength="3" maxlength="30" placeHolder="Entrez votre pseudo">
            </div>



            <div class="flex flex-col items-center">
                <button type="submit" class="text_font bg_button_color w-32 p-2 rounded-md flex items-center justify-center cursor-pointer">Valider</button>
            </div>
        </form>
    </div>
</main>

<?php
require_once "partials/footer.php";
?>