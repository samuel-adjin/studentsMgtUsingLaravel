let enrol = document.getElementById('enrol')

let enrol_text = document.getElementById('enrol_text')
let cart = document.getElementById('cart')


enrol.addEventListener('click',()=>{
    enrol_text.innerText ='Processing...'
    enrol.classList.add('opacity-70')
    cart.classList.add('hidden')
    setTimeout(enrolled,3000)


})

function enrolled()
{
        enrol_text.innerText ='Enrolled'
        enrol.classList.add('opacity-100')
        cart.classList.add('hidden')
}

function test()

{


    if(enrol_text.innerHTML === 'Enrolled'){
        clearTimeout()
        enrol_text.innerText = "Enrol in course"
    cart.classList.remove('hidden')
    }
}
