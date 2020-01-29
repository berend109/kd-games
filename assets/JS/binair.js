console.log('Binair questions');

// Create questions
function getRandomInt(min, max) {
	min = Math.ceil(min);
	max = Math.floor(max);
	return Math.floor(Math.random() * (max - min)) + min;
}

// global variables
let questionArr = [];
let questionTotalTimeArr = [];
let a;
let b = 0;
let count = 30;
let timer;

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
	let startSignal = 'started';
	document.getElementById('question-p').innerHTML = startSignal;
	setTimeout(function(){}, 1000);
	console.log(questionArr);
	questions();
	maxQuestion();
}

function maxQuestion() {
	if (b < questionArr.length) {
		console.log(b);
		document.getElementById('questionToGo').innerHTML = b;
		questionRefresh();
	} else {
		document.getElementById('counter').innerHTML = 0;
		document.getElementById('questionToGo').innerHTML = 20;
		console.log('end game !!');
	}
}

function questionRefresh() {
	timer = setInterval(function() {
		console.log(count);
		displayRandomQuestion();
		document.getElementById('counter').innerHTML = count;
		count--;
		if(count === 0) {
			getInput();
			stopInterval();
		}
	}, 1000);
}

function stopInterval() {
	clearInterval(timer);
	b++;
	count = 30;
	maxQuestion();
}

function displayRandomQuestion() {
	document.getElementById('question-p').innerHTML = questionArr[b];
}

// stop the game.
const stopButton = document.getElementById('stop-btn');
stopButton.addEventListener('click', stopGame);

function stopGame() {
	console.log('stopt the game.');
	location.reload(true);
}

// compare answer tot question.
let goodAnswerArr = [];
let badAnswerArr = [];
let goodAnswerNmbr = 0;
let badAnswerNmbr = 0;

function getInput() {
	let expectedAnswer = (parseInt(questionArr[b], 2));
	console.log(expectedAnswer, 'expectedAnswer');

	let	inputUsr = document.getElementById('input-field').value

	if (expectedAnswer == inputUsr) {
		goodAnswerNmbr++;
	} else {
		badAnswerNmbr++
	}

	console.log('goodAnswerNmbr', goodAnswerNmbr);
	console.log('badAnswerNmbr', badAnswerNmbr);

	document.getElementById('questionRight').innerHTML = goodAnswerNmbr;
	document.getElementById('questionWrong').innerHTML = badAnswerNmbr;

	document.getElementById('input-field').value = '';
}

// go to the next question and store time taken to answer question.
const nextButton = document.getElementById('next-btn');
nextButton.addEventListener('click', nextBtn);

function nextBtn() {
	console.log('next button pressed !!');
	timeTaken();
	getInput();
	count = 0;
	stopInterval();
}

function timeTaken() {
	questionTotalTimeArr.push(count);
	console.log(questionTotalTimeArr);
}