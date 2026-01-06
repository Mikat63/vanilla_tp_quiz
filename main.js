const quizContainer = document.querySelector("#quiz_container");
const imgQuestion = document.querySelector("#img_question");
const question = document.querySelector("#question");
const answerBtn = document.querySelectorAll("#answer_btn");

function http_request() {
  fetch("process/ajax_request.php", {
    method: "POST",
    headers: { "Content-Type": "application/x-www-form-urlencoded" },
    body: "question=" + index,
  })
    .then((response) => response.json())
    .then((data) => {});
}

document.addEventListener("DOMContentLoaded", () => {
  http_request();
});

// progression bar
const duration = 10;
const bar = document.querySelector("#timer-bar");
let start = null;

function timer(ts) {
  if (!start) start = ts;

  const elapsed = (ts - start) / 1000;
  const percent = Math.max(0, 100 - (elapsed / duration) * 100);

  bar.style.width = percent + "%";

  if (elapsed < duration) {
    requestAnimationFrame(timer);
  } else {
    bar.style.width = "0%";
    const quizContainer = document.querySelector("#quiz_container");
    if (quizContainer) {
      quizContainer.classList.add(
        "opacity-0",
        "transition-opacity",
        "duration-4000"
      );
    }
  }
}

requestAnimationFrame(timer);
