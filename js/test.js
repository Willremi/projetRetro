var elt = document.getElementById('annee50');
var elt1 = document.getElementById('annee60');
var typewriter = new FontFace('Typewriter', 'url(../fonts/jmh_typewriter_dry/Typewriter-Thin.otf)');
var alba = new FontFace('alba', 'url(../fonts/alba/alba.ttf)');

typewriter.load().then(function(loaded_face) {
    document.fonts.add(loaded_face);
}).catch(function(error) {

});

alba.load().then(function(loaded_face) {
    document.fonts.add(loaded_face);
}).catch(function(error) {

});
 
elt.style.fontFamily = "Typewriter";
elt1.style.fontFamily = "alba";

// ----------------------------------------
var slides = [
    "<div id='slide1'>ma première photo<img src='../img/incorrup2.jpg'></div>", 
    "<div id='slide2'>ma deuxième photo<img src='../img/incorrup2.jpg'></div>", 
    "<div id='slide3'>ma troisième photo<img src='../img/incorrup3.jpg'></div>",  
    "<div id='slide4'>ma quatrième photo<img src='../img/incorrup4.jpg'></div>",  
];

var currentSlide = 0;
var numberOfSlides = slides.length-1;

window.addEventListener("load", loader, false);

function loader () {
    changeImage();
}

function changeImage() {
    console.log("Fonction changeImage");
    if(currentSlide > numberOfSlides) {
        currentSlide = 0;
    }
    
    document.getElementById("carousel").innerHTML = slides[currentSlide];

    console.log('Affichage de la photo' + currentSlide + " sur" + numberOfSlides);
    currentSlide++;

    setTimeout(changeImage, 20000);
    
}
