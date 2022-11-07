const eyeBtn = document.querySelector("form .field i");
const eyePass = document.querySelector("form .field .eye");

eyeBtn.addEventListener("click", (eo) => {
    eo.preventDefault();
    if(eyePass.type == "password"){
        eyePass.type = "text";
        eyeBtn.classList.add("active")
    }else{
        eyePass.type = "password";
        eyeBtn.classList.remove("active")
    }
})

