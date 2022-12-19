import "../styles/style.scss";

const playTimer: HTMLCollectionOf<HTMLSpanElement> = document.getElementsByClassName("playTimer") as HTMLCollectionOf<HTMLSpanElement>;
const pausedTimer: HTMLCollectionOf<HTMLSpanElement> = document.getElementsByClassName("pausedTimer") as HTMLCollectionOf<HTMLSpanElement>;
const spanTimer: HTMLCollectionOf<HTMLSpanElement> = document.getElementsByClassName("spanTimer") as HTMLCollectionOf<HTMLSpanElement>;

let timer = 0;
for (let i = 0; i < playTimer.length; i++) {
    playTimer[i].addEventListener("click", () => {
        playTimer[i].className = "fa fa-play playTimer greenTimer";
        pausedTimer[i].className = "fa fa-pause pausedTimer";
        let timerId = setInterval(() => {
            timer++
            spanTimer[i].innerHTML = timer.toString();
        }, 1000);
        pausedTimer[i].addEventListener("click", () => {
            playTimer[i].className = "fa fa-play playTimer";
            pausedTimer[i].className = "fa fa-pause pausedTimer redTimer";
            clearInterval(timerId);
        })
    })
}












