<h4>Jumlah Penjualan Barang</h4>
<canvas id="myChart"></canvas>
<h1 id="labels"></h1>
<h1 id="datas"></h1>


<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script type="text/javascript">
    var ctx = document.getElementById('myChart').getContext('2d');
    
    var chart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels:[
        @for($i = 0; $i < count($labels); $i++)
            '{{ $labels[$i] }}',
        @endfor
        ],
        datasets: [{
            label: 'Jumlah Penjualan',
            data: {{ $datas }},
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

