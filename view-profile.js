const editButton = document.querySelector('.edit-btn');
const doneButton = document.querySelector(".done-btn");
const textBox = document.querySelector('.txt-box');
const textArea = document.querySelector('.description');
const pwbox = document.querySelector('.pw-box');
const dateBox = document.querySelector(".date-joined");
const menuBox = document.querySelector(".menu");
const delBtn = document.querySelector(".del-btn")
const container = document.querySelector(".container");
const hover = document.querySelector(".-label");
const modalBg = document.querySelector(".modal-bg");
const cancelBtn = document.querySelector(".cancel-btn");
const warning = document.querySelector(".alert");
const password = document.querySelector(".password");
const cPassword = document.querySelector(".conf-password");
const msg = document.querySelector(".msg");
const uname = document.querySelector(".uname");
const fileUpload = document.querySelector('#file');
const profileImg = document.querySelector('.profile-img');

fileUpload.onchange = () => {
    profileImg.src = URL.createObjectURL(fileUpload.files[0]);
}

editButton.addEventListener("click", e => {
    fileUpload.disabled = false;
    textBox.removeAttribute('readonly');
    textArea.removeAttribute('readonly');
    textBox.style.borderBottom = '1px gray solid';
    pwbox.style.display = "flex";
    doneButton.style.display = "block";
    editButton.style.display = 'none';
    dateBox.style.display = "none";

    var css = '.-label:hover {width: 150px; height: 150px; font-size: 14px; z-index: 1; background-color: rgba(0, 0, 0, 0.8); color: white; transition: background-color 0.2s ease; border-radius: 100px; margin-bottom: 0; cursor: pointer; }';
    var style = document.createElement('style');

    if (style.styleSheet) {
        style.styleSheet.cssText = css;
    } else {
        style.appendChild(document.createTextNode(css));
    }

    document.getElementsByTagName('head')[0].appendChild(style);
});


delBtn.addEventListener("click", () => {
    modalBg.classList.add("bg-active");
});
cancelBtn.addEventListener("click", () => {
    modalBg.classList.remove("bg-active");
})

container.addEventListener('click', menu);

function menu(e) {
    const item = e.target;

    if (item.classList[0] === "menu") {
        delBtn.classList.toggle("clicked");
    } else if (item.classList[0] != "menu" && delBtn.classList.contains("clicked")) {
        delBtn.classList.toggle("clicked");
    }
}

// Validation
doneButton.onclick = () => {
    const passwordValue = password.value;
    const confirmPassword = cPassword.value;
    const unameValue = uname.value;

    if (unameValue === '') {
        warning.classList.add("show");
        warning.classList.remove("hide");
        warning.classList.add("showAlert");
        setTimeout(function() {
            warning.classList.remove("show");
            warning.classList.add("hide");
        }, 3000);
        msg.innerHTML = "Provide new Username";
        e.preventDefault();

    } else if (unameValue.length < 5) {
        warning.classList.add("show");
        warning.classList.remove("hide");
        warning.classList.add("showAlert");
        setTimeout(function() {
            warning.classList.remove("show");
            warning.classList.add("hide");
        }, 3000);
        msg.innerHTML = "Username is too short";
        e.preventDefault();
    }

    if (passwordValue === '') {
        warning.classList.add("show");
        warning.classList.remove("hide");
        warning.classList.add("showAlert");
        setTimeout(function() {
            warning.classList.remove("show");
            warning.classList.add("hide");
        }, 3000);
        msg.innerHTML = "Provide Password below";
        e.preventDefault();
    } else if (passwordValue.length < 8) {
        warning.classList.add("show");
        warning.classList.remove("hide");
        warning.classList.add("showAlert");
        setTimeout(function() {
            warning.classList.remove("show");
            warning.classList.add("hide");
        }, 3000);
        msg.innerHTML = "Password is too short";
        e.preventDefault();
    } else if (/[^0-9a-zA-Z]/.test(passwordValue)) {
        warning.classList.add("show");
        warning.classList.remove("hide");
        warning.classList.add("showAlert");
        setTimeout(function() {
            warning.classList.remove("show");
            warning.classList.add("hide");
        }, 3000);
        msg.innerHTML = "Password contains symbols";
        e.preventDefault();
    } else if (passwordValue !== confirmPassword) {
        warning.classList.add("show");
        warning.classList.remove("hide");
        warning.classList.add("showAlert");
        setTimeout(function() {
            warning.classList.remove("show");
            warning.classList.add("hide");
        }, 3000);
        msg.innerHTML = "Password doesn't not match";
        e.preventDefault();
    } else if (unameValue == unameValue) {

        textBox.setAttribute("readonly", "readonly");
        textArea.setAttribute("readonly", "readonly");
        textBox.style.removeProperty('background color');
        textBox.style.removeProperty('border-bottom');
        pwbox.style.display = "none";
        doneButton.style.display = "none";
        editButton.style.display = 'block';
        dateBox.style.display = "flex";
    }



}