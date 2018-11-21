let touchstartX = 0;
let touchstartY = 0;
let touchendX = 0;
let touchendY = 0;

let sliderItems = document.querySelector('.carousel .items');

let itemControl = document.createElement('div');
itemControl.classList.add('item-control');

sliderItems.prepend(itemControl);
let sliderItem;

initCarousel = () => {
    sliderItem = sliderItems.querySelectorAll('.item');

    let navigation = document.querySelector('.carousel > .navigation');

    sliderItem.forEach((item, index) => {

        item.addEventListener('touchstart', event => {
            touchstartX = event.changedTouches[0].screenX;
            touchstartY = event.changedTouches[0].screenY;
        }, { passive: true });

        item.addEventListener('touchend', event => {
            touchendX = event.changedTouches[0].screenX;
            touchendY = event.changedTouches[0].screenY;
            changeSlide();
        }, { passive: true });

        item.addEventListener('mousedown', event => {
            touchstartX = event.screenX;
            touchstartY = event.screenY;
        }, { passive: true });

        item.addEventListener('mouseup', event => {
            touchendX = event.screenX;
            touchendY = event.screenY;
            changeSlide();
        }, { passive: true });

        let label = document.createElement('label');
        label.classList.add('navigation-item');
        if (index == 0) {
            label.classList.add('active');
        }
        label.setAttribute('data-slide-index', index);

        label.addEventListener('click', () => {
            let labels = document.querySelectorAll('.navigation-item');

            labels.forEach(el => {
                el.classList.remove('active');
            });

            label.classList.add('active');
            itemControl.style.marginLeft = `-${index * 100}%`;
        });

        navigation.appendChild(label);
    });
}

changeSlide = () => {
    let labels = document.querySelectorAll('.navigation-item');
    let activeLabel = document.querySelector('.navigation-item.active');

    let activeIndex = parseInt(activeLabel.getAttribute('data-slide-index'));
    let newIndex = 0;

    if (touchendX < touchstartX) {
        if (activeIndex == sliderItem.length - 1) {
            newIndex = 0;
        } else {
            newIndex = activeIndex + 1;
        }
    }
    if (touchendX > touchstartX) {
        if (activeIndex == 0) {
            newIndex = sliderItem.length - 1;
        } else {
            newIndex = activeIndex - 1;
        }
    }

    labels.forEach((el, index) => {
        el.classList.remove('active');
        if (newIndex == index) {
            el.classList.add('active');
        }
    });

    itemControl.style.marginLeft = `-${newIndex * 100}%`;
}

autoChangeSlide = () => {
    let labels = document.querySelectorAll('.navigation-item');
    let activeLabel = document.querySelector('.navigation-item.active');

    let activeIndex = parseInt(activeLabel.getAttribute('data-slide-index'));
    let newIndex = 0;

    if (activeIndex == sliderItem.length - 1) {
        newIndex = 0;
    } else {
        newIndex = activeIndex + 1;
    }

    labels.forEach((el, index) => {
        el.classList.remove('active');
        if (newIndex == index) {
            el.classList.add('active');
        }
    });

    itemControl.style.marginLeft = `-${newIndex * 100}%`;
}

feedCarousel = () => {
    let data = [
        {
            image: './assets/img/banner-home-1-min.jpg',
            title: 'Promoção corte de cabelo',
            content: 'Aqui você tem promoção no corte de cabelo, confira nossos serviços',
            button: {
                text: 'Acessar',
                link: './servicos.html'
            }
        },
        {
            image: './assets/img/contato-banner.jfif',
            title: 'Agende seu horário',
            content: 'Faça o agendamento através do nosso formulário de contato',
            button: {
                text: 'Acessar',
                link: './servicos.html'
            }
        }
    ];

    data.forEach(el => {
        addCarouselItem(el);
    });
}

addCarouselItem = (el) => {
    let container = document.createElement('div');
    container.classList.add('item');
    container.style.backgroundImage = `radial-gradient(rgba(255, 255, 255, .5), rgba(255, 255, 255, 0)), url('${el.image}')`;

    let title = document.createElement('h2');
    title.classList.add('slide-title');
    title.appendChild(document.createTextNode(el.title));
    container.appendChild(title);

    let content = document.createElement('p');
    content.classList.add('slide-content');
    content.appendChild(document.createTextNode(el.content));
    container.appendChild(content);

    let button = document.createElement('a');
    button.classList.add('btn', 'slide-button');
    button.setAttribute('href', el.button.link);
    button.appendChild(document.createTextNode(el.button.text));
    container.appendChild(button);

    sliderItems.appendChild(container);
}

feedCarousel();
initCarousel();