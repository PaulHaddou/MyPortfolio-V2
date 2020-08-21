let burger = document.querySelector('.burger_spans');
let navbarLinks = document.querySelector('.navbarMobile_links');
let spanBurgerTop = document.querySelector('.burger_spans span:nth-child(1)');
let spanBurgerMid = document.querySelector('.burger_spans span:nth-child(2)');
let spanBurgerBottom = document.querySelector('.burger_spans span:nth-child(3)');
let linkBurgerFirst = document.querySelector('.navbarMobile_links a:nth-child(1)');
let linkBurgerSecond = document.querySelector('.navbarMobile_links a:nth-child(2)');
let linkBurgerThird = document.querySelector('.navbarMobile_links a:nth-child(3)');
let linkBurgerFourth = document.querySelector('.navbarMobile_links a:nth-child(4)');
let click = "none";

burger.addEventListener( 'click', () =>
{
    if (click == "yes") {
        navbarLinks.style.height = "0vh";
        navbarLinks.style.transition = "all 2s ease";
        spanBurgerTop.style.transform = "rotate(0deg) ";
        spanBurgerTop.style.transition = "all 0.5s ease";
        spanBurgerMid.style.opacity = "1";
        spanBurgerMid.style.transition = "all 0.5s ease";
        spanBurgerBottom.style.transform = "rotate(0deg)";
        spanBurgerBottom.style.transition = "all 0.5s ease";
        linkBurgerFirst.style.opacity = "0";
        linkBurgerFirst.style.transition = "all 0.5s ease .6s";
        linkBurgerSecond.style.opacity = "0";
        linkBurgerSecond.style.transition = "all 0.5s ease .4s";
        linkBurgerThird.style.opacity = "0";
        linkBurgerThird.style.transition = "all 0.5s ease .2s";
        linkBurgerFourth.style.opacity = "0";
        linkBurgerFourth.style.transition = "all 0.5s ease 0s";
        click = "none";
    } else {
        navbarLinks.style.height = "85vh";
        navbarLinks.style.transition = "all 2s ease";
        spanBurgerTop.style.transform = "translateX(-5px) rotate(135deg) translateY(-8.5px)";
        spanBurgerTop.style.transition = "all 0.5s ease";
        spanBurgerMid.style.opacity = "0";
        spanBurgerMid.style.transition = "all 0.5s ease";
        spanBurgerBottom.style.transform = "translateX(-5px) rotate(-135deg) translateY(8.5px)";
        spanBurgerBottom.style.transition = "all 0.5s ease";
        linkBurgerFirst.style.opacity = "1";
        linkBurgerFirst.style.transition = "all 0.5s ease 0.1s";
        linkBurgerSecond.style.opacity = "1";
        linkBurgerSecond.style.transition = "all 0.5s ease .3s";
        linkBurgerThird.style.opacity = "1";
        linkBurgerThird.style.transition = "all 0.5s ease .5s";
        linkBurgerFourth.style.opacity = "1";
        linkBurgerFourth.style.transition = "all 0.5s ease .7s";
        click = "yes";        
    }
});