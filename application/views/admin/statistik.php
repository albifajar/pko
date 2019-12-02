<div class="main float-right" style="margin: 30px auto 0"><div style="width: 90%;"><canvas id="myChart"></canvas></div></div>
<script src="<?= base_url('assets/')?>chart/chart.min.js"></script>
<script src="<?= base_url('assets/')?>chart/chart.bundle.min.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ["<?= $data['nama']?>"],
        datasets: [{
            data: ["<?= $data['jumlah_pemilih']?>"],
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                 'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)'
            ],
            borderWidth: 1
        }]
    }
});
</script>