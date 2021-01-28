var btnArray = document.querySelectorAll('#btnLike');
btnArray.forEach(element => {
    var bool= false;
    element.addEventListener('click', function () {
            if(bool == false){ 
                element.innerHTML = "Liked";
                bool= true;
            }else{
                element.innerHTML = "Like";
                bool= false;
            }
            
        }
    )
    }
);