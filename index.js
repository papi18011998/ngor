window.onload = function(){
   countDownContainer = document.querySelector("h2")
   function getCountDown() {
    var today = new Date().getTime()
    var countdown = new Date('Jan 18, 2022')
    dateDiff = countdown - today
    var days = Math.floor(dateDiff / (1000*60*60*24))
    var hours = Math.floor((dateDiff %(1000*60*60*24)) / (1000*60*60))
    var minuts = Math.floor((dateDiff %(1000*60*60)) / (1000*60))
    var seconds = Math.floor((dateDiff %(1000*60)) / (1000))
    countDownContainer.innerHTML = days + " j " + hours + " h " + minuts + " mn " + seconds +" s"
   }
   setInterval(() => {
       getCountDown()
   }, 1000);
}