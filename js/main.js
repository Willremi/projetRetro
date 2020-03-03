var elt = document.getElementById('annee50');
var jumbotron = document.getElementById('jumbotron');

var nom = location.href;
nom = nom.split("/");
nom = nom[nom.length - 1];

nom = nom.substr(0, nom.lastIndexOf("."));
nom = nom.split('list');
console.log(nom[1]);


if(nom[1] == 50) {
    alert("youpi, ça marche");
} else {
    alert("merde");
}