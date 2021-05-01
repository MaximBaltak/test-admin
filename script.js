let startButtons=document.querySelector('.wap'),
    formL=document.querySelectorAll('.form')[0],
    formS=document.querySelectorAll('.form')[1],
    loginUp=document.querySelectorAll('.f')[0],
    signUp=document.querySelectorAll('.f')[1]
let body=document.querySelector('body')


formL.style.display='none'
formS.style.display='none'
startButtons.addEventListener('click',e=>{
    let target=e.target
    if(target.id==='l'){
        if(formS.style.display==='block'){
            formS.style.display='none'
        }
        formL.style.display='block'

    }else if(target.id==='s'){
        if(formL.style.display==='block'){
            formL.style.display='none'
        }
        formS.style.display='block'
    }
})
let Html=(text)=>{
    let div=document.createElement('div')
    div.classList.add('profile')
    body.append(div)
    div.innerHTML=text

}

let request=(form)=>{
    if(form===formL){
        let login=form.querySelectorAll('input')[0],
            password=form.querySelectorAll('input')[1]
        if(login.value===''|| password.value===''){
            alert('Поля должны быть заполнены')
        }else {
            let arr=login.value.match(/\d/gi)
            let arr1=password.value.match(/^\d{8}$/gi)
            if(arr!==null){
                alert('нельзя использовать цифры в логине')
            }
            if (arr1===null){
                alert('пороль должен содеражть 8 цифр и без пробелов ')
            }
        }
        let bodyForm=new FormData(form.querySelector('form'))
        fetch('server.php',{
            method:'POST',
            body: bodyForm
        }).then(res=>res.text())
            .then(text=>{
                Html(text)
            })
            .catch(err=>{console.log(err)})
        login.value=''
        password.value=''


    }else if(form===formS){
        let name=form.querySelectorAll('input')[0],
            login=form.querySelectorAll('input')[1],
            password=form.querySelectorAll('input')[2],
            mail=form.querySelectorAll('input')[1]

        if(login.value===''|| password.value===''||name.value===''||mail.value===''){
            alert('Поля должны быть заполнены')
        }else {
            let arrName=name.value.match(/\d/gi)
            let arr=login.value.match(/\d/gi)
            let arr1=password.value.match(/^\d{8}$/gi)
            if(arr!==null){
                alert('нельзя использовать цифры в логине')
            }
            if (arr1===null){
                alert('пороль должен содеражть 8 цифр и без пробелов ')
            }
            if(arrName!==null){
                alert('В имени не должно быть цифр')
            }
        }
        let bodyForm=new FormData(form.querySelector('form'))
        fetch('sign.php',{
            method:'POST',
            body: bodyForm
        }).then(res=>res.text())
            .then(text=>{
                Html(text)
            })
            .catch(err=>{console.log(err)})

        name.value=''
        login.value=''
        password.value=''
        mail.value=''

    }

}
loginUp.addEventListener('click',(e)=>{
    e.preventDefault()
    request(formL)
    formL.style.display='none'


})
signUp.addEventListener('click',e=>{
    e.preventDefault()
    request(formS)
    formS.style.display='none'

})



