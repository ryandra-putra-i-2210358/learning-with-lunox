const bulet = document.querySelector('.bulet');
bulet.style.transition = '.2ms';
const body = document.querySelector('body');
const containerButton = document.querySelector('.bungkus');

containerButton.addEventListener('click', () => {
    const modeBackground = body.classList.toggle('change');
    if (modeBackground === true) {
        body.style.backgroundColor = 'blueviolet';
        bulet.style.transform = "translateX(50px)"; 
    } else {
        body.style.backgroundColor = 'yellow';
        bulet.style.transform = "translateX(0px)"; 
    }
});

const buttonCenter = document.createElement('button');
const buttonCenterText = document.createTextNode('click');
buttonCenter.appendChild(buttonCenterText);
buttonCenter.setAttribute('onclick', 'setProtocol()');
body.appendChild(buttonCenter);

const setProtocol = () => {
    let inputThisId = parseInt(prompt('Masukan id Anda'));
    let inputThisPassword = parseInt(prompt('Masukan Password Anda'));
    let setProtokolId = 123;
    let setProtokolPassword = 321;

    if(inputThisId === setProtokolId && inputThisPassword === setProtokolPassword){
        const createInput = document.createElement('input');
        createInput.setAttribute('type', 'text');
        createInput.setAttribute('id', 'todo-input');
        createInput.setAttribute('placeholder', 'Tambah Tugass');

        const createButton = document.createElement('button');
        const createButtonText = document.createTextNode('Tambah');
        createButton.setAttribute('id', 'add-button');
        createButton.appendChild(createButtonText);

        const ul = document.createElement('ul');
        ul.setAttribute('id', 'todo-list');

        body.appendChild(createInput);
        body.appendChild(createButton);
        body.appendChild(ul);


        const input = document.getElementById('todo-input');
        const button = document.getElementById('add-button');
        const list = document.getElementById('todo-list');

        button.addEventListener('click', () => {
            const text = input.value.trim();
            if(text === ''){
                alert('Masukan Seuatu dulu');
                return;
            }
            
            const li = document.createElement('li');
            li.textContent = text;

            const deleteBtn = document.createElement('button');
            deleteBtn.textContent = 'hapus';
            deleteBtn.style.marginLeft = '10px'
            deleteBtn.style.backgroundColor = 'red';
            deleteBtn.style.color = 'white';

            deleteBtn.addEventListener('click', () => {
                list.removeChild(li);
            });

            li.appendChild(deleteBtn);
            list.appendChild(li);
            input.value = '';
        });

    }else {
        alert('ID atau Password Salah');
    }
} 