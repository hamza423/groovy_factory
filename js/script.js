/* 
 * 
 * script pour gerer l'affichage de la newsletter , l'affichage de la newsletter(pas encore terminé) , confirmation des droits dans la pages des détails du produits
 * 
 */

//apparition de la newsletter au bout de 300px
$(document).ready(function () {
    $(window).scroll(function () {
        if ($(this).scrollTop() > 300) {
            $('#newsletter').fadeIn();
        } else {
            $('#newsletter').fadeOut();
        }
    });
});


/*
 //MODAL NEWSLETTER
 var modal = document.getElementById("modal");
 var span = document.getElementById("close")[0];
 var button = document.getElementById("btn");
 
 button.onclick = function() {
 modal.style.display = "block";
 }
 
 span.onclick = function() {
 modal.style.display = "none";
 }
 */

//Confirm droit 
function confirmation() {
    var texte;
    if (confirm("Etes-vous sur de confirmé les droits ?")) {
        texte = "votre confirmation à était effectué";
    } else {
        texte = "vous avez annulé";


        return false;
    }
    document.getElementById("message").innerHTML = texte;
}