function visibility(name) { //появление картинки
    var elem = document.getElementById("inputs");
    elem.style.animationName =name;
    elem.style.animationTimingFunction='cubic-bezier(1,-0.1, 0.72, 0.75)';
    elem.style.animationDuration = '1s';
    elem.style.animationFillMode='forwards';
  }
  
  function deadline(vision){
    var elem = document.getElementById("deadline");
    elem.style.opacity=vision;
  }
  
  
  function DOP_DETALS(name){
    var elem = document.getElementById("DOP_DETALS");
    elem.style.animationName =name;
    elem.style.animationTimingFunction='cubic-bezier(0, 0.43, 0.02, 1.09)';
    elem.style.animationDuration = '1s';
    elem.style.animationFillMode='forwards';
  }
  
  
  