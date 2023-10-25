function visibility(name) { //появление картинки
    var elem = document.getElementById("inputs");
    elem.style.animationName =name;
    elem.style.animationTimingFunction='cubic-bezier(1,-0.1, 0.72, 0.75)';
    elem.style.animationDuration = '0.5s';
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
function JJJ(position,opacity){
    var elem = document.getElementById("JJJ");
    var elem_2 = document.getElementById("MAIN_DIV");
    elem.style.position=position;
    elem_2.style.opacity=opacity;
    if(position=="absolute"){
    elem.style.animationName ='background_1';
    elem.style.animationTimingFunction='ease-in-out';
    elem.style.animationDuration = '0.5s';
    elem.style.animationFillMode='forwards';
    elem_2.style.animationName ='opacity_1';
    elem_2.style.animationTimingFunction='ease-in-out';
    elem_2.style.animationDuration = '0.5s';
    elem_2.style.animationFillMode='forwards';
    }
    else{
    elem.style.animationName ='background_2';
    elem.style.animationTimingFunction='ease-in-out';
    elem.style.animationDuration = '0.5s';
    elem.style.animationFillMode='forwards';
    elem_2.style.animationName ='opacity_2';
    elem_2.style.animationTimingFunction='ease-in-out';
    elem_2.style.animationDuration = '0.5s';
    elem_2.style.animationFillMode='forwards';
    }
}
  