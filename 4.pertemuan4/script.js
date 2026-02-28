for(let i = 0; i <= 3; i++){
    const createH2System = document.createElement('p');
    const createH2SystemText = document.createTextNode('Test');
    createH2System.setAttribute('class', 'coba')
    createH2System.appendChild(createH2SystemText);
    document.body.appendChild(createH2System);
}
const systemH2Client = document.querySelectorAll('.coba');
systemH2Client.forEach((element) => {
    element.addEventListener('click', () => {
        const bodyInner = document.querySelector('body');
        const outputSystem =  bodyInner.classList.toggle('ubah');
        if(outputSystem === true){
            const inter = setInterval(() => {
                document.body.style.backgroundColor = 'yellow';
                document.body.style.color = 'violet';
            },1000)
        }else{
            const inter = setInterval(() => {
                document.body.style.backgroundColor = 'violet'
                document.body.style.color = 'yellow';
            },1000)
            clear = clearInterval();
            const clear = inter;
        }
    })
    const h1 = document.querySelectorAll('h1');
    h1.forEach((element) => {
        element.addEventListener('click', () => {
            setTimeout(() =>{
                alert('ok');
    
            },1000)
        })
    })
})

