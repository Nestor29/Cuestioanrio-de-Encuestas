var c = new Array();

for (var x = 1; x < 11; x++) {

    if (document.getElementsByClassName("tamano" + x) && document.getElementsByClassName("titulo" + x)) {

        var valor1 = parseInt(document.getElementsByClassName("tamano" + x)[0].value);
        var valor2 = parseInt(document.getElementsByClassName("diferencia" + x)[0].value);
        //console.log(valor);
        var titulo = document.getElementsByClassName("titulo" + x)[0].value;
        //console.log(titulo);
        var oilCanvas = document.getElementsByClassName("oilChart" + x);

        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;

        var oilData = {
            labels: [
                titulo
            ],
            datasets: [{
                data: [valor1, valor2],
                backgroundColor: [
                    "deepskyblue"
                ]
            }]
        };

        var pieChart = new Chart(oilCanvas, {
            type: 'pie',
            data: oilData
        });

    }
}