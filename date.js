var today = new Date();
var dd = today.getDate();
var mm = today.getMonth()+1; //January is 0!
var yyyy = today.getFullYear();
var hour = today.getHours();
var minutes = today.getMinutes();
var seconds = today.getSeconds();

if(dd<10) {
    dd='0'+dd;
} 

if(mm<10) {
    mm='0'+mm;
} 

today = mm+'/'+dd+'/'+yyyy+' '+hour+':'+minutes+':'+seconds;
/* jshint ignore:start */
// Code here will be ignored by JSHint.  Want a clean exit but do want to use this utility for the rest.
document.write(today);
/* jshint ignore:end */
