var btnArray = document.querySelectorAll('#btnLike');
btnArray.forEach(element => {
    var bool= false;
    element.addEventListener('click', function () {
            if(bool == false){ 
                element.innerHTML = "Liked ❤";
                bool= true;
            }else{
                element.innerHTML = "Like ♡";
                bool= false;
            }
            
        }
    )
    }
);

function changeView(){
    console.log("ké pasa");
    document.getElementById('gradient-bg').style.display = "none";
    document.getElementById('background').style.display ="block";
}