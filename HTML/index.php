<?php
include("humidity.php");
include("status.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Smart Agriculture Application</title>
    <script src="https://kit.fontawesome.com/5eb9279658.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@300&display=swap" rel="stylesheet">
    
    <script type = "text/javascript" src = "https://www.google.com/jsapi"></script>
      <script type = "text/javascript">
         google.charts.load('current', {'packages': ['corechart']});
         google.charts.setOnLoadCallback(drawChart);
         function drawChart() {
            var data =new google.visualization.DataTable(<?php echo $chart_3_data; ?>);
            var options = {
                legend:{position:'bottom'},
                chartArea:{width:'95%', height:'65%'}
            };  
            var chart = new google.visualization.SteppedAreaChart(document.getElementById('chart_3'));
            chart.draw(data, options);
         }     
</script><script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart(){
            var data = new google.visualization.DataTable(<?php echo $line_chart_data; ?>);
            var options = {
                title:'Sensors Data',
                legend:{position:'bottom'},
                chartArea:{width:'95%', height:'65%'}
            };
            var chart = new google.visualization.LineChart(document.getElementById('line_chart'));
            chart.draw(data, options);
        }
    </script>   
    <script type="text/javascript">
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(drawChart);
        function drawChart(){
            var data = new google.visualization.DataTable(<?php echo $line_chart_2_data; ?>);
            var options = {
                legend:{position:'bottom'},
                chartArea:{width:'95%', height:'65%'}
            };
            var chart = new google.visualization.LineChart(document.getElementById('line_chart_2'));
            chart.draw(data, options);
        }
    </script>
    <script src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <script src = "https://code.highcharts.com/highcharts.js"></script>    
    <script src = "https://code.highcharts.com/highcharts-more.js"></script>
    <script src = "https://code.highcharts.com/modules/solid-gauge.js"></script>
    <script language = "JavaScript">
         $(function () {
            var gaugeOptions = {
                chart: {
                type: 'solidgauge'
                },
                title: null,
                pane: {
                    center: ['50%', '85%'],
                    size: '100%',
                    startAngle: -90,
                    endAngle: 90,
                    background: {
                        backgroundColor: (Highcharts.theme && Highcharts.theme.background2) || '#EEE',
                        innerRadius: '60%',
                        outerRadius: '100%',
                        shape: 'arc'
                    }
                },
                tooltip: {
                    enabled: false
                },
                yAxis: {
                    stops: [
                        [0.1, '#3bb4bf'],
                        [0.3, '#55BF3B'], // green
                        [0.7, '#DDDF0D'], // yellow
                        [0.9, '#DF5353'] // red
                    ],
                    lineWidth: 0,
                    minorTickInterval: null,
                    tickAmount: 2,
                    tickWidth: 0,
                    title: {
                        y: -70
                    },
                    labels: {
                        y: 16
                    }
                },
                plotOptions: {
                    solidgauge: {
                        dataLabels: {
                            y: 5,
                            borderWidth: 0,
                            useHTML: true
                        }
                    }
                }
            };
var humidity=$('#gauge1').highcharts(Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'Humidity'
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Humidity',
        data: [1],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                   '<span style="font-size:12px;color:silver">%</span></div>'
        },
        tooltip: {
            valueSuffix: ' %'
        }
    }]
}));
var temperature=$('#gauge2').highcharts(Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: -20,
        max: 60,
        title: {
            text: 'Temperature'
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Temperature',
        data: [1],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                   '<span style="font-size:12px;color:silver">C°</span></div>'
        },
        tooltip: {
            valueSuffix: ' C°'
        }
    }]
}));
var water_level=$('#gauge3').highcharts(Highcharts.merge(gaugeOptions, {
    yAxis: {
        min: 0,
        max: 100,
        title: {
            text: 'Water Level'
        }
    },
    credits: {
        enabled: false
    },
    series: [{
        name: 'Water Level',
        data: [5],
        dataLabels: {
            format: '<div style="text-align:center"><span style="font-size:25px;color:' +
                ((Highcharts.theme && Highcharts.theme.contrastTextColor) || 'black') + '">{y}</span><br/>' +
                   '<span style="font-size:12px;color:silver">%</span></div>'
        },
        tooltip: {
            valueSuffix: ' %'
        }
    }]
}));
setInterval(function () {
    $.ajax({
        url: "hum.php",
        type:'get',
        dataType: "json",
        cache: false, 
        success: function(data){
            var humidity = $.parseJSON(data);
            var chart = $('#gauge1').highcharts();
            chart.series[0].points[0].update(humidity);   

        }
    });
}, 2000);
setInterval(function () {
    $.ajax({
        url: "temp.php",
        type:'get',
        dataType: "json",
        cache: false, 
        success: function(load){
            var temperature = $.parseJSON(load);
            var chart2 = $('#gauge2').highcharts();   
            chart2.series[0].points[0].update(temperature);   
        }
    });
}, 2000);
setInterval(function () {
    $.ajax({
        url: "water.php",
        type:'get',
        dataType: "json",
        cache: false, 
        success: function(load){
            var water_level= $.parseJSON(load);
            var chart3 = $('#gauge3').highcharts();   
            chart3.series[0].points[0].update(water_level);   
        }
    });
}, 2000);
});
</script>
</head>
<body>
    <section id= "Menu">
        <div id= "logo">Smart Agriculture Application</div>
        <nav>
            <a href="">Home</a>
            <a href="#about">About</a>
            <a href="#graphs">Graphs</a>
            <a href="#contact">Contact</a>
        </nav>
    </section>
    <section id="home">
        <div id="black"></div>
        <div id="icerik">
            <h2>The Future Of Agriculture</h2>
            <hr width=300px align=left>
            <p>With the world's population growing, agricultural land shrinking, and more people moving to cities, it's expected that the productive food required will be grown indoors in climate-controlled, light-controlled environments. This is made possible by year-round climate control and the efficient use of land and water.</p>
        </div>
    </section>
    <section id="about">
        <h3>About</h3>
        <div id="container">
            <div id="left">
                <h5 id="h5left">The use of IoT-powered smart solutions in agricultural operations will increase in the coming years. </h5>
            </div>
            <div id="right">
                <span>O</span>
                <p id="pright">ur project aims to eliminate challenges such as extreme weather, climate change, and the impact of population growth, as well as bring technological solutions to meet increased food demand. The sensors collect and transmit data that aids in the system's precise real-time monitoring. They collect data from the environment in order to choose the best crops for growing and sustaining in specific climatic conditions. Its goal is to assist the manufacturer in analyzing this data in order to make smart and timely decisions, as well as accessing the data from any location.</p>
            </div>
        </div>
    </section>
    <section id="graphs">
            <h3>Smart Application Graphs</h3>
            <div id="gauges">
                <div id = "gauge1" style = "width: 300px; height: 200px; float: left"></div>
                <div id = "gauge2" style = "width: 300px; height: 200px; float: left"></div>
                <div id = "gauge3" style = "width: 300px; height: 200px; float: left"></div>
            </div><br><br><br>
            <div class="wrap">
            <div class="table">
            <h2 id="h2slider">Control Panel</h2>
            <p>The control section is designed to allow you to customize situations to your preferences. <strong>Temperature status:</strong> selects the maximum temperature at which the fan should run. Celsius (C°) will be used to evaluate the value you enter. <strong>Light status:</strong> It has been designed to allow you to choose the maximum amount of light you want for your plant. Lumens will be used to evaluate the value you enter.</p>
            <div class="slidecontainer" style="margin-left:20px;">
            <form action="index.php" method="post" >
                <label for="price">Temperature </label>
                <input type="text" name="tstatus" placeholder="Temperature Status" required class="contol">
                <input type="submit" name ="update" value="Submit" onclick="alert('Data Sent')" style="margin-right:65px; margin-left:3px; padding: 10px 10px;"> 
                </form>
    
            <form action="index.php" method="post">
                <label for="price">Light </label>
                <input type="text" name="lstatus" placeholder="Light Status" >
                <input type="submit" name ="update2" value="Submit" onclick="alert('Data Sent')" style="margin-left:3px; padding: 10px 10px;"> 
                </form>   
                </div>    

                </div>
            </div>
        <div id="buttons">
            <form action="index.php" method="post">
                <div class="card-group" style="margin-right:20px;">
                <label for="toogle">Fan</label>
                <div class="card bg-secondary text-white">
                <div class="card-body">
                <input type="submit" style="font-size: 50;" class="btn btn-secondary btn-block/" name="fanOn" value="Switch On FAN"/>
                </div>
                </div>
                <div class="card bg-info text-white">
                <div class="card-body">
                <input type="submit" style="font-size: 50;" class="btn btn-info btn-block/" name="fanOff" value="Switch Off FAN"/>            
                </div>
                </div>
                </div>
            </form>
            <form action="index.php" method="post">
                <div class="card-group" style="margin-left:20px;">
                <label for="toogle">Light</label>
                <div class="card bg-secondary text-white">
                <div class="card-body">
                <input type="submit" style="font-size: 50;" class="btn btn-secondary btn-block" name="ledOn" value="Switch On LED"/>
                </div>
                </div>
                <div class="card bg-info text-white">
                <div class="card-body">
                <input type="submit" style="font-size: 50;" class="btn btn-info btn-block" name="ledOff" value="Switch Off LED"/>            
                </div>
                </div>
                </div>
            </form>
            </div><br><br><br>
            
            <div class="page-wrapper">     
                <div id="line_chart" style="width: 1200px; height: 250px"></div>
                <div id="line_chart_2" style="width: 1200px; height: 250px"></div>
                <div id="chart_3" style="width: 1200px; height: 250px;"></div>
            </div>
    </section>
    <section id="contact">
        <div class="container">
            <h3>Contact</h3>
            <form action="index.php" method="post">
                <div id="formbackground">
                    <div id="form">
                        <div id="leftform">
                            <input type="text" name="name" placeholder="Name and surname" required class="formcontrol">
                            <input type="text" name="phone" placeholder="Phone number"required class="formcontrol">
                        </div>
                        <div id="rightform">
                            <input type="email" name="email" placeholder="E mail address" required class="formcontrol">
                            <input type="text" name="subject" placeholder="Subject"required class="formcontrol">
                        </div>
                        <textarea name="message" id="" cols="30" rows="10" placeholder="Explain your issue.." required class="formcontrol"></textarea>
                        <input type="submit" value="Submit">
                    </div>
                </div>
            </form>
            <footer>
                <div id="2021">2021|All Rights Reserved.</div>
                <div id="social">
                    <a href="#"><i class="fab fa-facebook-square"></i></a>
                    <a href="#"><i class="fab fa-google-plus-square"></i></a>
                    <a href="#"><i class="fab fa-instagram"></i></a>
                </div>
                <a href="#"><i class="fas fa-angle-up"></i></a>
            </footer>
        </div>
    </section>

</body>
</html>
<?php
include("connection.php");
?>