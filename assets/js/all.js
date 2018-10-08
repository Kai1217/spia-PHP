/* function alertFunction() {
    var alerted = localStorage.getItem('alerted') || '';
    if (alerted != 'yes') {
        alert("Welcome! Enjoy your stay!");
        localStorage.setItem('alerted','yes');
    }
} */
function browserDetection() { 
    if((navigator.userAgent.indexOf("Opera") || navigator.userAgent.indexOf('OPR')) != -1 ) 
   {
      // alert('Opera');
   }
   else if(navigator.userAgent.indexOf("Chrome") != -1 )
   {
      // alert('Chrome');
   }
   else if(navigator.userAgent.indexOf("Safari") != -1)
   {
      // alert('Safari');
   }
   else if(navigator.userAgent.indexOf("Firefox") != -1 ) 
   {
       // alert('Firefox');
   }
   else if((navigator.userAgent.indexOf("MSIE") != -1 ) || (!!document.documentMode == true )) //IF IE > 10
   {
     alert('It appears that you are using Microsoft Internet Explorer, we recommend that you change to a different browser to view this webpage correctly. Example browsers include; Firefox, Chrome, Edge.'); 
   }  
   else 
   {
      // alert('unknown');
   }
}
function w3_open() {
    var x = document.getElementById("mySidebar");
    x.style.width = "300px";
    x.style.paddingTop = "10%";
    x.style.display = "block";
}

// Close side navigation
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
}

// Used to toggle the menu on smaller screens when clicking on the menu button
function openNav() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
// Get the modal
var modal = document.getElementById('myModal');

// Get the button that opens the modal
var btn = document.getElementById("myBtn");

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
btn.onclick = function() {
    modal.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
} 
/* Second */
// Get the modal
var modal2 = document.getElementById('myModal2');

// Get the button that opens the modal
var btn2 = document.getElementById("myBtn2");

// Get the <span> element that closes the modal
var span2 = document.getElementsByClassName("close2")[0];

// When the user clicks on the button, open the modal
btn2.onclick = function() {
    modal2.style.display = "block";
}

// When the user clicks on <span> (x), close the modal
span2.onclick = function() {
    modal2.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal2) {
        modal2.style.display = "none";
    }
} 
function goBack() {
    window.history.back();
}

// alertFunction();
browserDetection();