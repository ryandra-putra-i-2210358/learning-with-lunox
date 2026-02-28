const button = document.querySelector('.button');
const bodyAll = document.querySelector('body');
button.addEventListener('click', () => {
    const input = document.querySelector('input[name="nama"]');
    const inputToggle = input.classList.toggle('ubah');
    if(inputToggle === true){
        input.style.display ='block';
        bodyAll.style.backgroundColor = 'yellow';
        button.style.backgroundColor = 'violet';
    }else{
        input.style.display = 'none';
        bodyAll.style.backgroundColor = 'violet';
        button.style.backgroundColor = 'yellow';
    }
})

const body = document.body;
const buttonNew = document.createElement('button');
const buttonNewText = document.createTextNode('test');
buttonNew.setAttribute('class', 'hai')
buttonNew.setAttribute('onclick', 'sumonInput()');
body.appendChild(buttonNew);

const buttonSummon = document.querySelector('.hai');

setInterval(() => {
    buttonSummon.style.backgroundColor = 'deeppink';
},1000);

const sumonInput = () => {
    for(let i = 0; i <= 2; i++){
        const createInput = document.createElement('input');
        createInput.setAttribute('type', 'range');
        createInput.setAttribute('max', 255);
        createInput.setAttribute('min', 0);
        createInput.style.display = 'block';

        if(i === 0){
            const createDiv = document.createElement('div');
            createDiv.style.backgroundColor = 'red';
            createDiv.style.width = '30px';
            createDiv.style.height = '30px';
            body.appendChild(createDiv);
        
            createInput.setAttribute('name', 'sMerah');
        }else if (i === 1){

            const createDiv = document.createElement('div');
            createDiv.style.backgroundColor = 'green';
            createDiv.style.width = '30px';
            createDiv.style.height = '30px';
            body.appendChild(createDiv);

            createInput.setAttribute('name', 'sHijau');
        }else {
            const createDiv = document.createElement('div');
            createDiv.style.backgroundColor = 'blue';
            createDiv.style.width = '30px';
            createDiv.style.height = '30px';
            body.appendChild(createDiv);

            createInput.setAttribute('name', 'sBiru');
        }
        
        body.appendChild(createInput);

    }

    const sMerah = document.querySelector('input[name=sMerah]');
    const sHijau = document.querySelector('input[name=sHijau]');
    const sBiru = document.querySelector('input[name=sBiru]');

    sMerah.addEventListener('input', (merah) => {
        const r = sMerah.value;
        const g = sHijau.value;
        const b =  sBiru.value;
        setInterval(() =>{
            merah.target.parentElement.style.backgroundColor = `rgb(${r}, ${g}, ${b})`;
        },1000)
    });
    
    sHijau.addEventListener('input', (hijau) => {
        const r = sMerah.value;
        const g = sHijau.value;
        const b = sBiru.value;
        setInterval(() => {
            hijau.target.parentElement.style.backgroundColor = `rgb(${r}, ${g}, ${b})`;
        },1000)
    });
    
    sBiru.addEventListener('input', (biru) => {
        const r = sMerah.value;
        const g = sHijau.value;
        const b = sBiru.value;
        setInterval(() => {
            biru.target.parentElement.style.backgroundColor = `rgb(${r}, ${g}, ${b})`;
        },1000)
    })
 
}








