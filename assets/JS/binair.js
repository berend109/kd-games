console.log("Binair questions");

// Create questions
function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
}

let questionArr = [];
let a;
let b = 0;

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
    console.log(questionArr);
}

function questionRefresh() {
    let count = 10;
    let timer = setInterval(function() {
        console.log(count);
        document.getElementById("counter").innerHTML = count;
        displayRandomQuestion();
        count--;
        if(count === 0) {
            stopInterval();
        }
    }, 1000);

    let stopInterval = function() {
        clearInterval(timer);
        b++;
        questionRefresh();
    }
}

function displayRandomQuestion() {
    let test = [];
    test = questions();
    document.getElementById("question-p").innerHTML = test[b];
}

// stop the game.
const stopButton = document.getElementById('stop-btn');
stopButton.addEventListener('click', stopGame);

function stopGame() {
    console.log("stopt the game.");
    location.reload(true);
}