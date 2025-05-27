<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Hashtag Dashboard</title>
  <link rel="stylesheet" href="css/dashboard.css" />
</head>
<body>
    <!-- Main Dashboard Container -->
  <div class="dashboard">
    <h1> ReadScape Analytics Dashboard</h1>

    <!-- Section: Chart Visualizations -->
    <div class="charts">
       <!-- Line Chart: Hashtag usage throughout the week -->
      <div class="chart-card">
        <h2>ReadScape Hashtag Usage Over Time</h2>
        <canvas id="lineChart"></canvas>
      </div>
       <!-- Area Chart: Hashtag growth by week -->
      <div class="chart-card">
        <h2>ReadScape – Hashtag Growth</h2>
        <canvas id="areaChart"></canvas>
      </div>
       <!-- Bar Chart: Top performing hashtags -->
      <div class="chart-card">
        <h2>ReadScape– Top Hashtags</h2>
        <canvas id="barChart"></canvas>
      </div>
    </div>

    <!-- Section: Progress Bars for Performance Summary -->
    <div class="progress-section">
      <h2>ReadScape Performance</h2>

     <!-- Progress for #Books -->
      <div class="progress-bar-group">
        <label>#Books - 150%</label>
        <div class="progress-bar">
          <div class="progress-fill" style="width: 90%; background-color: #8E44AD;"></div>
        </div>
      </div>

       <!-- Progress for #ReadScape -->
      <div class="progress-bar-group">
        <label>#ReadScape - 120%</label>
        <div class="progress-bar">
          <div class="progress-fill" style="width: 75%; background-color: #36A2EB;"></div>
        </div>
      </div>

      <!-- Progress for #StudyTime -->
      <div class="progress-bar-group">
        <label>#StudyTime - 110%</label>
        <div class="progress-bar">
          <div class="progress-fill" style="width: 60%; background-color: #2ECC71;"></div>
        </div>
      </div>
    </div>
  </div>

  <!-- Chart.js CDN for rendering the charts -->
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

 <!-- Script: Chart configurations -->
  <script>
    // Line Graph - Hashtag Usage Over Time
    const lineCtx = document.getElementById('lineChart').getContext('2d');
    new Chart(lineCtx, {
      type: 'line',
      data: {
        labels: ['Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat', 'Sun'],
        datasets: [{
          label: '#ReadScape',
          data: [12, 19, 3, 5, 2, 20, 30],
          borderColor: '#4A90E2',
          fill: false,
          tension: 0.3
        }]
      },
      options: { responsive: true }
    });

    // Area Chart - Hashtag Growth
    const areaCtx = document.getElementById('areaChart').getContext('2d');
    new Chart(areaCtx, {
      type: 'line',
      data: {
        labels: ['Week 1', 'Week 2', 'Week 3', 'Week 4'],
        datasets: [{
          label: '#StudyTime',
          data: [40, 55, 70, 95],
          backgroundColor: 'rgba(76, 175, 80, 0.4)',
          borderColor: 'rgba(76, 175, 80, 1)',
          fill: true,
          tension: 0.4
        }]
      },
      options: { responsive: true }
    });

    // Bar Chart - Top Hashtags
    const barCtx = document.getElementById('barChart').getContext('2d');
    new Chart(barCtx, {
      type: 'bar',
      data: {
        labels: ['#Read', '#ReadScape', '#Library', '#Books', '#StudyTime'],
        datasets: [{
          label: 'Mentions',
          data: [90, 120, 70, 150, 110],
          backgroundColor: [
            '#FF6384', '#36A2EB', '#FFCE56', '#8E44AD', '#2ECC71'
          ]
        }]
      },
      options: {
        responsive: true,
        indexAxis: 'y'
      }
    });
  </script>
</body>
</html>
