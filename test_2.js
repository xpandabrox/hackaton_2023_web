function test(){
    var div = document.createElement(div);
    div.style.width = "100px";
    div.style.height = "100px";
    div.style.background = "red";
    div.style.color = "white";
    div.innerHTML = "Hello";
    div.style.position = "absolute";
    document.getElementById("test").appendChild(div);
  }