let toggle=document.getElementById("container");
toggle.addEventListener("mouseover",togglemode);
function togglemode(){
    document.body.classList.toggle('changemode');
}
let number=document.getElementById("btn");
let counter=0;
let nameInput = document.getElementById("text"); 
let passInput = document.getElementById("password");
number.addEventListener("click",function(e){
    counter++
    document.getElementById("number").textContent="Number of times the button was clicked:"+counter
})
document.addEventListener("keydown",function(e){
    if(e.key==="Enter"){
        alert("Enter key was pressed")
    }
})
