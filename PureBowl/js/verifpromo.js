function verif_promo()
{ var error = "<ul>";
var date_d = document.getElementById('date_deb').value;
var date_f = document.getElementById('date_fin').value;
var date_actuelle = new Date();

if (date_d >= date_f) 
{error += "<li>la date debut doit être inférieur à la date fin</li>";
//	alert('la date debut doit être inférieur à la date fin');

}
else if (date_d >  date_actuelle)
{error += "<li>la date debut doit être inférieur ou égale  à la date date actuelle</li>";

//alert('la date debut doit être inférieur ou égale  à la date dateactuelle');
}

if (error !== "<ul>") {
        document.querySelector('#error').style.color = 'red';
        error += "</ul>"
        document.getElementById('error').innerHTML = errors
        return false;
}
else alert ("promotion ajoutée") ;

}