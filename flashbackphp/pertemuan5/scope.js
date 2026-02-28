
let a = 1; // global scope / window scope

function test(){
    let b = 2;
    // console.log(a); // bisa askes vairabel global;
    console.log(b); 
}
test();
// console.log(b); // ngak bisa akses nilai di dalam function

console.log("=================================================")

var angka = 1;

function tes(){
    
    // name conflik tapi tetep hasilnya kalau variabel sama 1
    let angka = 2;
    // console.log(angka);
    console.log(angka); //gak bisa akses keluar karena name konflik , 
    // jadi hanya di dalam function saja yang bisa
    // KECUALIIIIII....
    console.log(window.angka);
    // ini bisa tapi harus pakai var
    
}
tes();

console.log("=================================================")

let b = 1;

function test2 (){
    // let b;
    b = 3;
}
test2()
console.log(b); // bisa akses varaibel di dalam function asalkan gak ada var let const
//  function akan ngintif keluar yang b yang di luar nya di timpa sama di dalam function

console.log("=================================================")

// ini sama aja kaya nambahahin var hati hati ini jadi mengorti scope
// kalau mau taro var let const di dalanm function(lokal)
// dan jika ingin seperti ini juka biar nilainya lokal pakai "use strict" di baris 1 code

function lokal(){
    c = 4;
}
lokal()
console.log(c);

console.log("=================================================")
let d = 1 
function test3(d){ // parameter nilai bakal jadi nilai lokal untuk function nya sendiri
    // jadi varibel global di abaikan
    console.log(d)
    
}
test3(1);
console.log(d)


console.log("=================================================")

let e = 5  // ini vairabel global
function test3(e){  // ini jadi variabel lokal
    
    console.log(e) // ini jadi varaibel lokal
    
}
test3(e); // ini jadi variabel global
console.log(e) // ini jadi variabel global


function angkaFunction(angka1, angka2){
    let a = angka1;
    let b = angka2;

    if(a > 10 && a % 2 === 0) {
        b += 20;
        console.log(`Benar + ${b} nilai untuk b` );
    }else {
        b -= 20;
        console.log(`Salah - ${b} nilai untuk b`);
    }
    if(b > 10 && b % 2 === 1){
        a += 20;
        console.log(`Benar + ${a} nilai untuk a`);
    }else{
        a -= 20;
        console.log(`Salah - ${a} nilai untuk a`);
    }
    return [angka1, angka2];
}


let total = angkaFunction(8, 3);
console.log('hasil', total);

const functionAsli = (number1, number2) => {
    let functionLuar = angkaFunction(number1, number2);
    if(functionLuar[0] % 2 === 0 && functionLuar[1] % 2 === 0){
        return 'Bolehhh Genappppp';
    }else if(functionLuar[0] % 2 === 1 && functionLuar[1] % 2 === 1) {
        return 'Bolehhh Ganjilll';
    }else{
        return "Beda coy";
    }
}
console.log(functionAsli(3,1));












