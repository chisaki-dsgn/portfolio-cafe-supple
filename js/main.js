// スマホ版ヘッダーのナビゲーション表示

const subMemu = document.querySelector('.js-header-nav');
let lastScrollY = window.scrollY;

window.addEventListener('scroll',()=>{
    const currentScrollY = window.scrollY;
    if(currentScrollY > lastScrollY && currentScrollY > 100){
        subMemu.classList.add('is-hidden');
    }else if(currentScrollY < lastScrollY){
        subMemu.classList.remove('is-hidden');
    }
    lastScrollY = currentScrollY;
});