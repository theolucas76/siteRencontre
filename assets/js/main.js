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
    var bool1 = document.getElementById("check1").checked;
    var bool2 = document.getElementById("check2").checked;
    if(bool1 == true && bool2 == true){
        document.getElementById('door').style.display = "none";
        document.getElementById('form').style.display ="block";
    }else{
        document.getElementById('door').style.display = "block";
        document.getElementById('form').style.display ="none";
    }
}
