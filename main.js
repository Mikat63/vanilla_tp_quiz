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

      showResulAnswer(data);
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

// function to show if answer is correct the button be green and if false red
function showResulAnswer(data) {
  if (data.status === "finished") {
    window.location.href = "./score_player.php";
    return;
  }

  const goodAnswerId = data.id_answer;
  const clickedAnswerId = data.clicked_answer;

  answersBtn.forEach((answer) => {
    if (data.is_correct) {
      if (parseInt(answer.dataset.answer) === parseInt(goodAnswerId)) {
        answer.classList.remove("bg-[#0879C9]");
        answer.classList.add("bg-[#1E8717]");
      }
    }

    if (!data.is_correct) {
      if (parseInt(answer.dataset.answer) === parseInt(goodAnswerId)) {
        answer.classList.remove("bg-[#0879C9]");
        answer.classList.add("bg-[#1E8717]");
      }

      if (parseInt(answer.dataset.answer) === parseInt(clickedAnswerId)) {
        answer.classList.remove("bg-[#0879C9]");
        answer.classList.add("bg-[#C91D1D]");
      }
    }
  });
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
