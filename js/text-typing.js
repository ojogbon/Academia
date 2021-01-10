var string = "cademia O"; /* type your text here */
var array = string.split("");
var timer;

function frameLooper() {
    if (array.length > 0) {
        document.getElementById("text").innerHTML += array.shift();
    } else {
        clearTimeout(timer);
    }
    loopTimer = setTimeout('frameLooper()', 500); /* change 70 (160) 100 (250) 200 (500current) for speed */

}
frameLooper();
