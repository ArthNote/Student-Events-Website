  function showevents(evt, condition) {
    // Declare all variables
    var i, eventscontainer, tab;
  
    // Get all elements with class="tabcontent" and hide them
    eventscontainer = document.getElementsByClassName("eventscontainer");
    for (i = 0; i < eventscontainer.length; i++) {
        eventscontainer[i].style.display = "none";
    }
  
    // Get all elements with class="tablinks" and remove the class "active"
    tab = document.getElementsByClassName("tab");
    for (i = 0; i < tab.length; i++) {
        tab[i].className = tab[i].className.replace(" active", "");
    }
  
    // Show the current tab, and add an "active" class to the button that opened the tab
    document.getElementById(condition).style.display = "flex";
    evt.currentTarget.className += " active";
  }



  function godark() {
    document.getElementById('light-mode').style.display='none';
    document.getElementById('dark-mode').style.display='flex';
    document.getElementById('cssmode').href='css/eventsdark.css';
  }
  
  function golight() {
    document.getElementById('dark-mode').style.display='none';
    document.getElementById('light-mode').style.display='flex';
    document.getElementById('cssmode').href='css/events.css';
  }
