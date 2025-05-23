<?php
require_once('../includes/auth.php');
require_admin();
include('../includes/header.php');
include('../includes/navbar.php');
?>

<div class="container mt-4">
    <h2>Reports & Analytics</h2>
    <div class="row">
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Room Occupancy (Monthly)</h5>
                    <!-- Example Chart.js canvas -->
                    <canvas id="occupancyChart" height="200"></canvas>
                </div>
            </div>
        </div>
        <div class="col-md-6 mb-4">
            <div class="card shadow-sm">
                <div class="card-body">
                    <h5>Fee Collection Status</h5>
                    <canvas id="feeChart" height="200"></canvas>
                </div>
            </div>
        </div>
    </div>
    <!-- Add more analytics as needed -->
</div>

<!-- Chart.js CDN (for charts) -->
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    // Example data, replace with PHP-generated data as needed
    var ctx1 = document.getElementById('occupancyChart').getContext('2d');
    new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May'],
            datasets: [{
                label: 'Occupied Rooms',
                data: [50, 60, 70, 65, 80],
                backgroundColor: '#007bff'
            }]
        }
    });

    var ctx2 = document.getElementById('feeChart').getContext('2d');
    new Chart(ctx2, {
        type: 'pie',
        data: {
            labels: ['Paid', 'Pending', 'Overdue'],
            datasets: [{
                data: [70, 20, 10],
                backgroundColor: ['#28a745', '#ffc107', '#dc3545']
            }]
        }
    });
});
</script>

<?php include('../includes/footer.php'); ?>
