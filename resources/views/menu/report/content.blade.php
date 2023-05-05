<h1>Jumlah Penjualan Barang</h1>
<canvas id="myChart"></canvas>

<script src="https://cdn.jsdelivr.net/npm/chart.js">
    const ctx = document.getElementById('myChart');
    
    new Chart(ctx, {
        type: 'bar',
        data: {
            labels: [
                @foreach ($items as $item)
                    {{ $item['nama_barang'] }},
                @endforeach
            ],
            datasets: [{
            label: 'Jumlah Penjualan',
            data: [
                @foreach ($items as $item)
                    {{ $item['qty'] }},
                @endforeach
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

</script>
