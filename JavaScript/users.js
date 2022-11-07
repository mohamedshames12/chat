const usersList = document.querySelector(".users .users-list");

// for search only
const searchBar = document.querySelector(".users .search input");






setInterval(() => {
        // let's start Ajax
        let xhr = new XMLHttpRequest(); // create XMLHttpRequest XML  object
        xhr.open("GET", "php/users.php", true);
        xhr.onload = () =>{
            if(xhr.readyState === XMLHttpRequest.DONE){
                if(xhr.status === 200){
                    let data = xhr.response;
                    if(!searchBar.classList.contains("active")){
                        usersList.innerHTML = data
                    }
                }
            }
        }
        xhr.send();
}, 500);