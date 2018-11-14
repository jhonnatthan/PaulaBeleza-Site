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
        }, false);

        item.addEventListener('touchend', event => {
            touchendX = event.changedTouches[0].screenX;
            touchendY = event.changedTouches[0].screenY;
            changeSlide();
        }, false);

        item.addEventListener('mousedown', event => {
            touchstartX = event.screenX;
            touchstartY = event.screenY;
        }, false);

        item.addEventListener('mouseup', event => {
            touchendX = event.screenX;
            touchendY = event.screenY;
            changeSlide();
        }, false);

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
            image: 'https://images.unsplash.com/photo-1526045478516-99145907023c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd3ea6907dc7de1927c420a37a9db02f&auto=format&fit=crop&w=1050&q=80',
            title: 'Titulo Slider',
            content: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident ad hic atque unde magnam saepe itaque voluptates ullam, ut quae?',
            button: {
                text: 'Acessar',
                link: '#'
            }
        },
        {
            image: 'https://images.unsplash.com/photo-1524860155154-c904628c418c?ixlib=rb-0.3.5&s=4c532f7696f9ad2a843c8b4c8d5f2b35&auto=format&fit=crop&w=1051&q=80',
            title: 'Titulo Slider',
            content: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident ad hic atque unde magnam saepe itaque voluptates ullam, ut quae?',
            button: {
                text: 'Acessar',
                link: '#'
            }
        },
        {
            image: 'https://images.unsplash.com/photo-1526045478516-99145907023c?ixlib=rb-0.3.5&ixid=eyJhcHBfaWQiOjEyMDd9&s=bd3ea6907dc7de1927c420a37a9db02f&auto=format&fit=crop&w=1050&q=80',
            title: 'Titulo Slider',
            content: 'Lorem ipsum dolor sit amet consectetur, adipisicing elit. Provident ad hic atque unde magnam saepe itaque voluptates ullam, ut quae?',
            button: {
                text: 'Acessar',
                link: '#'
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
    container.style.backgroundImage = `linear-gradient(to top, rgba(255, 255, 255, .7), rgba(255, 255, 255, 0)), url('${el.image}')`;

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