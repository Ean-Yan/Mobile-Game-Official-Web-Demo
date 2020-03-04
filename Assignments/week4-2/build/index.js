"use strict";
function getElement(id) {
    var element = document.getElementById(id);
    if (element) {
        return element;
    }
    throw new Error("Element with id " + id + " was not found.");
}
function getRandomNumber(min, max) {
    return Math.round(Math.random() * (max - min)) + min;
}
var myFunction = function () {
    getElement("a").value = getRandomNumber(1, 1000).toString();
    getElement("b").value = getRandomNumber(1, 1000).toString();
};
function compute() {
    var a = getElement("a").valueAsNumber;
    var b = getElement("b").valueAsNumber;
    var answer = getElement("answer");
    answer.innerText = "" + (a + b);
}
//# sourceMappingURL=index.js.map