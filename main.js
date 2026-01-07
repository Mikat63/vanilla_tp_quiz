const quizContainer = document.querySelector("#quiz_container");
const imgQuestion = document.querySelector("#img_question");
const question = document.querySelector("#question");
const answersBtn = document.querySelectorAll(".answer_btn");

// fetch ajax function
function http_request(questionId, answerId) {
  fetch("process/next_question.php", {
    method: "POST",
    headers: { "Content-Type": "application/json" },
    body: JSON.stringify({
      questionId: questionId,
      answerId: answerId,
    }),
  })
    .then((response) => response.json())
    .then((data) => {
      console.log(data);
    });
}

// listening answer click
answersBtn.forEach((answer) => {
  answer.addEventListener("click", () => {
    const answerId = answer.dataset.answer;
    const questionId = answer.dataset.question;

    http_request(questionId, answerId);
  });
});

function showResulAnswer(data) {
  if (data.status === "finished") {
    window.location.href = "./score.php";
  }

  if (data.is_correct) {
    
  }
}

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
