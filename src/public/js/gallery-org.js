//Функционал с возможностья масштабировать активное фото
let activePhoto = document.querySelector('.active-photo');
let previews = document.querySelectorAll('.preview-list a');

for (let preview of previews){
    preview.onclick = function(evt){
        evt.preventDefault();
        activePhoto.src = preview.href;
    };
};

//Функционал с возможностью показать все фотографии
let more = document.querySelector('.more');
let moreHidden = document.querySelector('.more-hidden');
let photosLi = document.querySelectorAll('.preview-list li');

more.onclick = function(){
for (let photoLi of photosLi){
    more.classList.remove('active-more')
    moreHidden.classList.add('active-more')
    photoLi.classList.add('active-li')
  }
}

  moreHidden.onclick = function(){
    for (let photoLi of photosLi){
    moreHidden.classList.remove('active-more')
    more.classList.add('active-more')
    photoLi.classList.remove('active-li')

  
  }
  if (photosLi.length > 3) {
    photosLi[0].classList.add('active-li');
    photosLi[1].classList.add('active-li');
    photosLi[2].classList.add('active-li');
  }
  
}


