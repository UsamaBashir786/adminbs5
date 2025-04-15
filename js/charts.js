// Charts initialization
document.addEventListener('DOMContentLoaded', function () {
  // Monthly Revenue Chart
  const revenueChartCanvas = document.getElementById('revenueChart');
  if (revenueChartCanvas) {
      const revenueData = {
          labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
          datasets: [{
              label: 'Revenue',
              data: [12500, 15000, 17800, 14300, 19500, 21200, 22400, 24100, 20300, 25600, 28900, 32100],
              backgroundColor: 'rgba(13, 110, 253, 0.1)',
              borderColor: 'rgba(13, 110, 253, 1)',
              borderWidth: 2,
              pointBackgroundColor: 'rgba(13, 110, 253, 1)',
              pointBorderColor: '#fff',
              pointRadius: 4,
              tension: 0.3
          }]
      };

      const revenueConfig = {
          type: 'line',
          data: revenueData,
          options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                  legend: {
                      display: false
                  },
                  tooltip: {
                      mode: 'index',
                      intersect: false,
                      callbacks: {
                          label: function(context) {
                              let label = context.dataset.label || '';
                              if (label) {
                                  label += ': ';
                              }
                              label += new Intl.NumberFormat('en-US', { 
                                  style: 'currency', 
                                  currency: 'USD',
                                  minimumFractionDigits: 0
                              }).format(context.parsed.y);
                              return label;
                          }
                      }
                  }
              },
              scales: {
                  x: {
                      grid: {
                          display: false
                      }
                  },
                  y: {
                      beginAtZero: true,
                      ticks: {
                          callback: function(value) {
                              return '$' + value.toLocaleString();
                          }
                      }
                  }
              }
          }
      };

      new Chart(revenueChartCanvas, revenueConfig);
  }

  // Product Categories Chart
  const categoryChartCanvas = document.getElementById('categoryChart');
  if (categoryChartCanvas) {
      const categoryData = {
          labels: ['Electronics', 'Clothing', 'Furniture', 'Books', 'Beauty', 'Sports'],
          datasets: [{
              label: 'Products',
              data: [125, 98, 52, 78, 45, 35],
              backgroundColor: [
                  'rgba(13, 110, 253, 0.7)',
                  'rgba(40, 167, 69, 0.7)',
                  'rgba(220, 53, 69, 0.7)',
                  'rgba(255, 193, 7, 0.7)',
                  'rgba(23, 162, 184, 0.7)',
                  'rgba(111, 66, 193, 0.7)'
              ],
              borderWidth: 1
          }]
      };

      const categoryConfig = {
          type: 'bar',
          data: categoryData,
          options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                  legend: {
                      display: false
                  }
              },
              scales: {
                  x: {
                      grid: {
                          display: false
                      }
                  },
                  y: {
                      beginAtZero: true
                  }
              }
          }
      };

      new Chart(categoryChartCanvas, categoryConfig);
  }

  // Sales by Region Chart (for reports page)
  const regionChartCanvas = document.getElementById('regionChart');
  if (regionChartCanvas) {
      const regionData = {
          labels: ['North America', 'Europe', 'Asia', 'South America', 'Australia', 'Africa'],
          datasets: [{
              data: [45, 25, 20, 5, 3, 2],
              backgroundColor: [
                  'rgba(13, 110, 253, 0.7)',
                  'rgba(40, 167, 69, 0.7)',
                  'rgba(220, 53, 69, 0.7)',
                  'rgba(255, 193, 7, 0.7)',
                  'rgba(23, 162, 184, 0.7)',
                  'rgba(111, 66, 193, 0.7)'
              ],
              borderWidth: 1
          }]
      };

      const regionConfig = {
          type: 'doughnut',
          data: regionData,
          options: {
              responsive: true,
              maintainAspectRatio: false,
              plugins: {
                  legend: {
                      position: 'right'
                  },
                  tooltip: {
                      callbacks: {
                          label: function(context) {
                              const label = context.label || '';
                              const value = context.formattedValue;
                              const total = context.dataset.data.reduce((acc, data) => acc + data, 0);
                              const percentage = Math.round((context.raw / total) * 100);
                              return `${label}: ${value} (${percentage}%)`;
                          }
                      }
                  }
              }
          }
      };

      if (regionChartCanvas) {
          new Chart(regionChartCanvas, regionConfig);
      }
  }
});