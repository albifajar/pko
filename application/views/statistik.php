<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="<?=base_url()?>/assets/css/style.css">
  <script src="<?= base_url('assets/')?>jquery-3.4.1.min.js"></script>
  <link rel="stylesheet" href="<?= base_url('assets/')?>bootstrap/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?=base_url('assets/')?>font-awesome/css/font-awesome.min.css">  
  <link rel="stylesheet" href="<?=base_url('assets/')?>chart/chart.min.css">  
</head>
<body>
	<div id="particles-js">
<div style="width: 80%;margin: 40px 10% 0; padding: 50px; background-color: white; position: absolute;"><canvas id="myChart"></canvas></div>
</div>
<script src="<?= base_url('assets/')?>chart/chart.min.js"></script>
<script src="<?= base_url('assets/')?>chart/chart.bundle.min.js"></script>
<script>
var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: [<?= $data['nama']?>],
        datasets: [{
            data: [<?= $data['jumlah_pemilih']?>],
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
            yAxes: [{
                ticks: {
                    beginAtZero: true
                }
            }]
        }
    }
});
</script>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="<?= base_url('assets/')?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?=base_url()?>/assets/js/particles.min.js"></script>
    <script src="<?=base_url()?>/assets/js/app.js"></script>
    <script src="<?=base_url()?>/assets/js/script.js"></script>
    
    <script type="text/javascript">
      $(".textbox input").focus(function(){
        $(this).addClass("focus");
        $(".textbox input").css("border-bottom","1px solid white");
      });
    </script>
</body>
</html>