let hearts = document.querySelectorAll('.heart');

for (let heart of hearts){
heart.onclick = function (){
    heart.classList.toggle('active');
}
}