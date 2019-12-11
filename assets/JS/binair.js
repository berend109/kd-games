// alert ("Binair");

// TODO: make a function that compares input to the given question.
// TODO: make a function that stores the question so it will not be displayed again.
// TODO: make a function that stores the amount of answers that are right or wrong.

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
    questionRefresh();
}

function questionRefresh() {
    displayRandomQuestion();
    let count = 10;
    let timer = setInterval(function() {
        console.log(count);
        count--;
        if(count === 0) {
            stopInterval();
        }
    }, 1000);

    let stopInterval = function() {
        clearInterval(timer);
        startGame();
    }
}

function displayRandomQuestion() {
    document.getElementById("question-p").innerHTML = questions()[Math.floor(Math.random() * questionArr.length)];
}
