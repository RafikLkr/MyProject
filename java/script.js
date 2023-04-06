let compteur = 1;

// Fonction pour passer a la semaine suivante
function nextweek(){
    if (compteur+1 <= 52){
        compteur ++;
        let semaine = document.getElementById('semaine');
        semaine.innerHTML = "Semaine "+compteur;
    }
}
let right_arrow = document.getElementById('right_arrow');
right_arrow.addEventListener('click', nextweek);

// Fonction pour revenir a la semaine precedente
function pastweek(){
    if (compteur-1>=1){
        compteur--;
        let semaine = document.getElementById('semaine');
        semaine.innerHTML = "Semaine "+compteur;
    }
}
let left_arrow = document.getElementById('left_arrow');
left_arrow.addEventListener('click', nextweek);

//Fonction qui ouvre le formulaire pour ajouter un cours 
function openform(){
    let form = document.querySelector('.pop_up');
    form.style.display = 'grid';
}
let openBtn = document.getElementById('add');
openBtn.addEventListener('click', openform);

// Fonction pour fermer le formulaire 
function closeform(){
    let form = document.querySelector('.pop_up');
    form.style.display = 'none';
}
let closeBtn = document.getElementById('close');
closeBtn.addEventListener('click',closeform);