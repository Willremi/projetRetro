var elt = document.getElementById('annee50');
var jumbotron = document.getElementById('jumbotron');
var tableau = document.getElementsByClassName('table');
var typewriter = new FontFace('Typewriter', 'url(../fonts/jmh_typewriter_dry/Typewriter-Thin.otf)');

typewriter.load().then(function(loaded_face) {
    document.fonts.add(loaded_face);
}).catch(function(error) {

});

var adressUrl = location.href;
adressUrl = adressUrl.split("/");
adressUrl = adressUrl[adressUrl.length - 1];

adressUrl = adressUrl.substr(0, adressUrl.lastIndexOf("."));
adressUrl = adressUrl.split('list');
// console.log(adressUrl[1]);


if(adressUrl[1] == 50) {
    jumbotron.style.filter = "grayscale(1)";
    elt.style.fontFamily = "Typewriter";
    
} else if (adressUrl[1] == 60) {
    jumbotron.style.filter = "sepia(0.55)";
    document.body.style.backgroundColor = "rgba(255,165,0, 0.2)";
    
} else if (adressUrl[1] == 80) {
    jumbotron.style.backgroundImage = "url(../img/banniere80.jpg)";
    jumbotron.style.backgroundRepeat = "no-repeat";
    jumbotron.style.backgroundSize = "cover";
    jumbotron.style.backgroundPositionY = "2rem";
}

var annee = document.getElementById("annee");
// alert(annee.innerText);
if (annee.innerText < 1960) {
    // alert("je suis bon");
    jumbotron.style.filter = "grayscale(1)";
    // document.body.style.fontFamily = "Typewriter";

} else if (annee.innerText < 1970) {
    // alert("je ne suis pas");
    jumbotron.style.filter = "sepia(0.55)";
} else if (annee.innerText < 1990) {
    jumbotron.style.backgroundImage = "url(../img/banniere80.jpg)";
    jumbotron.style.backgroundRepeat = "no-repeat";
    jumbotron.style.backgroundSize = "cover";
    jumbotron.style.backgroundPositionY = "2rem";
    
}