// alert ("Binair");

// create random numbers that will be used in the questions() function.
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
}

// create variables to be used in the questions() function.
let questionArr = [];
let a;

// this function creates the questions and put it an array.
// change the number in the for loop behind "<" to get more or less questions.
function questions() {
    for (i = 0; i < 2; i++) {
        a = getRandomInt(5, 20);
        a = a.toString(2);
        questionArr.push(a);
    }

    for (i = 0; i < 4; i++) {
        a = getRandomInt(21, 50);
        a = a.toString(2);
        questionArr.push(a);
    }

    for (i = 0; i < 4; i++) {
        a = getRandomInt(51, 100);
        a = a.toString(2);
        questionArr.push(a);
    }

    for (i = 0; i < 4; i++) {
        a = getRandomInt(101, 150);
        a = a.toString(2);
        questionArr.push(a);
    }

    for (i = 0; i < 3; i++) {
        a = getRandomInt(151, 200);
        a = a.toString(2);
        questionArr.push(a);
    }

    for (i = 0; i < 3; i++) {
        a = getRandomInt(201, 256);
        a = a.toString(2);
        questionArr.push(a);
    }

    return questionArr;
}

// start the game.
// make the start button work.
const startButton = document.getElementById('start-btn');
startButton.addEventListener('click', startGame);

function startGame(){
    console.log("started");
    displayRandomQuestion();
}

function displayRandomQuestion() {
    var randomQuestion = questions()[Math.floor(Math.random() * questionArr.length)];
    document.getElementById("question-p").innerHTML = randomQuestion;
}

// TODO: This is a counter that can be used to display new question after sertain amount of time.
// TODO: make this usable with displayRandomQuestion() function.
// var count = 15;
// var timer = setInterval(function() {
//   console.log(count);
//   count--;
//   if(count === 0) {
//     stopInterval()
//   }
// }, 1000);

// var stopInterval = function() {
//   console.log('time is up!');
//   clearInterval(timer);
// }