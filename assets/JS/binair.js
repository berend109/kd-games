// alert ("Binair");

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
}

// create questions.
let questionArr = [];

function questions() {
    for (i = 0; i < 2; i++) {
        questionArr.push(getRandomInt(5, 20));
    }

    for (i = 0; i < 4; i++) {
        questionArr.push(getRandomInt(21, 50));
    }

    for (i = 0; i < 4; i++) {
        questionArr.push(getRandomInt(51, 100));
    }

    for (i = 0; i < 4; i++) {
        questionArr.push(getRandomInt(101, 150));
    }

    for (i = 0; i < 3; i++) {
        questionArr.push(getRandomInt(151, 200));
    }

    for (i = 0; i < 3; i++) {
        questionArr.push(getRandomInt(201, 256));
    }

    return questionArr;
}

console.log(questions());

// var question = getRandomInt(10, 20);
//
// alert (question);
//
// var num = prompt("Enter num");
//
// if (question == num) {
//     alert("yes");
// } else {
//     alert("no");
// }
