const form = document.querySelector('#meuFormulario');
const span = document.querySelector('span');

form.addEventListener('submit', (event)=> {
    const mensagem = document.querySelector('#mensagem').value.trim();

    if(mensagem === '') {
            span.textContent = 'Por favor, digite uma mensagem antes de enviar!';
            event.preventDefault();
            return;
        }
    
        const confirmar = confirm('Deseja realmente enviar está mensagem?');
    
        if(!confirmar) {
            event.preventDefault();
        }
});
