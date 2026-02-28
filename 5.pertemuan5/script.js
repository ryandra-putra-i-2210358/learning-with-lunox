const allUl = document.querySelectorAll('ul');
allUl.forEach((element, index) => {
    element.addEventListener('click', () =>{
        if(index === 0){
            alert('INI KE 0');
        }else if(index === 1) {
            alert('ini ke 1');
        }else {
            alert('ini ke 2');
        }
    })
});

const h1 = document.querySelectorAll('h1');
h1.forEach((element, index) => {
    element.addEventListener('click', () => {
        if(index === 0){
            alert('Nice');
        }else{
            alert('good');
        }
    })
})
const init = () => {
    const btn = document.getElementById('myButton');
    const handleClick = () => {
        alert('tombol di klick')
    }
    btn.addEventListener('click', handleClick);
}
window.onload = init;

let array = [2,3,4,1,3,];
array.push(2);

console.log(array);

objectApaAja = {
    nama: "Ryandra",
    kelas : "Reguler",
    lulus : true,
    jurusan : "Ilmu Komputer",
    sapa: function(){
        for(let i = 0; i <= 100; i++ ){
            console.log(`${i+1} nama saya ${objectApaAja.nama} saya kelas ${objectApaAja.kelas} saya insyallah bakal lulus ${objectApaAja.lulus}, sebagai gelar S1 ${objectApaAja.jurusan}`);
        }
    }
}
objectApaAja.sapa();





