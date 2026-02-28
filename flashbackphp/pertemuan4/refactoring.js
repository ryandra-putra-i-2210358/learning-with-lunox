function nambahJumlah (a, b) {
    let valueA;
    let valueB;
    let total;

    valueA = a * a * a;
    valueB = b * b * b;

    total = valueA + valueB;
    return total;
}


console.log(nambahJumlah(3,1));

function refactoring (a, b){

    return a**3 + b**3;

    
}
console.log(refactoring(2,1));

const cekGanjilGenap = (b) => {
    let nilai = b;
    if(nilai % 2 === 0){
        return "Genap"
    }else{
        return "Ganjil"
    }
}

const cekGanjilGenapRefactoring = (b) => {
    if(b % 2 === 0){
        return "Genap";
    }else{
        return "Ganjil"
    }
}
console.log(cekGanjilGenap(2));
console.log(cekGanjilGenapRefactoring(2));


const cekAjaYa = (a) =>{
    return a < 10 ? `nilai ${a} lebih kecil dari 10` : `nilai ${a} lebih besar dari 10`;
}
console.log(cekAjaYa(41));













