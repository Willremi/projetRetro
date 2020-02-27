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
