import {timer} from "./main.js";

function timerAdd() {
    const timeAdd = timer.start.sTimer();
    timeAdd;
    let s = "0" + timeAdd.s;
    let m = "0" + timeAdd.m;
    let h = "0" + timeAdd.h;

    if (s > 9) {
        s = s.slice(-2);
    }

    let result = h + ":" + m + ":" + s;
    console.log(result);

    let sT = document.getElementById("sTime");
    sT.innerHTML = result;  
}

setInterval(timerAdd,1000);







