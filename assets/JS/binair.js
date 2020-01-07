console.log("Binair questions");

// TODO: make a function that compares input to the given question.
// TODO: make a function that stores the question so it will not be displayed again.
// TODO: make a function that stores the amount of answers that are right or wrong.
// TODO: make a function that that display the amount of question answered and still to come.

// Create questions
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
}

let questionArr = [];
let a;

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
const startButton = document.getElementById('start-btn');
startButton.addEventListener('click', startGame);

function startGame(){
    console.log("started");
    questionRefresh();
}

function questionRefresh() {
    displayRandomQuestion()
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
        questionRefresh();
    }
}

function displayRandomQuestion() {
    for(var start = 0; start < 20; start++) {
        setTimeout(function () {
            let b = 0;
            let test = [];
            test = questions();
            console.log("first b", b);
            document.getElementById("question-p").innerHTML = test[b];
            b++;
            console.log(test);
            console.log("second b", b);
        }, 10000);
    }
}

// stop the game.
const stopButton = document.getElementById('stop-btn');
stopButton.addEventListener('click', stopGame);

function stopGame() {
    console.log("stopt the game.");
    location.reload(true);
}