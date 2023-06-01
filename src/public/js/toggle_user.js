let boss = document.querySelector('.boss');
let candidate = document.querySelector('.candidate');
let candidateForm= document.querySelector('.candidate-form');
let bossForm= document.querySelector('.boss-form');

candidate.onclick = function() {
    candidate.classList.add('active');
    boss.classList.remove('active');
    candidateForm.classList.add('active');
    bossForm.classList.remove('active');
};

boss.onclick = function() {
    boss.classList.add('active');
    candidate.classList.remove('active');
    bossForm.classList.add('active');
    candidateForm.classList.remove('active');
};