
let all = document.querySelector('.all');
let hor = document.querySelector('.hor');


let bol = document.querySelectorAll('.bol')
let barr = document.querySelectorAll('.barr')

setInterval(() => {
    let n = 0
    if (all.getAttribute('class') == 'all div-sasa' && hor.getAttribute('class')=='hor div-sasa1') {
        all.classList.remove('div-sasa');
        hor.classList.remove('div-sasa1')

        barr.forEach(element => {
            element.classList.remove('barr1')
            bol[n].classList.remove('bol1')
            n++
        });

    }
    else{
        all.classList.add('div-sasa')
        hor.classList.add('div-sasa1')

        barr.forEach(element => {
            element.classList.add('barr1')
            bol[n].classList.add('bol1')
            n++
        });
    }

}, 1000);
