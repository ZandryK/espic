
/*
    JQUERY CAROUSEL
*/
$(document).ready(()=>{
    $("#Ajout").carousel("pause");
    $("#prev").click(function(){
        $("#Ajout").carousel("prev");
    });

    
});


document.getElementById("next").addEventListener("click",(e)=>{
    e.preventDefault();
    var matricule = document.getElementById("matricule");
    var nom = document.getElementById("nom");
    var email = document.getElementById("email");
    var password = document.getElementById("password");
    
    switch ("") {
        case matricule.value:
            matricule.classList.add('is-invalid');
            document.getElementById("alert-matricule").innerHTML = '<i class="fa fa-warning"></i>&nbsp; Matricule ne peut pas être vide';
            break;
        case nom.value:
            nom.classList.add('is-invalid');
            document.getElementById("alert-nom").innerHTML = '<i class="fa fa-warning"></i>&nbsp; Nom ne peut pas être vide';
            break;
        case email.value:
            email.classList.add('is-invalid');
            document.getElementById("alert-email").innerHTML = '<i class="fa fa-warning"></i>&nbsp; Email ne peut pas être vide';
            break;
        case password.value:
            phone.classList.add('is-invalid');
            document.getElementById("alert-password").innerHTML = '<i class="fa fa-warning"></i>&nbsp; mot de passe ne peut pas être vide';
            break;
        default:
            $("#Ajout").carousel("next");
            break;
    }
})

const input = document.querySelectorAll('input');
input.forEach(item=>{
    item.addEventListener("focus",()=>{
        item.classList.remove("is-invalid");
    });

    item.addEventListener("input",()=>{
        var id = item.attributes.getNamedItem("id").value;
        switch (id) {
            case 'matricule':
                if(item.value.length < 3){
                    item.classList.add("is-invalid");
                    document.getElementById("alert-matricule").innerHTML = '<i class="fa fa-warning"></i>&nbsp; Matricule trop court';
                }else{
                    var input = regex("texte");
                    if(!input.test(item.value)){
                        item.classList.add("is-invalid");
                        document.getElementById("alert-matricule").innerHTML = '<i class="fa fa-warning"></i>&nbsp; Matricule incorrecte';
                    }else{
                        item.classList.remove("is-invalid");
                    }
                }
                
                break;
            case "nom":
                const nom = regex("texte");
                if(!nom.test(item.value)){
                    item.classList.add("is-invalid");
                    document.getElementById("alert-nom").innerHTML = '<i class="fa fa-warning"></i>&nbsp; Nom trop court';
                }else{
                    item.classList.remove("is-invalid");
                }
                break;
            case "email":
                const email = regex("mail");
                if(!email.test(item.value)){
                    item.classList.add("is-invalid")
                    document.getElementById("alert-email").innerHTML = '<i class="fa fa-warning"></i>&nbsp; email incorect';
                }else{
                    item.classList.remove("is-invalid");
                }
                break;
            case "password":
                const phone = regex('mdp');
                if (!phone.test(item.value)) {
                    item.classList.add("is-invalid")
                    document.getElementById("alert-password").innerHTML = '<i class="fa fa-warning"></i>&nbsp; mots de passe trop court';
                }else{
                    item.classList.remove("is-invalid");
                }
                break;
            default:
                item.classList.remove("is-invalid");
                break;
        }
    })
});

function regex(Variable) {
	switch (Variable) {
		case "texte"   : reg = new RegExp("^(.|\n|\r|\n\r){3,}$","i"); break; // texte de 3 caractères minimum, retour à la ligne possible  
		case "mail"    : reg = new RegExp("^([a-zA-Z0-9_-])+([.]?[a-zA-Z0-9_-]{1,})*@([a-zA-Z0-9-_]{2,}[.])+[a-zA-Z]{2,3}\\s*$","i"); break; // adresse mail valide customer@fai.ext  
		case "mdp"     : reg = new RegExp("^.{5,32}$","i"); break; // mot de passe entre 5 et 32 caractères  
		case "date"    : reg = new RegExp("^[0-9]{2}/[0-9]{2}/[0-9]{4}$","i") ; break; // date au format 01/01/2000  
		case "ip"      : reg = new RegExp("^\d{1,3}\.\d{1,3}\.\d{1,3}\.\d{1,3}$","i"); break; // adresse IPV4  
		case "tel"     : reg = new RegExp(/((\+*)((0[ -]*)*|((91 )*))((\d{12})+|(\d{10})+))|\d{5}([- ]*)\d{6}/); break; // numéro de téléphone français  
		case "cp"      : reg = new RegExp("^[0-9]{5}$","i"); break; // code postal  
		case "fichier" : reg = new RegExp("^.+\.[a-zA-Z]{2,5}$","i"); break; // fichiers à uploader  
		// Ajoutez ici vos expressions  
	}
	return reg;
};



