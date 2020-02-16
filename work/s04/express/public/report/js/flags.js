function showFlag(country) {
    var x = document.getElementById(country);
    var box = document.getElementsByClassName('box');
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.transition = "all 1s linear";
      x.style.display = "none";
    }
    if (box.classList.contains('hidden')) {
      box.classList.remove('hidden');
      setTimeout(function () {
        box.classList.remove('visuallyhidden');
      }, 20);
    } else {
      box.classList.add('visuallyhidden');    
      box.addEventListener('transitionend', function(e) {
        box.classList.add('hidden');
      }, {
        capture: false,
        once: true,
        passive: false
      });
    }
  }
