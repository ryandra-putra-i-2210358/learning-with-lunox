const ainnerNavigator = document.querySelectorAll('a');
ainnerNavigator.forEach((element, index) => {
    element.addEventListener('click', () => {
        if(index === 0){
            alert('Home');
        }else if(index === 1){
            alert('About');
        }else if(index === 2){
            alert('Contact')
        }else{
            alert('Carrer')
        }
    })
})

// const createH2 = document.createElement('h2');
// const createH2Text = document.createTextNode('Test');
// createH2.appendChild(createH2Text);
// document.body.appendChild(createH2);






