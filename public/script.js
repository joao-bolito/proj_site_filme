const login = document.getElementById('login');
const opcaoLogar = document.querySelector('.opcao-btn-login a');

login.addEventListener('click', function(event){
    event.preventDefault();
    if(opcaoLogar.style.display === 'block')
        opcaoLogar.style.display = 'none';
    else
        opcaoLogar.style.display = 'block';
});
