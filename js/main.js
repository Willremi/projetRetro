var elt = document.getElementById('annee50');
var jumbotron = document.getElementsByClassName('jumbotron');

var nom = location.href;
nom = nom.split("/");
nom = nom[nom.length - 1];

nom = nom.substr(0, nom.lastIndexOf("."));
console.log(nom);

