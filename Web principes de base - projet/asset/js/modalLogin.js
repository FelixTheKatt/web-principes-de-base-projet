let modal = document.getElementById('loginmodal');
let loginbutton = document.getElementById("loginbutton");
let span = document.getElementsByClassName("close")[0];

// open the modal
loginbutton.onclick = function() {
    modal.style.display = "block";
}

// close the modal => X
span.onclick = function() {
    modal.style.display = "none";
}

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
