jQuery(document).ready(function ($) {
    let sec = parseInt(sessionStorage.getItem('timeSpent')) || 0;

    function updateTime() {
        sec++;
        $('#time-tracker-display').text(sec + ' seconds');
        sessionStorage.setItem('timeSpent', sec);
    }
    setInterval(updateTime, 1000);
});
