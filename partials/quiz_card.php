  <a class="w-full cursor-pointer" href="quiz_page.php" aria-label=<?= " aller vers le quiz $quizName" ?>>
      <div class="w-full flex flex-col justify-center gap-4">
          <div class="w-full h-60">
              <img class="w-full h-full object-cover" src="<?= $imgQuiz ?>" alt="<?= $altMessage ?>" loading="lazy">
          </div>

          <h3 class="font-[Inter] text-white text-base w-full text-center truncate lg:text-xl"><?= $quizName ?></h3>
      </div>
  </a>