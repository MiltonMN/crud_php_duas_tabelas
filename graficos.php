<?php 
include 'data.php';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Gráfico de Pizza de Cidades</title>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>
<body>
    <canvas id="myChart" style="width: 15, height: 15;" ></canvas>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const maior300 = <?php echo $maior; ?>;
        const menor300 = <?php echo $menor; ?>;

        new Chart(ctx, {
            type: 'pie',
            data: {
                labels: ['Maior que 300', 'Menor que 300'],
                datasets: [{
                    label: 'Valor de contas',
                    data: [maior300, menor300],
                    backgroundColor: [
                        'rgba(54, 162, 235, 0.2)',
                        'rgba(255, 99, 132, 0.2)'
                    ],
                    borderColor: [
                        'rgba(54, 162, 235, 1)',
                        'rgba(255, 99, 132, 1)'
                    ],
                    borderWidth: 2,
                  

                }]
                
            }
        });
    </script>   

</body>
</html>