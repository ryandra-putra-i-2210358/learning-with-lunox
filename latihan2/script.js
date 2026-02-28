const body = document.getElementsByTagName('body')[0];
const h1 = document.createElement('h1');
const h1Text = document.createTextNode('Halooo');
h1.setAttribute('class', 'inner')
h1.appendChild(h1Text);
body.appendChild(h1);

