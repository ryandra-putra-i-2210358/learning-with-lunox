const angka = (angkas) => {
    if(angkas === 1){
        return Math.random(Math.floor() * 255 + 1);
    }
}
const book = document.querySelectorAll('img');
book.forEach((element, index) => {
    element.addEventListener('click', () => {
        alert(`ini gambar buku ke -${index + angka(1)}`);
    })
});