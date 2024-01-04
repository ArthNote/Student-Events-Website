function godark() {
    document.getElementById('light-mode').style.display='none';
    document.getElementById('dark-mode').style.display='flex';
    document.getElementById('cssmode').href='css/eventdark.css';
  }
  
  function golight() {
    document.getElementById('dark-mode').style.display='none';
    document.getElementById('light-mode').style.display='flex';
    document.getElementById('cssmode').href='css/event.css';
  }
