const alerts = document.querySelector(".alert");
const closeBtn = document.querySelector(".close-btn");
const submitBtn = document.querySelector(".submit");
const emailTxt = document.getElementById("email");
const unameTxt = document.getElementById("username");


if (alerts.classList.contains("show")) {
    setTimeout(function() {
        alerts.classList.remove("show");
        alerts.classList.add("hide");
    }, 3000);
}

closeBtn.onclick = () => {
    alerts.classList.remove("show");
    alerts.classList.add("hide");
}

document.getElementById("username").value = getSavedValue("username"); // set the value to this input
document.getElementById("email").value = getSavedValue("email");
document.getElementById("password").value = getSavedValue("password");
//Save the value function - save it to localStorage as (ID, VALUE)
function saveValue(e) {
    var id = e.id; // get the sender's id to save it . 
    var val = e.value; // get the value. 
    localStorage.setItem(id, val); // Every time user writing something, the localStorage's value will override . 
}

//get the saved value function - return the value of "v" from localStorage. 
function getSavedValue(v) {
    if (!localStorage.getItem(v)) {
        return ""; // You can change this to your defualt value. 
    }
    return localStorage.getItem(v);
}