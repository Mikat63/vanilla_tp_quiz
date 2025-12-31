const answerContainer = document.querySelector("#answer_container");
const counter_question = document.querySelector("#counter_question");
let index = 0;
let counter = index + 1 + "/10";

// Create an answer button (same style as the PHP partial)
function createAnswerButton(answerText) {
  const btn = document.createElement("button");
  btn.className =
    "answer_btn w-full h-auto p-2 rounded-lg text-[20px] text-white bg-[#0879C9] cursor-pointer focus:scale-110 focus:outline-0";
  btn.setAttribute("data-answer", answerText);
  btn.textContent = answerText;
  return btn;
}

// Render answer buttons for the current question and handle answer validation
function showAnswer(data) {
  // Update the question counter in the HTML
  if (counter_question) {
    counter_question.textContent = index + 1 + "/10";
  }
  answerContainer.innerHTML = "";
  if (data.answers && Array.isArray(data.answers)) {
    const buttons = [];
    data.answers.forEach((rep) => {
      const btn = createAnswerButton(rep);
      if (rep === data.correct) {
        btn.dataset.correct = "true";
      } else {
        btn.dataset.correct = "false";
      }
      btn.addEventListener("click", () => {
        // Disable all buttons
        buttons.forEach(function (b) {
          b.disabled = true;
        });
        // Remove previous color classes and add Tailwind feedback
        buttons.forEach(function (b) {
          b.classList.remove("bg-[#0879C9]", "bg-green-500", "bg-red-500");
          if (b.dataset.correct === "true") {
            b.classList.add("bg-green-500");
          } else {
            b.classList.add("bg-red-500");
          }
        });
        // Fade out the quiz container
        const quizContainer = document.querySelector("#quiz_container");
        if (quizContainer) {
          quizContainer.classList.add(
            "opacity-0",
            "transition-opacity",
            "duration-4000"
          );
        }
        // After fade, increment index, load next question, remove opacity, restart timer
        setTimeout(function () {
          index++;
          questionAnswers(rep, index);
          if (quizContainer) {
            quizContainer.classList.remove("opacity-0");
          }
          startProgressBar();
        }, 2000);
      });
      answerContainer.appendChild(btn);
      buttons.push(btn);
    });
  }
}

// Fetch the question and answers from the server
function questionAnswers(answerValue, index) {
  fetch("process/ajax_questions_answers.php", {
    method: "POST",
    headers: {
      "Content-Type": "application/x-www-form-urlencoded",
    },
    body:
      "answer=" +
      encodeURIComponent(answerValue) +
      "&question=" +
      encodeURIComponent(index),
  })
    .then((response) => response.json())
    .then((data) => {
      showAnswer(data);
    });
}

// Start the progress bar (timer) for each question
function startProgressBar() {
  const duration = 10;
  const bar = document.querySelector("#timer-bar");
  const quizContainer = document.querySelector("#quiz_container");
  if (!bar) return;

  let start = null;

  function animateTimer(ts) {
    if (!start) start = ts;
    const elapsed = (ts - start) / 1000;
    const percent = Math.max(0, 100 - (elapsed / duration) * 100);
    bar.style.width = percent + "%";

    if (elapsed < duration) {
      requestAnimationFrame(animateTimer);
    } else {
      bar.style.width = "0%";
      setTimeout(() => {
        if (quizContainer) {
          quizContainer.classList.add(
            "opacity-0",
            "transition-opacity",
            "duration-4000"
          );
        }
      }, 2000);
      setTimeout(() => {
        index++; // Incrémente l'index pour la prochaine question
        if (counter_question) {
          counter_question.textContent = index + 1 + "/10";
        }
        questionAnswers("", index);
        if (quizContainer) {
          quizContainer.classList.remove("opacity-0");
        }
        startProgressBar();
      }, 6000);
    }
  }

  requestAnimationFrame(animateTimer);
}

// Load the first question and start the progress bar when the page is ready
document.addEventListener("DOMContentLoaded", function () {
  index = 0;
  if (counter_question) {
    counter_question.textContent = index + 1 + "/10";
  }
  questionAnswers("", index);
  startProgressBar();
});
