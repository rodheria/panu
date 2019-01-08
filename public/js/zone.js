window.onload = function(){
    var selectProvince = document.getElementById('province');
    var selectCity = document.getElementById('city');

    selectProvince.onchange=getCities;
    

    fetch('https://apis.datos.gob.ar/georef/api/provincias')
        .then(function (response) {
            return response.json();
        })
        .then(function (provinces) {
            provinces.provincias.forEach(function (province) {
                selectProvince.innerHTML += `<option value="${province.id}">${province.nombre}</option>`;
            });
        })
        .catch(function (error) {
            console.log(error);
    });

    function getCities(event) {
        selectCity.innerHTML = '<option selected disabled>Seleccione ciudad...</option>';

        let provinceId = event.target.value;

        fetch('https://apis.datos.gob.ar/georef/api/municipios?provincia=' + provinceId + '&campos=id,nombre&max=250')
            .then(function(response){
                return response.json();
            })
            .then(function(municipalities) {
                municipalities.municipios.forEach(function(municipality) {
                    selectCity.innerHTML += `<option value="${municipality.id}">${municipality.nombre}</option>`;
                })
            })
    }
}