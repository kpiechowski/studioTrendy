document.addEventListener('DOMContentLoaded', ()=>{
    document.querySelector('.menu_active').addEventListener('click',()=>{
        document.querySelector('#menu').classList.toggle('active');
    });
});