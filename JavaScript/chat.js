const form = document.querySelector(".typing-area");
const inputField = document.querySelector(".input-field");
const sendBtn = document.querySelector("button");
const chatBox = document.querySelector(".chat-box");


sendBtn.addEventListener("click", (eo) => {
    eo.preventDefault();
         // let's start Ajax
    let xhr = new XMLHttpRequest(); // create XMLHttpRequest XML  object
    xhr.open("POST", "php/insert-chat.php", true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                inputField.value = "";
                scrollToBottom();
            }
        }
    }
    // we have to send the form data throuth ajax to php
    let formData =new FormData(form); // creating new FormData object
    xhr.send(formData); // sending the form data to php;
})


chatBox.onmouseenter = () => {
    chatBox.classList.add("active");
}

chatBox.onmouseenter = () => {
    chatBox.classList.remove("active");
}



setInterval(() => {
    // let's start Ajax
    let xhr = new XMLHttpRequest(); // create XMLHttpRequest XML  object
    xhr.open("POST", "php/get-chat.php", true);
    xhr.onload = () =>{
        if(xhr.readyState === XMLHttpRequest.DONE){
            if(xhr.status === 200){
                let data = xhr.response;
                chatBox.innerHTML = data;
                if(!chatBox.classList.contains("active")){
                    scrollToBottom();
                }
            }
        }
    }
        // we have to send the form data throuth ajax to php
        let formData =new FormData(form); // creating new FormData object
        xhr.send(formData); // sending the form data to php;
}, 300);


// for scrolling

function scrollToBottom(){
    chatBox.scrollTop = chatBox.scrollHeight;
}