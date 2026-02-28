const yellow = document.querySelectorAll('.kuning');
yellow.forEach((element) => {
    element.addEventListener('click', () => {
        let i = parseInt(prompt('Masukan angka 19, 20, 21 untuk nilai i = 20'));
        const nilaiAsli = 20;
        if(i < nilaiAsli){
            console.log('benar');
            alert(`benar karena nilai yang anda masukan ${i} lebih kecil dari ${nilaiAsli}` );
        }else if(i == nilaiAsli){
            console.log('sama');
            alert(`yang anda masukan ${i} adalah nilai SAMA dengan ${nilaiAsli}`);
        }else {
            console.log('salah');
            alert(`salah karena ${i} lebih besar dari nilai i yaitu ${nilaiAsli}`);
        };
    });
});
