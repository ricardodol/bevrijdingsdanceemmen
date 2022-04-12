// let date = new Date('2020-04-26T17:00:00');
let date = moment('2023-05-05T17:00:00').tz('Europe/Amsterdam').format("YYYY-MM-DD HH:mm:ss");

// Grab the current date
let currentDate = new Date();

// Set some date in the future. In this case, it's always Jan 1
let futureDate  = new Date(currentDate.getFullYear() + 1, 0, 1);

// Calculate the difference in seconds between the future and current date
// let diff = date.getTime() / 1000 - currentDate.getTime() / 1000;
let diff = moment(date).diff(moment(), 'seconds');

if(diff < 0){
    diff = 0;
}

let clock = $('.countdown-clock').FlipClock(diff, {
    clockFace: 'DailyCounter',
    countdown: true
});
