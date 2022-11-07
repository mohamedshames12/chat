const form = document.querySelector(".signup form");
const continueBtn = document.querySelector(".button input");
const errorTxt = document.querySelector(".error-txt");

continueBtn.addEventListener("click", (eo) =>{
    eo.preventDefault();
    // let's start Ajax
    let xhr = new XMLHttpRequest(); // create XMLHttpRequest XML  object
    xhr.open("POST", "php/signup.php", true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                if(data == "successfully"){
                    location.href = "login.php";
                }else{
                    errorTxt.textContent = data;
                    errorTxt.style.display = "block";
                }
            }
        }
    }
    // we have to send the form data throuth ajax to php
    let formData =new FormData(form); // creating new FormData object
    xhr.send(formData); // sending the form data to php;
})