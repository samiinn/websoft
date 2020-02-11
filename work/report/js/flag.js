var fra = document.getElementById("france-b");
var fin = document.getElementById("finland-b");
var gre = document.getElementById("greece-b");

var fraDiv = document.getElementById("france");
var finDiv = document.getElementById("finland");
var greDiv = document.getElementById("greece");




fra.addEventListener("click", function() {
    fraDiv.style.display = "block";
})

fin.addEventListener("click", function() {
    finDiv.style.display = "block";
})

gre.addEventListener("click", function() {
    greDiv.style.display = "block";
})