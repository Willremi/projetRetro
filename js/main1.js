var elt50 = $('#annee50');
var jumbotron = $('#jumbotron');
var tableau = $('.table');
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

if (adressUrl[1] == 50) {
    jumbotron.css('filter', 'grayscale(1)');
    elt50.css('font-family', 'Typewriter');
} else if (adressUrl[1] == 60) {
    jumbotron.css('filter', 'sepia(0.55)');
    document.body.style.backgroundColor = "rgba(255,165,0, 0.2)";
} else if (adressUrl[1] == 80) {
    jumbotron.css({
        backgroundImage : 'url(../img/banniere80.jpg)', 
        backgroundRepeat : 'no-repeat', 
        backgroundSize : 'cover', 
        backgroundPositionY : '2rem'
    });   
}

