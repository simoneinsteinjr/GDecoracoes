$(document).ready(function () {

    $.ajax({
        method: 'get',
        url: 'http://localhost:8000/grafico',
        data: null,

        success:function (data) {
            // window.alert(data.texto)
            //Sampel Line Chart
            var LineChartSampleData = {
                labels: [data.textoP, data.textoC],
                datasets: [{
                    label: "Material Pendente",
                    fillColor: "rgba(220,220,220,0.2)",
                    strokeColor: "rgba(220,220,220,1)",
                    pointColor: "rgba(220,220,220,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(220,220,220,1)",
                    data: [data.reservaP, data.reservaC]
                }, {
                    label: data.textoC,
                    fillColor: "rgba(151,187,205,0.2)",
                    strokeColor: "rgba(151,187,205,1)",
                    pointColor: "rgba(151,187,205,1)",
                    pointStrokeColor: "#fff",
                    pointHighlightFill: "#fff",
                    pointHighlightStroke: "rgba(151,187,205,1)",
                    data: [data.reservaC]
                }]
            };

            //Sampel Bar Chart
            var BarChartSampleData = {
                labels: ["Janeiro", "Fevereiro", "Março", "Abril", "Maio", "Junho", "Julho", "Agosto", "Setembro", "Novembro", "Dezembro "],
                datasets: [
                    {
                        label: data.textoP,
                        fillColor: "rgba(220,220,220,0.5)",
                        strokeColor: "rgba(220,220,220,0.8)",
                        highlightFill: "rgba(220,220,220,0.75)",
                        highlightStroke: "rgba(220,220,220,1)",
                        data: [data.reservaP]
                    },
                    {
                        label: data.textoP,
                        fillColor: "rgba(151,187,205,0.5)",
                        strokeColor: "rgba(151,187,205,0.8)",
                        highlightFill: "rgba(151,187,205,0.75)",
                        highlightStroke: "rgba(151,187,205,1)",
                        data: [data.reservaC]
                    }
                ]
            };

            // //Sampel Pie Doughnut Chart
            var PieDoughnutChartSampleData = [
                {
                    value: 30,
                    color:"#F7464A",
                    highlight: "#FF5A5E",
                    label: "Nao confirmados"
                },
                {
                    value: 40,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Confirmados"
                },{
                    value: 10,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Confirmados"
                },{
                    value: 20,
                    color: "#46BFBD",
                    highlight: "#5AD3D1",
                    label: "Confirmados"
                }

            ]


                window.LineChartSample = new Chart(document.getElementById("line-chart-sample").getContext("2d")).Line(LineChartSampleData,{
                    responsive:true
                });

                window.BarChartSample = new Chart(document.getElementById("bar-chart-sample").getContext("2d")).Bar(BarChartSampleData,{
                    responsive:true
                });

                window.PieChartSample = new Chart(document.getElementById("pie-chart-sample").getContext("2d")).Pie(PieDoughnutChartSampleData,{
                    responsive:true
                });


        },

        error:function () {


        }
    });

});





// });