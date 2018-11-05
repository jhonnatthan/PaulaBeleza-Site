loadComponents = (url, async, defer) => {
    let body = document.querySelector('body');
    let script = document.createElement('script');

    script.src = url;

    body.appendChild(script);
}