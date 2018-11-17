loadComponents('./assets/js/components/nav.js');
loadComponents('./assets/js/components/breadcrumb.js');

let contactForm = document.querySelector('#frmContato');

contactForm.addEventListener('submit', e => {
    let formInputs = contactForm.querySelectorAll('input, textarea');
    let formData = {};

    formInputs.forEach(el => {
        formData[el.getAttribute('name')] = el.value;
        // el.setAttribute('disabled', true)
    });

    let formSubmit = contactForm.querySelector('#frmEnviar');
    formSubmit.value = "Enviando dados...";

    console.log(formData);

    fetch('./sistema/enviar.php', { method: 'POST', body: formData })
        .then(response => response.json())
        .then(data => console.log(data));

    formInputs.forEach(el => el.setAttribute('disabled', false));
    e.preventDefault();
});