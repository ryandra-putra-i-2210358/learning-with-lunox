const card = document.querySelectorAll('.card');

card.forEach((element, index) => {
    element.addEventListener('click', ()=> {
        alert(`ini index ke ${index} `);
    })
})