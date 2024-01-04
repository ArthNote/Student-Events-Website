/* Hamburger Menu */

const menu = document.getElementById('menu');
const action = document.getElementById('action');

menu.addEventListener("click", ()=>{
    hundlemenu();
})

function hundlemenu(){
    menu.classList.toggle("is-active");
    action.classList.toggle("is-active");
}

/*   Dark/Light mode toggle animation  */ 


function godark() {
  document.getElementById('light-mode').style.display='none';
  document.getElementById('dark-mode').style.display='flex';
  document.getElementById('cssmode').href='css/homedark.css';
}

function golight() {
  document.getElementById('dark-mode').style.display='none';
  document.getElementById('light-mode').style.display='flex';
  document.getElementById('cssmode').href='css/home.css';
}

const sr = ScrollReveal({
  distance: '60px',
  duration: 2500,
  reset: true
})

sr.reveal('.container-texts',{delay:200, origin:'top'})
sr.reveal('.container-images',{delay:200, origin:'top'})
sr.reveal('.events, .about',{delay:200, origin:'top'})
