function validate(){
    let name = document.getElementById('name');
    let mail = document.getElementById('mail');
    let tel = document.getElementById('tele');
    let pass = document.getElementById('pass');
    if (name.value === '')
    {
        name.style = 'border-bottom: solid #D83F31;'
    }
    if (mail.value === '')
    {
        mail.style = 'border-bottom: solid #D83F31;'
    }
    if (tel.value === '')
    {
        tel.style = 'border-bottom: solid #D83F31;'
    }
    if (pass.value === '')
    {
        pass.style = 'border-bottom: solid #D83F31;'
    }
    else if (pass.value.length < 8)
    {
        pass.value = '';
        pass.setAttribute('placeholder', 'Enter 8 numbers at least');
        pass.style = 'border-bottom: solid #D83F31;';
    }

    if(name.value != ''&&mail.value != ''&&tel.value != ''&&pass.value != ''&& pass.value.length >= 8)
    {
        document.getElementById('submit').setAttribute('type', 'submit');
    }

}