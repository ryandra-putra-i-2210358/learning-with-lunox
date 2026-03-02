// const nav = document.querySelector('nav');
// nav.addEventListener('click', () => {
//     alert('Ini Navbar');
// })

const functionDOM = (items) => {
    const element = document.querySelector(items);
    if(element){
        element.addEventListener('click', () => {
            alert('ini Hidup');
        })
    }else if(!element){
        alert('gak ada element nya bree');
    }
    return element

}
functionDOM('nav');


const links = document.querySelectorAll('nav .navlink a')
links.forEach(el => {
    el.textContent = "Home"
})


