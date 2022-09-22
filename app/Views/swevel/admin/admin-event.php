<?= $this->extend('swevel/admin/admin-template'); ?>
<?= $this->section('content'); ?>

<div class="container-fluid">
    <div class="row">
        <h3 class="main-title py-3">Event</h3>

        <div id="bar-chart" class="col-sm-12 mt-3 col-md-7">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title my-3">statistic project</h6>
                    <canvas id="barChart" width="100%"></canvas>
                </div>
            </div>
        </div>

        <div id="pie-chart" class="col-sm-12 mt-3 col-md-5">
            <div class="card">
                <div class="card-body">
                    <h6 class="card-title my-3 text-center">statistic project</h6>
                    <div class="mx-auto w-75">
                        <canvas id="pieChart"></canvas>
                    </div>
                </div>
            </div>
        </div>

        <div id="card-article" class="col-sm-12 mt-3 col-md-6">
            <div class="card">
                <div class="card-body">
                    <div class="row">

                        <div class="col-12 col-md-6 mt-2">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <p>20</p>
                                    <p>all article</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-2">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <p>1</p>
                                    <p>popular event</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-2">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <p>9</p>
                                    <p>latest article</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-md-6 mt-2">
                            <div class="card border-0">
                                <div class="card-body text-center">
                                    <p>3</p>
                                    <p>related event</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <div id="newest-article" class="col-sm-12 mt-3 col-md-6">
            <div class="card">
                <div class="card-body pt-0">
                    <div class="container">
                        <div class="row justify-content-between my-3">
                            <h6 class="col fw-bold my-auto">newest event</h6>
                            <h6 class="col text-end">
                                <a href="#" class="text-purple fw-bold">
                                    <i class="fa-solid fa-plus"></i>
                                    add new
                                </a>
                            </h6>
                        </div>
                        <div class="row small-card">
                            <img src="../asset/image/admin-artikel/bengkoang.png" alt="" class="w-30 h-100 my-auto">
                            <span class="w-70 p-0">
                                <p class="fw-bold">The Future of Education On The Blockchain</p>
                                <p class="date">12 agustus 2022</p>
                            </span>
                        </div>
                        <div class="row small-card">
                            <img src="../asset/image/admin-artikel/bengkoang.png" alt="" class="w-30 h-100 my-auto">
                            <span class="w-70 p-0">
                                <p class="fw-bold">The Future of Education On The Blockchain</p>
                                <p class="date">12 agustus 2022</p>
                            </span>
                        </div>
                        <div class="row small-card">
                            <img src="../asset/image/admin-artikel/bengkoang.png" alt="" class="w-30 h-100 my-auto">
                            <span class="w-70 p-0">
                                <p class="fw-bold">The Future of Education On The Blockchain</p>
                                <p class="date">12 agustus 2022</p>
                            </span>
                        </div>
                        <div class="row small-card">
                            <img src="../asset/image/admin-artikel/bengkoang.png" alt="" class="w-30 h-100 my-auto">
                            <span class="w-70 p-0">
                                <p class="fw-bold">The Future of Education On The Blockchain</p>
                                <p class="date">12 agustus 2022</p>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>

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
            const pie = document.getElementById('pieChart').getContext('2d');
            const pieChart = new Chart(pie, {
                type: 'pie',
                data: {
                    labels: ['0', '1', '2'],
                    datasets: [{
                        label: 'Statistic',
                        data: [217, 541, 477],
                        backgroundColor: ['#B65EB1', '#D8B9FF', '#25005F'],
                        borderColor: '#fff',
                        borderWidth: 2
                    }]
                },
                options: {
                    plugins: {
                        legend: {
                            display: true,
                            position: 'bottom',
                        }
                    }
                },
                plugins: [ChartDataLabels],
                options: {
                    plugins: {
                        datalabels: {
                            color: '#fff',
                            font: {
                                size: 14,
                            },
                            formatter: (value) => {
                                return value + '%';
                            }
                        }
                    }
                }
            });
        }
        pieChart();
    })
</script>

<?= $this->endsection(); ?>