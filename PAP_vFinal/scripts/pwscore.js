function metervalor(){

var password = document.getElementById('password');
var meter = document.getElementById('password-strength-meter');

var val = password.value;
var result = zxcvbn(val);
// Update the password strength meter
meter.value = result.score;
};