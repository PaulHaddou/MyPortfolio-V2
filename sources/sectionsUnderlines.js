let sectionsJS = document.querySelectorAll('.navbar-sections a');
let spanJS = document.querySelectorAll('.navbar-sections span');

for (var i = 0; i < sectionsJS.length; i++) {
    sectionsJS[i].addEventListener( 'mouseover', () =>
    {``
        console.log('navElements[i]: ', spanJS[i].clientWidth);
        spanJS.style.opacity = "0";
        console.log("pute");
    })
};


