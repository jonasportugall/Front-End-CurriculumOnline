


function changeContent(text){
    var contentOption = document.getElementById('contentOption');
    contentOption.style.color = 'black';
    contentOption.innerText = text;
}

document.getElementById('contentOption').addEventListener('click', function(){
    window.location.href = '/curriculum';
});


function toggleElement(target){
    var form = document.getElementById(target);
    if(form.style.display == 'none'){
        form.style.display = 'block';
    }else{
        form.style.display = 'none';
    }
}




//work the provincies and conuties dinamically---------------------------------------------------------------------------------------

document.addEventListener("DOMContentLoaded", function (){
    var provinceSelect = document.getElementById('provinceSelect');
    var countySelect = document.getElementById('countySelect');

    // Fazer a solicitação AJAX para obter províncias e cidades
    fetch('http://127.0.0.1:8001/api/provincies')
        .then(response => response.json())
        .then(data => {
            // Preencher o select de províncias
            provinceSelect.innerHTML = data.map(province => `<option value="${province.id}">${province.name}</option>`).join('');

            // Atualizar o select de cidades quando a província for alterada
            provinceSelect.addEventListener('change', function () {
                var selectedProvinceId = this.value;

                // Encontrar a província selecionada nos dados
                var selectedProvince = data.find(province => province.id == selectedProvinceId);

                // Preencher o select de cidades com base na província selecionada
                countySelect.innerHTML = selectedProvince
                    ? selectedProvince.counties.map(county => `<option value="${county.id}">${county.name}</option>`).join('')
                    : '';

                    countySelect.disabled = !selectedProvince; // Habilitar ou desabilitar o select de cidades
            });
        })
        .catch(error => console.error('Erro ao carregar dados:', error));
});




