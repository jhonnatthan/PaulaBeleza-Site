let breadSection = document.querySelector('.breadcrumb');
let pageTitle = document.title.split('-')[1].trim();

let background = breadSection.getAttribute('data-background');
breadSection.removeAttribute('data-background');
let breadBg = 'linear-gradient(to top, rgba(28, 24, 23, 1), rgba(28, 24, 23, 0)),';
breadBg += `url(${background})`;

let path = document.createElement('p');
path.classList.add('path');
path.appendChild(document.createTextNode(`Home > ${pageTitle}`))

let title = document.createElement('h2');
title.classList.add('title');
title.appendChild(document.createTextNode(pageTitle))

breadSection.style.backgroundImage = breadBg;
breadSection.appendChild(path);
breadSection.appendChild(title);