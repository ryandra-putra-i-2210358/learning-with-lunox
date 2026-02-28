const h1 = document.querySelector('.hah');
h1.addEventListener('click',()=>{
    for(let i = 0; i<=3; i++){
        alert('ok');
    }
})

const ineerSystem = document.querySelector('.batas');
const body = document.querySelector('body');
ineerSystem.addEventListener('click', (event) => {
    const hasil = body.classList.toggle('ubah');
    if(hasil === true){
        event.target.parentElement.style.backgroundColor = 'violet';
    }else{
        event.target.parentElement.style.backgroundColor = 'yellow';

    }
})


let i = 19;

if(i < 20){
    console.log('benar');
}else if(i == 20){
    console.log('sama');
}else {
    console.log('salah');
}