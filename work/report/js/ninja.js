
let count = 0;
var element = document.getElementById("ninja");
function countNumberOfHovering() {
 count++;
 console.log('Show number of hovering',count)
}
element.addEventListener("mouseover", function(){
  
  if (element.offsetLeft<document.body.clientWidth - 100)
    element.style.left = element.offsetLeft + 10 + "px";
    console.log(element.style.left);
    console.log(element.offsetLeft);
    console.log("Mouse Over");
});

element.addEventListener("click", function() {
    element.style.display = "none";
    console.log("clicked");

    setTimeout(()=>{
element.style.display = "block";
        
    }, 2000);
    
});




