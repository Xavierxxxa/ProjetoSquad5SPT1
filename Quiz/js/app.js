const questionNumber = document.querySelector(".question-number");
const questionText =  document.querySelector(".question-text");
const optionContainer = document.querySelector(".option-container");
const homeBox = document.querySelector(".home-box");
const quizBox = document.querySelector(".quiz-box");
const resultBox = document.querySelector(".result-box");

let questionCounter = 0;
let currentQuestion;
let availableQuestions = [];
let availableOptions = [];
let correctAnswers = 0;

/* envia as questões para dentro do array availableQuestions */
function setAvailableQuestions() {
    const totalQuestion = quiz.length;
    for(let i=0; i<totalQuestion; i++){
        availableQuestions.push(quiz[i])
    }
}

/* Passa para a próxima questão */
function getNewQuestion(){
    questionNumber.innerHTML = "Questão " + (questionCounter + 1) + " de " + quiz.length;

    const questionIndex = availableQuestions[Math.floor(Math.random() * availableQuestions.length)]
    currentQuestion = questionIndex;
    questionText.innerHTML = currentQuestion.q;

    const index1 = availableQuestions.indexOf(questionIndex);
        availableQuestions.splice(index1,1);
        const optionLen = currentQuestion.options.length
        
        for(let i=0; i<optionLen; i++){
            availableOptions.push(i)
        }

        optionContainer.innerHTML = ''; 
        
        let animationDelay = 0.2;
        for(let i=0; i<optionLen; i++) {
            const optionIndex = availableOptions[Math.floor(Math.random() * availableOptions.length)];
            const index2 = availableOptions.indexOf(optionIndex);

            availableOptions.splice(index2,1);
            const option = document.createElement("div");
            option.innerHTML = currentQuestion.options[optionIndex];
            option.id = optionIndex;
            option.style.animationDelay = animationDelay + 's';
            animationDelay = animationDelay + 0.2;
            option.className = "option";
            optionContainer.appendChild(option)
            option.setAttribute("onclick", "getResult(this)")
        }
        
    questionCounter++
}

/* Resultado do Quiz */
function getResult(element) {
    const id = parseInt(element.id);
    
    if (id === currentQuestion.answer) {
        element.classList.add("correct");
        correctAnswers++;
        
    } else {
        element.classList.add("wrong");

        const optionLen = optionContainer.children.length;
        for(let i=0; i<optionLen; i++) {
            if(parseInt(optionContainer.children[i].id) === currentQuestion.answer) {
                optionContainer.children[i].classList.add("correct");
            }
        }
    }
    unclickableOptions();
}

function unclickableOptions() {
    const optionLen = optionContainer.children.length;
    for(let i=0; i<optionLen; i++) {
        optionContainer.children[i].classList.add("already-answered")
    }
}

function next(){
    if(questionCounter === quiz.length){
        quizOver();
    }
    else{
        getNewQuestion();
    }
}

function quizOver(){
    quizBox.classList.add("hide");

    resultBox.classList.remove("hide");
    quizResult();
}

/* Calcula o resultado do Quiz */
function quizResult(){
    resultBox.querySelector(".total-question").innerHTML = quiz.length;
    resultBox.querySelector(".total-correct").innerHTML = correctAnswers;
    resultBox.querySelector(".total-wrong").innerHTML = quiz.length - correctAnswers;
    const percentage = (correctAnswers/quiz.length)*100;
    resultBox.querySelector(".percentage").innerHTML = percentage + "%";
    resultBox.querySelector(".total-score").innerHTML = correctAnswers + " / " + quiz.length;
}

/* Reinicia o Quiz */
function resetQuiz() {
    questionCounter = 0;
    correctAnswers = 0;
}

/* Tentar responder o Quiz novamente */
function tryAgainQuiz() {
    resultBox.classList.add("hide");

    quizBox.classList.remove("hide");
    resetQuiz();
    startQuiz();
}

/* Volta para a home */
function goToHome() {
    resultBox.classList.add("hide");

    homeBox.classList.remove("hide");
    resetQuiz();
}

/* Inicia o Quiz */
function startQuiz(){

    homeBox.classList.add("hide");

    quizBox.classList.remove("hide");

    setAvailableQuestions();

    getNewQuestion();
}

window.onload = function () {
    homeBox.querySelector(".total-question").innerHTML = quiz.length;
}

