loadComponents('./assets/js/components/nav.js');
loadComponents('./assets/js/components/breadcrumb.js');

let contactForm = document.querySelector('#frmContato');

contactForm.addEventListener('submit', (e) => {
    e.preventDefault();

    let formInputs = contactForm.querySelectorAll('input, textarea');
    formInputs.forEach(el => el.setAttribute('disabled', true));

    let formSubmit = contactForm.querySelector('#frmEnviar');
    formSubmit.value = "Enviando dados...";

    let formData = new FormData(contactForm);
    console.log(formData);

    fetch('sistema/enviar.php')
        .then(response => response.json())
        .then(data => console.log(data));

    formInputs.forEach(el => el.setAttribute('disabled', false));
});