// progression bar in seconds
document.addEventListener("DOMContentLoaded", function () {
  const duration = 10;
  const bar = document.querySelector("#timer-bar");
  const quizContainer = document.querySelector("#quiz_container");

  if (!bar) {
    return;
  }

  let start = null;

  function animateTimer(ts) {
    if (!start) {
      start = ts;
    }

    const elapsed = (ts - start) / 1000;
    const percent = Math.max(0, 100 - (elapsed / duration) * 100);

    bar.style.width = percent + "%";

    if (elapsed < duration) {
      requestAnimationFrame(animateTimer);
    } else {
      bar.style.width = "0%";

      quizContainer.classList.add(
        "opacity-0",
        "transition-opacity",
        "duration-1000"
      );

      setTimeout(() => {
        window.location = "quiz_page.php";
      }, 5000);
    }
  }

  requestAnimationFrame(animateTimer);
});
