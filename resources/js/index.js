
let drop_categ = document.getElementById('menu_categ');
let drop_author = document.getElementById('menu_author');
let drop_profile = document.getElementById('menu_profile');


let author = document.getElementById('author');
let categ = document.getElementById('categ');
let list = document.getElementById('list');
let profile = document.getElementById('profile');
author.addEventListener('mouseover',() =>{
    if(drop_author.classList.contains('hidden')){
        drop_author.classList.remove('hidden');
    }else{
        drop_author.classList.add('hidden');
    }


})

categ.addEventListener('mouseover',() =>{
    // if(drop_categ.classList.contains('hidden')){
    //     drop_categ.classList.remove('hidden');
    // }else{
    //     drop_categ.classList.add('hidden');
    // }

    drop_categ.classList.toggle('hidden')

})


profile.addEventListener('click',() =>{
    if(drop_profile.classList.contains('hidden')){
        drop_profile.classList.remove('hidden');
    }else{
        drop_profile.classList.add('hidden');
    }
})





