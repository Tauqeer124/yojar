@extends('voyager::master')

@section('content')
<h1>kkkghghh</h1>
<head>
    <title>User Graph by Country</title>
    <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
</head>

<body>
    
    <div id="chartContainer" style="height: 300px; width: 100%;"></div>

    <script>
        window.onload = function() {
            const data = @json($customersByCountry);
            
            const dataPoints = data.map(item => ({
                label: item.country_name, 
                y: parseInt(item.count),
                url: "/user/data/" + item.country_id 
            }));

            const chart = new CanvasJS.Chart("chartContainer", {
                animationEnabled: true,
                title: {
                    text: "User Graph by Country"
                },
                data: [{
                    type: "column",
                    dataPoints: dataPoints,
                    click: function(event) {
                        if (event.dataPoint && event.dataPoint.url) {
                            window.location = event.dataPoint.url;
                        }
                    }
                }]
            });

            chart.render();
        }
    </script>
</body>
@endsection
