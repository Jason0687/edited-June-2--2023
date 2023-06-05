document.querySelector(".loginbtn").addEventListener("click",function(){
    document.querySelector("#login-form").classList.add("active");
});
document.querySelector(".close-btn").addEventListener("click",function(){
    document.querySelector("#login-form").classList.remove("active");
});


