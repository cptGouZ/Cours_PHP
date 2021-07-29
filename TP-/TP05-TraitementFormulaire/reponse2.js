window.addEventListener('load', ()=>{
        document.querySelector('#submitClient').addEventListener('click', controleSaisie)
    }
)
function controleSaisie(event){
    event.preventDefault()
    let nom=document.querySelector('#idNom').value
    let prenom=document.querySelector('#idPrenom').value
    let adresse=document.querySelector('#idAdresse').value
    let cp=document.querySelector('#idCp').value
    let ville=document.querySelector('#idVille').value
    if(nom==='' || prenom==='' || adresse==='' || cp==='' || ville==='' ){
        alert('Merci de renseigner tous les champs');

    }else{
        this.click();
    }
}