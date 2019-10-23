// alert ("Binair");

function getRandomInt(min, max) {
    min = Math.ceil(min);
    max = Math.floor(max);
    return Math.floor(Math.random() * (max - min)) + min;
}

var question = getRandomInt(10, 20);

alert (question);

var num = prompt("Enter num");

if (question == num) {
    alert("yes");
} else {
    alert("no");
}