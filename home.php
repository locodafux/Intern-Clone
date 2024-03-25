<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/home-style.css">
    <title>Home</title>
</head>
<body>
    <div class="container">
        <div class="timer-container">
            <h3>Timesheet</h3>
            <span id = "date-now">Date now</span>
            <span id="dur">time</span>
            <button id = "start-time">Start time</button>
            <form action="./Handler/saveTime.php" method="post">
            <input type="text" hidden  name="date">
            <input type="text" hidden  name="time-start">
            <input type="text" hidden  name="time-end">
            <input type="text" hidden  name="duration">
            <input type="submit" name="save" id="stop-time" style="display:none" value = "Stop time" />

            </form>
        </div>
    </div>
    <script>
        var dateNow = document.getElementById('date-now');
        var currentDate = new Date();

        // Array of month names
        var monthNames = ["January", "February", "March", "April", "May", "June",
            "July", "August", "September", "October", "November", "December"
        ];

        // Get the current month
        var currentMonth = monthNames[currentDate.getMonth()];
        var day = currentDate.getDate();
        var year = currentDate.getFullYear();

        dateNow.innerHTML = currentMonth + " " +  day + " " + year;

        var startTime = document.getElementById("start-time");
        var stopTime = document.getElementById("stop-time");
        var secs = 0;
        var mins = 0;
        var hours = 0;

        startTime.addEventListener("click", function dur() {
            let secTens = "0";
            let minTens = "0";
            let hourTens = "0";
            var durText = document.getElementById("dur");
            document.getElementsByName("time-start")[0].value = new Date().toLocaleTimeString();
            document.getElementsByName("date")[0].value = dateNow.textContent;

            var intervalId = setInterval(function() {
                secs++;

                if (secs > 9) {
                    secTens = "";
                } else {
                    secTens = "0";
                }

                if (mins > 9) {
                    minTens = "";
                } else {
                    minTens = "0";
                }

                if (hours > 9) {
                    hourTens = "";
                } else {
                    hourTens = "0";
                }

                if (secs === 60) {
                    mins++;
                    secTens = "0";
                    secs = 0;
                }

                if (mins === 60) {
                    hours++;
                    minTens = "0";
                    mins = 0;
                }

                durText.innerHTML =  hourTens + hours + ":" + minTens + mins + ":" + secTens + secs;
                document.getElementsByName("duration")[0].value = hourTens + hours + ":" + minTens + mins + ":" + secTens + secs;
                document.getElementsByName("time-end")[0].value =new Date().toLocaleTimeString();

            }, 1000);
            startTime.style.display = "none";
            stopTime.style.display = "block";
        });


   
    </script>
</body>
</html>
