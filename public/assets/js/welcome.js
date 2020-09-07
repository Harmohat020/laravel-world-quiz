const text = document.querySelector(".title");
const strText = text.textContent;
const split = strText.split("");
text.textContent = "";

for(let i=0; i < split.length; i++ ){
  text.innerHTML += "<span>"+ split[i] +"</span>"
}

let char = 0;

let time = setInterval(onTick, 50);

function onTick(){
  const span = text.querySelectorAll('span')[char];
  span.classList.add('fade');
  char++;
  if (char === split.length) {
    complete();
    return;
  }
}

function complete(){
  clearInterval(time);
  time = null;
}

