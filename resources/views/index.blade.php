<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="stylesheet" href="{{asset('public/css/style.css')}}" />
    <title>Timmer</title>
  </head>
  <body>
    <div id="startTime">
      <p>Start Time</p>
      <li id="startTimeShow">00:00:00</li>
    </div>

    <div class="maincontainer">
      <div id="datecontainer">
        <p>00:00:00</p>
      </div>
      <div id="timecontainer">
        <p>00:00:00</p>
      </div>
      <div class="btn-div">
        <button class="startTime" onclick="startClock()">
          Start
        </button>
        <button class="stopTime" onclick="stopClock()">
          Stop
        </button>
      </div>
    </div>

    <div id="stopTime">
      <p>Stop Time</p>
      <li id="stopTimeShow">00:00:00</li>
    </div>
  </body>
  <script>
(function showDate() {
    var todayDate = new Date();
    document.getElementById("datecontainer").innerText =
        todayDate.toDateString();
})();

//04:24:50 PM
function getTime() {
    //   var todayDate = new Date();
    //   var hours = todayDate.getHours(); //0-23
    //   var mintus = todayDate.getMinutes(); //0-59
    //   var second = todayDate.getSeconds(); //0-59
    //   console.log("hr,mints,seond", hours, mintus, second);
    //   var session = "AM";
    //   if (hours == 0) {
    //     hours = 12;
    //   } else if (hours > 12) {
    //     session = "PM";
    //     hours = hours - 12; //15-2=3
    //   }
    //   hours = hours < 10 ? 0 + "" + hours : hours;
    //   mintus = mintus < 10 ? 0 + "" + mintus : mintus;
    //   second = second < 10 ? 0 + "" + second : second;
    //   var clockTime = hours + ":" + mintus + ":" + second + " " + session;
    var clockTime = new Date().toLocaleTimeString([], {
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
    });
    document.getElementById("timecontainer").innerText = clockTime;
}
var setTime;
var startingTime;
var stopTime;
var result;
var differnce;

function startClock() {
    setTime = setInterval(getTime, 10);
    startingTime = new Date().toLocaleTimeString([], {
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
    });
    document.getElementById("startTimeShow").innerHTML = startingTime;
    console.log("startTime", startingTime);
}

function stopClock() {
    clearInterval(setTime);
    stopTime = new Date().toLocaleTimeString([], {
        hour: "2-digit",
        minute: "2-digit",
        second: "2-digit",
    });
    document.getElementById("stopTimeShow").innerHTML = stopTime;
    console.log("stopTime",  stopTime);
    console.log(getDifferenceInSeconds(stopTime, startingTime));



}

  </script>
</html>



