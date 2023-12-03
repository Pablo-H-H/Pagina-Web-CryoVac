<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Servicios</title>
    <link rel="stylesheet" href="style.css">
    <meta http-equiv="refresh" content="6">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.2/font/bootstrap-icons.min.css">

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark p-md-3">
      <div class="container">
        <a class="navbar-brand" href="#">
          <img src="imagenes/logo.png" alt="Logo" style="height: 50px; width: 80px;">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
    
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav ms-auto">
            <li class="nav-item">
              <a class="nav-link text-white" href="index.php">Inicio</a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-white" href="#">Servicios</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>


    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12 mt-5">
                <div class="chart-container" style="height:45vh; width:auto">
                    <canvas id="tempChart"></canvas>
                </div>
            </div>
            <div class="col-md-6 col-sm-12 mt-md-5">
                <div class="chart-container" style="height:45vh; width:auto">
                    <canvas id="humiChart"></canvas>
                </div>
            </div>
        </div>
    </div>


    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-12">
                <div class="chart-container" style="height:45vh; width:auto">
                    <canvas id="lightChart"></canvas>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                
            </div>
        </div>
    </div>

      <!--Footer-->
      <footer class="bg-light text-dark pt-5 pb-4" id="FOOTER">
        <div class="container text-center text-md-start">
          <div class="row text-center text-md-center">

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-primary">CRYOVAC</h5>
              <hr class="mb-4">
              <p>Conciencia en Cada Grado</p>
              <br>
              <p>Mejorando la calidad de vida de las personas</p>
            </div>

            <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-primary">¿Quiénes somos?</h5>
              <hr class="mb-4">
              <p>Somos una empresa socialmente responsable cuyo proposito es resolver la problematica de el almacenamiento y conservacion de las vacunas las cuales necesitan condiciones especiales para que tenga su mayor efectividad</p>
            </div>
            
            <div class="col-md-3 col-lg-3 col-xl3- mx-auto mt-3">
              <h5 class="text-uppercase mb-4 font-weight-bold text-primary">Contacto</h5>
              <hr class="mb-4">
              <p>
                <li class="fas fa-home me-3"></li>  Santiago de Querétaro, Qro.
              </p>
              <p>
                <li class="fas fa-envelope me-3"></li> correoejemplo@gmail.com
              </p>
              <p>
                <li class="fas fa-phone me-3"></li> +521234567890
              </p>
              <p>
                <li class="fas fa-print me-3"></li> +521234567890
              </p>
            </div>

            <hr class="mb-4">
            
            <div class="text-center mb-2">
              <p>
                Copyright Todos los derechos reservados 
                <a href="#">
                  <strong class="text-primary">CRYOVAC</strong>
                </a>
              </p>
            </div>

            <div class="text-center">
              <ul class="list-unstyled list-inline">
                <li class="list-inline-item">
                  <a href="#" class="text-dark"> <i class="fab fa-facebook"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"> <i class="fab fa-twitter"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"> <i class="fab fa-google-plus"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"> <i class="fab fa-linkedin-in"></i></a>
                </li>
                <li class="list-inline-item">
                  <a href="#" class="text-dark"> <i class="fab fa-youtube"></i></a>
                </li>
              </ul>
            </div>

          </div>
        </div>
      </footer>

    <script>
        // Obtener datos mediante Ajax
        var xhr = new XMLHttpRequest();
        xhr.open('GET', 'get_data.php', true);
        xhr.onreadystatechange = function() {
            if (xhr.readyState == 4 && xhr.status == 200) {
                var data = JSON.parse(xhr.responseText);
                createTemperatureChart(data);
                createHumidityChart(data);
                createLightChart(data);
            }
        };
        xhr.send();

        // Función para crear el gráfico de temperatura
        function createTemperatureChart(data) {
            var ctx = document.getElementById('tempChart').getContext('2d');
            var timeLabels = data.map(function(item) {
                return item.time;
            });
            var tempData = data.map(function(item) {
                return item.temp;
            });

            var chart = new Chart(ctx, {
                type: 'line',

                options: {
                    responsive: true,
                    maintainAspectRatio: false,
                    },
                data: {
                    labels: timeLabels,
                    datasets: [{
                        label: 'Temperatura',
                        data: tempData,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        x: [{
                            type: 'time',
                            time: {
                                unit: 'hour',
                                displayFormats: {
                                    hour: 'HH:mm'
                                }
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Tiempo'
                            }
                        }],
                        y: {
                            scaleLabel: {
                                display: true,
                                labelString: 'Temperatura (°C)'
                            }
                        }
                    }
                }
            });
        }


    function createHumidityChart(data) {
    var ctx = document.getElementById('humiChart').getContext('2d');
    var timeLabels = data.map(function(item) {
        return item.time;
    });
    var humiData = data.map(function(item) {
        return item.humi;
    });

    var chart = new Chart(ctx, {
        type: 'line',

        options: {
        responsive: true,
        maintainAspectRatio: false,
        },
        data: {
        labels: timeLabels,
        datasets: [{
            label: 'Humedad',
            data: humiData,
            borderColor: 'rgba(0, 255, 0, 1)',
            borderWidth: 2,
            fill: false
        }]
        },
        options: {
        scales: {
            x: [{
            type: 'time',
            time: {
                unit: 'hour',
                displayFormats: {
                hour: 'HH:mm'
                }
            },
            scaleLabel: {
                display: true,
                labelString: 'Tiempo'
            }
            }],
            y: {
            scaleLabel: {
                display: true,
                labelString: 'Humedad (%)'
            }
        }
        }
        }
    });
    }


    function createLightChart(data) {
            var ctx = document.getElementById('lightChart').getContext('2d');
            var timeLabels = data.map(function(item) {
                return item.time;
            });
            var lightData = data.map(function(item) {
                return item.light;
            });

            var chart = new Chart(ctx, {
                type: 'line',

                options: {
                    animation:{
                      duration: 0,
                  },
                    responsive: true,
                    maintainAspectRatio: false,
                    },
                data: {
                    labels: timeLabels,
                    datasets: [{
                        label: 'Luz (Off/On)',
                        data: lightData,
                        borderColor: 'rgba(75, 192, 192, 1)',
                        borderWidth: 2,
                        fill: false
                    }]
                },
                options: {
                    scales: {
                        x: [{
                            type: 'time',
                            time: {
                                unit: 'hour',
                                displayFormats: {
                                    hour: 'HH:mm'
                                }
                            },
                            scaleLabel: {
                                display: true,
                                labelString: 'Tiempo'
                            }
                        }],
                        y: {
                            scaleLabel: {
                                display: true,
                                labelString: 'Luz'
                            }
                        }
                    }
                }
            });
            chart.options.animation.duration  = 0;
        }

    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>