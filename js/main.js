
const top_btn = document.getElementById('arrow_top');

function ButtonScroll(){
    top_btn.style.display = (document.body.scrollTop > 0 || document.documentElement.scrollTop > 0) ? 'block' : 'none' ;
}

window.onscroll = function(){
    ButtonScroll();
};

ButtonScroll();
