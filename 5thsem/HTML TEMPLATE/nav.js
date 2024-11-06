const navPage = window.location.pathname;
const navLinks = document.querySelectorAll('nav a').
forEach(link =>{
    if(link.href.includes(`${navPage}`)){
        link.classList.add('active');
    }
})