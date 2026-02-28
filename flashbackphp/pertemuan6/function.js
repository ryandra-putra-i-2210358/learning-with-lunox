const functionInner = (angka) => {
    let a = angka;
    if(typeof a === "string"){
        return "oke"
    }else if(typeof a === "number"){ 
        return a += 30;
    }
    return a;
}
console.log(functionInner('inner'));
console.log(functionInner(123));


const variabelFunction = (nomer) => {
    let hasil = functionInner(0) + nomer;
    console.log(hasil);
    if(hasil < 30){
        return hasil -= 20;
    }else if(hasil === 30){
        return "Binggo";
    }else if(hasil > 30){
        return hasil += 50;
    }

    return hasil;
}
console.log(variabelFunction(30));

const cekNilai = () => {
    let nilaiTotal = variabelFunction(31);
    if(nilaiTotal % 2 === 0 && nilaiTotal > 1){
        return `Genap = ${nilaiTotal}`;
    }else if( nilaiTotal % 2 === 1 && nilaiTotal > 1){
        return `Ganjil = ${nilaiTotal}`;
    }
    return nilaiTotal;
}
console.log(cekNilai());

const arrayFunction = (nilai1, nilai2, nilai3, nilai4, nilai5) => {
    return [nilai1, nilai2, nilai3, nilai4, nilai5];
}
console.log(arrayFunction(2,3,1,5,4).join(" "));

let array = arrayFunction(2,6,7,5,1);
array.forEach((test, index) => {
    console.log(`${test} index ke-${index}`);
})

const verifikasiArray = (array) => {
    let arrayInput = array;
    let array1 = arrayFunction(arrayInput, 3, 1, 2, 4);
    if(array1[0] % 2 == 0 && array1[0]){
        array1.push(array);
    } 
    return array1;
}
console.log(verifikasiArray(3));

let p = 6;
let l = 3;

const luas = (p, l) => {
    return p * l;

}
let hasil  = luas(p,l);
console.log(`hasilnya = ${hasil}`);

const promptNilaiValue = (a, b) => {
    return a * b;
}
// let angka1 = parseInt(prompt('Masukan nilai A'));
// let angka2 = parseInt(prompt('Masukan nilai B'));
console.log(`hasil nya adalah = ${promptNilaiValue(variabelFunction(30), variabelFunction(30))}`);
let array1 = []; 
const functionAsliInner = (m) => {
    array1.push(m);
    console.log(`Berhasil Ditambahkan coy ${m}`);
} 

functionAsliInner(3);
console.log(`array saat ini adalah ${array1}`); // [3]
functionAsliInner(4);
console.log(`array saat ini adalah ${array1}`); // [3, 4]

console.log('===============Rekursif===================');

// sebuah function yang memamgil dirinya sendiri
function tampilAngka(n){
    //base case
    if(n === 0){
        return;
    }
    //base case
    console.log(n);
    return tampilAngka(n-1);
}
tampilAngka(10);
//base case
// kondisi akhir dari rekursif yang menghasilkan nilai

// contoh lain

const faktorial = (n) => {
    // apakah 5 === 0 engak skip
    if(n === 0){
        return 1;
    }
    // langsung ke sini 5 nya terus samapai 0 , 0 mengembalikan nilai 1
    return n * faktorial(n - 1);
}
console.log(faktorial(5));

const faktorialAneh = (n) => {
    if( n === 0){
        return 2;
    }
    return n + faktorialAneh(n - 1)
}
console.log(faktorialAneh(4));

console.log('======= Declaration & Expression ========');

// declration
console.log(tampilNama('Ryandra Dan Lunox 123')); //kenapa bisa gini karena ---> //karena adanya hoisting js
function tampilNama(nama){
    
    return `Halo ${nama}`;
}
console.log(tampilNama('Ryandra Dan Lunox'));

// expresssion

let tampilPesan = function(nama){
    console.log(`halo ${nama}`);
}
tampilPesan('Lunox')
console.log(tampilPesan);

// PILIH YANG MANA ===? SAMA AJA YANG MANA AJA SAMA KOK

const sayyHello = (cuaca) => {
    return `Selamat ${cuaca} admin`;
} 
console.log(sayyHello('PAGI'));

const cekAngka = (n) => (n % 2 === 0) ? 'GENAP' : 'GANJIL';
console.log(cekAngka(2));
console.log(cekAngka(1));


const cekAngka2 = (a) => (a > 0) ? 'Positif' : 'Negatif';
console.log(cekAngka2(2));
console.log(cekAngka2(-3));










