
let all = document.querySelector('.all');
let hor = document.querySelector('.hor');
setInterval(() => {
if (all.getAttribute('class') == 'all div-sasa' && hor.getAttribute('class')=='hor div-sasa1') {

    all.classList.remove('div-sasa');
    hor.classList.remove('div-sasa1')
}
else{
    all.classList.add('div-sasa')
    hor.classList.add('div-sasa1')
}
}, 1000);