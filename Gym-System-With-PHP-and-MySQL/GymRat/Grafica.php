
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<style>
    .chart-container {
        display: flex;
        justify-content: center;
        width: 600px;
        /* Ancho deseado */
        height: 300px;
        /* Alto deseado */
        margin: auto;
        /* Centrar el contenedor */
    }
</style>

<body>
    <div class="chart-container">
        <canvas id="weightChart"></canvas>
    </div>
    <script>
        // Datos de ejemplo de peso (fechas y pesos)
        const dates = <?php echo json_encode($dates); ?>;
        const weights =  <?php echo json_encode($weights); ?>; // Ejemplo de pesos en kilogramos


        // Ejemplo de pesos en kilogramos

        // Obtener el contexto del lienzo de la gráfica
        const ctx = document.getElementById('weightChart').getContext('2d');

        // Crear la gráfica de línea
        const chart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: dates,
                datasets: [{
                    label: 'Weight (kg)',
                    data: weights,
                    backgroundColor: 'rgba(255, 99, 132, 0.2)',
                    borderColor: 'rgba(255, 99, 132, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true,
                        ticks: {
                            stepSize: 10 // Ajusta el paso de la escala en el eje y
                        }
                    }
                }
            }
        });
    </script>
</body>

</html>