loadComponents = (url) => {
    let body = document.querySelector('body');
    let script = document.createElement('script');
    script.setAttribute('async', true)
    script.src = url;
    body.appendChild(script);
}