var elt = document.getElementById('annee50');
var typewriter = new FontFace('Typewriter', 'url(../fonts/jmh_typewriter_dry/Typewriter-Thin.otf)');

typewriter.load().then(function(loaded_face) {
    document.fonts.add(loaded_face);
}).catch(function(error) {

});
 
elt.style.fontFamily = "Typewriter";

