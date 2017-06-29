// fonction qui pere;t de desqctiver une tqche ou de lq suppri;er
var disableliste = ele => ele.parentElement.classList.toggle('disable');
var deleteliste = ele =>  {
    // verifi si la tachhe est complete avant de la supprimer
    let isdisable = ele.parentElement.classList;
    if(isdisable[isdisable.length - 1] === 'disable'){
        ele.parentElement.classList.add('remove');
        // attend la fin de l'animation pour le supprimer
        ele.parentElement.addEventListener('transitionend', function() {
            ul.removeChild(ele.parentElement);
        })
    }
};

//déclaration de variable
var todolist = [];
var add = document.getElementById('add');
var ul = document.querySelector('.todoliste ul');

// rajoute l'evenement au click pour desactiver une tache ou la supprimer 
var li = document.querySelectorAll('.todoliste li');
var lengthli = li.length;
for(i = 0; i < lengthli; i++) {
    // ajoute un evenemnt sur le bouton valider
    li[i].children[0].addEventListener('click', function(e) {
        disableliste(this);
    })

    // ajoute un evenement sur le bouton supprimer
    li[i].children[1].addEventListener('click', function(e) { 
        deleteliste(this);
    })
}

// evenement pour ajouter un nouveau todo
add.addEventListener('click', function() {
    // recupere la valeur dans le champs puis le push dans un tableaux
    var input = document.querySelector('.todoliste-add input')
    var val = input.value;
    if(!val) { return };// si le champs est vide on arret la fonction
    input.value = '';
    todolist.push(val);

    // crée un li ou je crée du text puis je l'insere dans le li crée
    var newli = document.createElement('li');
    newli.innerHTML = val + '<i class="fa fa-check-circle-o fa-lg" aria-hidden="true"></i><i class="fa fa-times-circle-o fa-lg" aria-hidden="true"></i>';
    
    // je rajoute avant le premier li mon li avec insert before
    var li = ul.firstElementChild;
    ul.insertBefore(newli, li);

    // rajoute l'event au clik pour le bouton validé la tache
    newli.children[0].addEventListener('click', function(e) {
        disableliste(this);
    })

    newli.children[1].addEventListener('click', function(e) {
        deleteliste(this);
    })
})


