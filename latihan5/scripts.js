const body = parentElement;
const h1 = document.querySelectorAll('h1');
h1.forEach((element,index) => {
    element.addEventListener('click', (event) => {
        if(index === 0){
            alert('hewan Anjing');
            event.target.body.style.backgroundColor = 'yellow'
        }else if(index === 1){
            alert('Kucing');
            event.target.parentElement.style.backgroundColor = 'violet'
        }else{
            alert('Kelinci');
            event.target.parentElement.style.backgroundColor = 'blue'
        }
    })
})