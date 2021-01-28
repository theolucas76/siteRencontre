var btnArray = document.querySelectorAll('#btn');
btnArray.forEach(element => {
    element.addEventListener('click', function () { 
        element.innerHTML
        document.getElementById('Liked').style.display = "block";
        }
    )
    }
);