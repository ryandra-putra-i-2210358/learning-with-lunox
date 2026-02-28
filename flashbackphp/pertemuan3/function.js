let v = 8;
let z = 3;
let volumev;
let volumez;
let t;

volumev = v * v * v;
volumez = z * z * z;
t = volumez + volumev;
console.log(t);

const jumlahVolumeKubus = (a, b) => {
    let volume1 = a * a * a;
    let volume2 = b * b * b;
    let total;
    total = volume1 + volume2;
    console.log(total);
    return total; 
    // Untuk ngasih tau ke js bahwa ini lah hasilnya
}
const cekGanjilGenap = (b) => {
    let nilai = b;
    if(nilai % 2 === 0){
        return "Genap"
    }else{
        return "Ganjil"
    }
} 
console.log(cekGanjilGenap(jumlahVolumeKubus(5,1)));
const factorial = (n) => {
    if(n < 0) return undefined;
    if(n === 0) return 1;
    return n * factorial(n - 1);
}
let hasil = (factorial(jumlahVolumeKubus(1,-1)));
if(hasil % 2 === 0){
    console.log(`genap = ${hasil}`);
}else{
    console.log(`ganjil = ${hasil}`);
}
const namaSaya = (a) => {
    let nama = a;
    let nilai = jumlahVolumeKubus(1,3) + jumlahVolumeKubus(2,1);
    if(nilai < 20){
        console.log("C");
    }else if(nilai < 60){
        console.log("B");
    }else {
        console.log("A");
    }

    return `nama saya adalah ${nama} nomer ${nilai}`;
}
console.log(namaSaya("Ryandra"));



