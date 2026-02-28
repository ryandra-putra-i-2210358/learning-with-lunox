// jika argument lebih banyak nilai nya dari parameter makan argun yang kelbihany akan di abaikan
// jika parameter lebih banyak nilai dari argument maka parameter yang lebih itu di kasih undifined

function tambah(a, b){
    return a + b;
}
function kali(a, b){
    return a * b
}

let a = 10;
let b = 20;
let hasil = tambah(a,b);

console.log(tambah(2, 3));
console.log(hasil);

let angka1 = 30;
let angka2 = 20;
let hasil2 = tambah(angka1*2, angka2*2);
console.log(hasil2);


let hasil3 = kali(tambah(3, 2), tambah(angka1*2, angka2*2));
console.log(hasil3);

function argumentTest(){
    return arguments;
}
let coba = argumentTest(1,3,13,4,4, "Test", true);
console.log(coba);



// kalau mau nge loop index array mening dari 0
// kalau selain dari itu mening dari 1

function tambahTampaParameter(){
    let hasil = 0;
    for(let i = 0; i < arguments.length; i++){
        hasil += arguments[i];
        //masuk lagi ke [i] soalnya nilai nya ada di dalama array i argument
    }
    return hasil;
}

console.log(tambahTampaParameter(3,2,1,4))

