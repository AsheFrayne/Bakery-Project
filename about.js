const conBtn = document.querySelector(".contacts");
const aboutBtn = document.querySelector(".aboutUs");
const textField = document.querySelector(".text-field");
const contactCon = document.querySelector(".contacts-con");

conBtn.onclick = () => {
    conBtn.classList.toggle("btn-active");
    aboutBtn.classList.toggle("btn-not-active");
    textField.classList.toggle("not-active");
    contactCon.classList.toggle("active");
}
aboutBtn.onclick = () => {
    conBtn.classList.toggle("btn-active");
    aboutBtn.classList.toggle("btn-not-active");
    textField.classList.toggle("not-active");
    contactCon.classList.toggle("active");
}