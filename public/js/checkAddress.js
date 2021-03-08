const check = document.querySelector('#checkbox');
const alamat = document.querySelector('.check-ktp');
const contain =  document.querySelector('.dp__container__wrap__form');
const all_contain = document.querySelector('.dp__container');


myFunc = () => {
    if (check.checked === false && screen.width > 1280) {
        alamat.classList.remove("mytoggle-display");
        contain.style.height = '2460px'
        all_contain.style.height = '3260px'
    } else if (check.checked === true && screen.width > 1280) {
        alamat.classList.add("mytoggle-display");
        contain.classList;
        contain.style.height = '2100px'
        all_contain.style.height = '2900px'
    } else if (check.checked === false && screen.width > 620 && screen.width <= 1280) {
        alamat.classList.remove("mytoggle-display");
        contain.style.height = '1230px'
        all_contain.style.height = '1730px'
    } else if (check.checked === true && screen.width > 620 && screen.width <= 1280) {
        alamat.classList.add("mytoggle-display");
        contain.style.height = '1050px'
        all_contain.style.height = '1550px'
    } else if (check.checked === false && screen.width <= 620) {
        alamat.classList.remove("mytoggle-display");
        contain.style.height = '1150px'
        all_contain.style.height = '1550px'
    } else if (check.checked === true && screen.width <= 620) {
        alamat.classList.add("mytoggle-display");
        contain.style.height = '970px'
        all_contain.style.height = '1370px'
    }
}