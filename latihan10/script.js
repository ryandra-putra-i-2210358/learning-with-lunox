const mahasiswa = document.querySelectorAll('.mahasiswa');
mahasiswa.forEach((element, index) => {
    element.addEventListener('click', () => {
        if(index === 0){
            alert(`ini element ke-${index}`);
        }else if(index === 1){
            alert(`ini element ke ${index}`);
        }else if(index === 3){
            alert(`ini element ke-${index}`);
        }else {
            alert(`ini element ke-${index}`);
        }
    })
})