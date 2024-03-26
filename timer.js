    let timer = document.getElementById("timer");
    let start = document.getElementById("start-timer");
    let stopBtn = document.getElementById("stop-timer");
    let myInterval; 
    start.addEventListener("click",  startTimer);
    stopBtn.addEventListener("click",  stopTimer);

    window.addEventListener("load", (event) => {
        // Continue timer on load
    console.log("Page is fully loaded");
    if (localStorage.getItem("time-start")) {
        startTimer ();
    } else {
        stopTimer();   
    }
      });
    function startTimer () {
        // check if already saved in local storage
        if(!localStorage.getItem("time-start")){
            saveTimeStart();
        }
         myInterval =  setInterval(displayTimer, 1000);
        return myInterval;
       
    }

    function stopTimer() {
        clearInterval(myInterval);
        localStorage.removeItem("time-start");
        timer.innerHTML="";
    }

    function displayTimer() {
        //display timer to html
        var currentTime = new Date();
        var startTime = new Date (localStorage.getItem("time-start"));
        var difference = currentTime.getTime() - startTime.getTime();
        var hours = Math.floor(difference / (1000 * 60 * 60));
        var minutes = Math.floor((difference % (1000 * 60 * 60)) / (1000 * 60));
        var seconds = Math.floor((difference % (1000 * 60)) / 1000);
        

         timer.innerHTML = hours + ' hours, ' + minutes + ' minutes, ' + seconds + ' seconds'
    }

    function saveTimeStart() {
        //save time-start to localStorage
        var currentTime = new Date();
        localStorage.setItem("time-start", currentTime);
        console.log(currentTime)
        return currentTime;
    }
   
 