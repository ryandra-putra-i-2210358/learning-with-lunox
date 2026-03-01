const divs = document.querySelectorAll(".container div");
divs.forEach((div, index) => {
    div.addEventListener('click', () => {
        alert(`ini ${index}`)
    })
})