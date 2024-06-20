
<!-- ----- début viewAll -->
<?php
//require_once '../../outil/session_check.php';
require ($root . '/app/view/fragment/fragmentPatrimoineHeader.html');
//checkSession();
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentPatrimoineMenu.php';
        include $root . '/app/view/fragment/fragmentPatrimoineJumbotron.html';
        ?>

        <h2 class="text-info bg-white">Statistics du System</h2>
        <?php
// Fetch data for the charts (this is just a placeholder, replace with your actual data fetching logic)
        $barChartData = [$nombreBanque, $nombrePersonne, 3, 5, 2, 3];
        $barChartLabels = ['Banque', 'Personne', 'Yellow', 'Green', 'Purple', 'Orange'];

        $pieChartData = [$nombreBanque, $nombrePersonne, 3, 5, 2, 3];
        $pieChartLabels = ['Banque', 'Personne', 'Yellow', 'Green', 'Purple', 'Orange'];
        ?>

        <div class="container mt-5">
            <h1 class="mb-4">Charts with Bootstrap and Chart.js</h1>

            <div class="row">
                <div class="col-md-6">
                    <canvas id="barChart"></canvas>
                </div>
                <div class="col-md-6">
                    <canvas id="pieChart"></canvas>
                </div>
            </div>
        </div>

        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Bar Chart
                var barCtx = document.getElementById('barChart').getContext('2d');
                var barChart = new Chart(barCtx, {
                    type: 'bar',
                    data: {
                        labels: <?php echo json_encode($barChartLabels); ?>,
                        datasets: [{
                                label: '# of Votes',
                                data: <?php echo json_encode($barChartData); ?>,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true
                            }
                        }
                    }
                });

                // Pie Chart
                var pieCtx = document.getElementById('pieChart').getContext('2d');
                var pieChart = new Chart(pieCtx, {
                    type: 'pie',
                    data: {
                        labels: <?php echo json_encode($pieChartLabels); ?>,
                        datasets: [{
                                label: '# of Votes',
                                data: <?php echo json_encode($pieChartData); ?>,
                                backgroundColor: [
                                    'rgba(255, 99, 132, 0.2)',
                                    'rgba(54, 162, 235, 0.2)',
                                    'rgba(255, 206, 86, 0.2)',
                                    'rgba(75, 192, 192, 0.2)',
                                    'rgba(153, 102, 255, 0.2)',
                                    'rgba(255, 159, 64, 0.2)'
                                ],
                                borderColor: [
                                    'rgba(255, 99, 132, 1)',
                                    'rgba(54, 162, 235, 1)',
                                    'rgba(255, 206, 86, 1)',
                                    'rgba(75, 192, 192, 1)',
                                    'rgba(153, 102, 255, 1)',
                                    'rgba(255, 159, 64, 1)'
                                ],
                                borderWidth: 1
                            }]
                    }
                });
            });
        </script>


    </div>
    <?php include $root . '/app/view/fragment/fragmentPatrimoineFooter.html'; ?>

    <!-- ----- fin viewAll -->




