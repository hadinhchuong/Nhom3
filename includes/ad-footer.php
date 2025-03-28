<script>
  document.addEventListener('DOMContentLoaded', function () {
    const ctx = document.getElementById('revenueChart');
    if (ctx) {
      const chartCtx = ctx.getContext('2d');
      const gradient = chartCtx.createLinearGradient(0, 0, 0, 400);
      gradient.addColorStop(0, 'rgba(59, 130, 246, 0.5)');
      gradient.addColorStop(1, 'rgba(59, 130, 246, 0.1)');

      new Chart(chartCtx, {
        type: 'line',
        data: {
          labels: ['T2', 'T3', 'T4', 'T5', 'T6', 'T7', 'CN'],
          datasets: [{
            label: 'Doanh Thu',
            data: [120000, 150000, 180000, 200000, 230000, 260000, 300000],
            borderColor: '#3B82F6',
            backgroundColor: gradient,
            tension: 0.4,
            borderWidth: 3,
            pointBackgroundColor: '#3B82F6',
            pointBorderColor: 'white',
            pointHoverRadius: 8,
            fill: true
          }]
        },
        options: {
          responsive: true,
          maintainAspectRatio: false,
          scales: {
            y: { beginAtZero: true, grid: { color: 'rgba(0,0,0,0.05)' } },
            x: { grid: { display: false } }
          },
          plugins: {
            legend: { display: false },
            tooltip: {
              backgroundColor: '#3B82F6',
              titleColor: 'white',
              bodyColor: 'white'
            }
          }
        }
      });
    }
  });
</script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
