let nav = document.getElementsByClassName('center-nav');
let main = document.getElementsByTagName('main');
let footer = document.getElementsByTagName('footer');

// console.log(nav);
// console.log(main);

window.addEventListener('load', () => {
    // console.log(nav, main);
    let TL = gsap.timeline({repeat: 0});

    TL.to(nav, 1, {opacity: 1, duration: 1}, 1)
    TL.to(main, 2, {opacity: 1, duration: 1}, 2)
    TL.to(footer, 3, {opacity: 1, duration: 1}, 3);

    TL.play()
});