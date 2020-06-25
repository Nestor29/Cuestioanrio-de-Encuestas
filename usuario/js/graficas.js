var charts = document.getElementsByClassName("chart");

window.chartColors = {
    red: 'rgb(255, 99, 132)',
    orange: 'rgb(255, 159, 64)',
    yellow: 'rgb(255, 205, 86)',
    green: 'rgb(75, 192, 192)',
    blue: 'rgb(54, 162, 235)',
    purple: 'rgb(153, 102, 255)',
    grey: 'rgb(201, 203, 207)'
};

var titulos = new Array();
var datos = new Array();

for (var numcharts = 1; numcharts <= charts.length; numcharts++) {

    if (document.getElementsByClassName("tamano" + numcharts) && document.getElementsByClassName("titulo" + numcharts)) {

        var alldatos = document.getElementsByClassName("tamano" + numcharts);
        var alltitulos = document.getElementsByClassName("titulo" + numcharts);
       
        for (var dato = 0; dato < alldatos.length; dato++) {
            datos.push(alldatos[dato].value);
            titulos.push(alltitulos[dato].value);
        }
      
        var oilCanvas = document.getElementsByClassName("oilChart" + numcharts);

        Chart.defaults.global.defaultFontFamily = "Lato";
        Chart.defaults.global.defaultFontSize = 18;

        var oilData = {
            labels: titulos,
            datasets: [{
                data: datos,
                backgroundColor:[
                    window.chartColors.red, 
                    window.chartColors.orange, 
                    window.chartColors.yellow, 
                    window.chartColors.green, 
                    window.chartColors.blue,
                    window.chartColors.purple
                ]
            }]
        };

        var pieChart = new Chart(oilCanvas, {
            type: 'pie',
            data: oilData
        });
        datos = [];
        titulos = [];
    }
    
}