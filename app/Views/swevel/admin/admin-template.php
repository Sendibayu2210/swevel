<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <script src="/asset/vendor/jquery/jquery-3.6.1.min.js"></script>
    <script src="https://cdn.ckeditor.com/ckeditor5/35.1.0/classic/ckeditor.js"></script>

    <link rel="stylesheet" href="/asset/vendor/bootstrap5/css/bootstrap.min.css">
    <link rel="stylesheet" href="/asset/vendor/fontawesome612/css/all.css">
    <link rel="stylesheet" href="/asset/css/admin.css">
    <link rel="stylesheet" href="/css/swevel_style.css">

    <link href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/css/bootstrap-datepicker.css" rel="stylesheet">

    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">

    <title><?= $title; ?></title>
</head>

<body>
    <div class="admin-menu">
        <?= $this->include('swevel/admin/admin-sidebar'); ?>

        <div class="main">
            <header class="main-toolbar">
                <div class="row w-100">
                    <div class="col-sm-12 p-0 align-items-center" style="display:inline-flex">
                        <span class="menu-toggle h-100" role="button"><i class="fa-solid fa-bars"></i></span>
                        <i id="search-phone" class="fa-solid fa-magnifying-glass ms-3" role="button"></i>
                        <form id="search-toolbar" class="ms-auto show" role="search">
                            <button class="btn" type="submit"><i class="fa-solid fa-magnifying-glass"></i></button>
                            <input class="form-control" type="text" placeholder="search here" aria-label="Search">
                        </form>
                        <a href="#" class="swevel-brand ms-auto">Swevel</a>
                    </div>
                </div>
            </header>

            <div class="main-content">
                <?= $this->renderSection('content'); ?>
            </div>
        </div>

    </div>


    <script src="/asset/vendor/bootstrap5/js/bootstrap.bundle.min.js"></script>
    <script src="/asset/js/admin.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/3.9.1/chart.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/chartjs-plugin-datalabels/2.0.0-rc.1/chartjs-plugin-datalabels.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.26.0/moment.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.5.0/js/bootstrap-datepicker.js"></script>


    <script src="/js/swevel.js"></script>


    <script>
        $(document).ready(function() {
            barChart = function() {
                const bar = document.getElementById('barChart');
                const barChart = new Chart(bar, {
                    type: 'bar',
                    data: {
                        labels: ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9'],
                        datasets: [{
                            label: 'Statistic',
                            data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
                            backgroundColor: '#D41DCE',
                            borderColor: '#D41DCE',
                            borderWidth: 1
                        }, {
                            label: 'Statistic',
                            data: [10, 20, 30, 40, 50, 60, 70, 80, 90, 100],
                            backgroundColor: '#A21CF6',
                            borderColor: '#A21CF6',
                            borderWidth: 1
                        }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        },
                        plugins: {
                            legend: {
                                display: false
                            }
                        }
                    }
                });
            }
            barChart();

            pieChart = function() {
                const pie = document.getElementById('pieChart');
                const pieChart = new Chart(pie, {
                    type: 'pie',
                    data: {
                        labels: ['0', '1', '2'],
                        datasets: [{
                            label: 'Statistic',
                            data: [217, 541, 477],
                            backgroundColor: ['#B65EB1', '#D8B9FF', '#25005F'],
                            borderColor: '#fff',
                            borderWidth: 1,
                            datalabels: {
                                display: true,
                                formatter: function(context, chart_obj) {
                                    return calculate(chart_obj.dataIndex)
                                },
                            },
                        }]
                    },
                    options: {
                        plugins: {
                            legend: {
                                display: false
                            },
                            datalabels: {
                                anchor: 'end',
                                align: 'top'
                            }
                        }
                    }
                });
            }
            pieChart();
        })
    </script>


</body>

</html>