const liInnnerCombination = document.querySelectorAll('li');
liInnnerCombination.forEach((element) => {
    element.addEventListener('click', function() {
        const body = document.querySelector('body');
        const hasil = body.classList.toggle('ubah');
        if(hasil === true){
            const button = document.createElement('button');
            const buttonText = document.createTextNode('click');
            button.setAttribute('onclick', 'buttonTriger()');
            button.appendChild(buttonText);
            document.body.appendChild(button);
        }else{
            document.body.style.backgroundColor = 'yellow';
        }
    })
})
const buttonTriger = () => {
    const mahasiswa = document.querySelector('.data-mahasiswa');
    mahasiswa.style.marginTop = "30px"
    const triggerActive = mahasiswa.classList.toggle('inner');
    if(triggerActive === true){
        mahasiswa.style.backgroundColor = 'violet';
        mahasiswa.style.color = 'yellow';
        mahasiswa.style.border = "2px solid yellow"
    }else {
        mahasiswa.style.backgroundColor = 'yellow';
        mahasiswa.style.color = 'violet';
        mahasiswa.style.border = "2px solid violet"

    }
}
for(let i = 0; i <= 3; i++ ) {
    const documentNew = document.createElement('button');
    const documentNewText = document.createTextNode('Handle');
    documentNew.appendChild(documentNewText);
    document.body.appendChild(documentNew);
    if(i == 0){
        documentNew.setAttribute('class', 'innerHandle')
        documentNew.setAttribute('onclick', 'systemSwitch()');
    }else if(i == 1){
        documentNew.setAttribute('class', 'innerHandle2')
    }else{
        documentNew.setAttribute('class', 'innerHandle2')
    }

}
const systemSwitch = () => {
  let fruitType = prompt('Pilih buah Oranges, Apples, Bananas, Cherries, Mangoes, Papayas ');
  let result;
  switch (fruitType) {
    case "Oranges":
      console.log("Apples are $0.32 a pound.");
      result = 1;
      break;
    case "Apples":
      console.log("Apples are $0.32 a pound.");
      result = 2;
      break;
    case "Bananas":
      console.log("Bananas are $0.48 a pound.");
      result = 3;
      break;
    case "Cherries":
      result = 4;
      console.log("Cherries are $3.00 a pound.");
      break;
    case "Mangoes":
      result = 5;
      console.log("Mangoes are $0.56 a pound.");
      break;
    case "Papayas":
      result = 6;
      console.log("Papayas are $2.79 a pound.");
      break;
    default:
      console.log(`Sorry, we are out of ${fruitType}.`);
      result = 7;
  }
  return result;

}

const Apples =  document.createElement('button');
const apples = document.createTextNode('haii');
Apples.setAttribute('class', 'setClass');
Apples.appendChild(apples);
document.body.appendChild(Apples);

const innerButtonSystem = document.querySelector('.setClass');
innerButtonSystem.addEventListener('click', function(){
  const getFunctionSwitch = systemSwitch();
  if(getFunctionSwitch === 1){
    console.log('gass');
  }else if(getFunctionSwitch === 2){
    const body = document.querySelector('body');
    for(let i = 0; i <= 3; i++){
      const createTable = document.createElement('button');
      const createTableInner = document.createTextNode('GASS');
      createTable.appendChild(createTableInner);
      body.appendChild(createTable);
    }
  }
})










