const alerts = document.querySelector(".alert");
const closeBtn = document.querySelector(".close-btn");
if(alerts.classList.contains("show")){

        setTimeout(function(){
          alerts.classList.remove("show");
          alerts.classList.add("hide");
        },3000);
}

closeBtn.onclick = () => { 
    alerts.classList.remove("show");
    alerts.classList.add("hide");
}