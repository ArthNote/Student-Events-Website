function showpassword() {
    var x = document.getElementById("password");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
}

/*   Dark/Light mode toggle animation  */ 

function godark() {
  document.getElementById('light-mode').style.display='none';
  document.getElementById('dark-mode').style.display='flex';
  document.getElementById('cssmode').href='css/logindark.css';
}

function golight() {
  document.getElementById('dark-mode').style.display='none';
  document.getElementById('light-mode').style.display='flex';
  document.getElementById('cssmode').href='css/login.css';
}