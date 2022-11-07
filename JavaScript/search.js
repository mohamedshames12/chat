const searchBar = document.querySelector(".users .search input");
const searchBtn = document.querySelector(".users .search button");
// for users just with a search
const usersList = document.querySelector(".users .users-list");

searchBtn.addEventListener("click", (eo) => {
    eo.preventDefault();
    searchBar.classList.toggle("active");
    searchBtn.classList.toggle("active")
    searchBar.focus();
    searchBar.value = "";
})


// createing a sreachBer ;

searchBar.addEventListener("keyup", (eo) => {
                // this variable 
                let searchTerm = searchBar.value;
                if(searchTerm != ""){
                    searchBar.classList.add("active");
                }else{
                    searchBar.classList.remove("active");
                }
                // let's start Ajax
                let xhr = new XMLHttpRequest(); // create XMLHttpRequest XML  object
                xhr.open("POST", "php/search.php", true);
                xhr.onload = () =>{
                    if(xhr.readyState === XMLHttpRequest.DONE){
                        if(xhr.status === 200){
                            let data = xhr.response;
                            usersList.innerHTML = data;
                        }
                    }
                }
                xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
                xhr.send('searchTerm=' + searchTerm);
})