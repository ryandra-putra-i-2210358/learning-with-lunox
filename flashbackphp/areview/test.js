console.log('Start');

const arrayFunctionMantap = (nilai) => {
    let testValueText = nilai;
    let jumlah = testValueText.length;
    if(jumlah > 0){
        console.log(`True nilai nya ${jumlah}`)
    }
    return jumlah;
}
console.log(arrayFunctionMantap('32'));

const jumlahValumeBalok = (angka1, angka2) => {
    return angka1**2 + angka2**2;
}
console.log(jumlahValumeBalok(arrayFunctionMantap('jsdhs'), arrayFunctionMantap('jdfjkdf')));

const kombinasi2Function = (nilaiA, nilaiB) => {
    let hasilA = nilaiA;
    let hasilB = nilaiB;
    hasilA += arrayFunctionMantap('Ryandra'); 
    hasilB += jumlahValumeBalok(arrayFunctionMantap('Ryandra'), arrayFunctionMantap('Lunox')); 

    let total = hasilA + hasilB
    return total ;
    
}
console.log(kombinasi2Function(1,1));

const periksaAngka = (nilai) => {
    let nilaiAngka = nilai;
    if(typeof(nilaiAngka) === "number"){
        if(nilaiAngka % 2 === 0 && nilaiAngka  > 0){
            return `nilai nya genap dan positif ${nilaiAngka}`;
        }else if (nilaiAngka % 2 === 1 && nilaiAngka > 0){
            return `nilai nya ganjil dan positif ${nilaiAngka}`
        }else{
            return 'none';
        }
    }else{
        return `tidak di ketahui = ${nilaiAngka}`;
    }
}
let gas = "sdskdks"
console.log(periksaAngka(jumlahValumeBalok(3, 2)));

let nilai1 = 68;
console.log(nilai1)