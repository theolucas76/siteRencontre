var btnArray = document.querySelectorAll('#btnLike');
console.log(btnArray);
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