let btn = document.getElementById('btn');

console.log(btn);
function HeartToggle(){
    if(btn.classList.contains("far")){
        btn.classList.remove("far");
        btn.classList.add("fas");
    }
    else {
        btn.classList.remove("fas");
        btn.classList.add("far");
    }
}
