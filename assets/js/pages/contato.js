loadComponents('./assets/js/components/nav.js');
loadComponents('./assets/js/components/breadcrumb.js');

let contactForm = document.querySelector('#frmContato');

contactForm.addEventListener('submit', e => {
    let formInputs = contactForm.querySelectorAll('input, textarea');
    let formData = {};

    formInputs.forEach(el => {
        formData[el.getAttribute('name')] = el.value;
        el.setAttribute('disabled', true)
    });

    let formSubmit = contactForm.querySelector('#frmEnviar');
    formSubmit.value = "Enviando dados...";


    setTimeout(() => {
        console.log(formInputs);
        formInputs.forEach(el => el.removeAttribute('disabled'));
        formSubmit.value = "Enviar";
        contactForm.reset();
    }, 1000);

    e.preventDefault();
});