  <a class="cursor-pointer" href="quiz_page.php" aria-label=<?= " aller vers le quiz $quizName" ?>>
      <div class="w-72 flex flex-col items-center justify-center gap-4 px-4">
          <div class="w-full h-60">
              <img class="w-full h-full object-cover" src="<?= $imgQuiz ?>" alt="<?= $altMessage ?>" loading="lazy">
          </div>

          <h3 class="font-[Inter] text-white text-base lg:text-xl text-center truncate w-full" title="<?= $quizName ?>"><?= $quizName ?></h3>
      </div>
  </a>