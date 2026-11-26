async function buscarCep(cep) {

    const url ='https://viacep.com.br/ws/${cep}/json/'

    try{
        console.log('Buscar CEP: ${url}')

        const resposta = await fetch(url);

        if(!resposta.ok){
            throw new Error('Erro ao buscar CEP: ${resposta.status}');
        }

        const dados = await resposta.json();

        if (dados.erro) {
            console.erro('CEP não encontrado: ${cep}')
            return {erro: true};
        }

        return dados;

    return {
        erro:false,
        cep: dados.cep,
        logradouro: dados.logradouro,
        bairro: dados.bairro,
        localidade: dados.localidade,
        uf: dados.uf
    }

    }catch (erro) {
        console.erro('Erro ao buscar o CEP')

    }
    
}

const campoCEP = document.getElementById('cep');

if(campoCep){

    const campoLogradouro = document.getElementById('Logradouro')
    const campoBairro = document.getElementById('bairro')
    const campoLocalidade = document.getElementById('localidade')
    const campouf = document.getElementById('uf')
    const campocepStatus= document.getElementById('cep-status')

    function limparCamposEndereço(){
        campoLogradouro.value = '';
        campoBairro.value = '';
        campoLocalidade.value='';
        campouf.value = '';

    }



    campocepStatus.addEventListener('blur', async () =>{

        const cepLimpo = campoCep.value.replace(/\D/g, '');

    cepStatus.textContent = 'Buscando CEP...';
    cepStatus.classlist.remove = ('texto-erro');

    const endereço = await  buscarCep(ceplLimpo);

    if(!endereco || endececo.erro){
        cepStatus.textContent = 'CEP não encontrado, verifique os números digitados';
        cepStatus.classList.add('texto-erro');
        campoCep.classList.add('input-erro');
        campoBairro.classList.remove('input-sucesso');
        limparCamposEndereco();
        return;
    }

    cepStatus.textContent = '';
    campoLogradouro.value = endereco.logradouro;
    campoBairro.value = endereco.bairro;
    campoLocalidade.value = endereco.localidade;
    campoUf.value = endereco.uf;

    cepS








    });
}