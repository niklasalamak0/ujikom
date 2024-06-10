@extends('layouts.admin')
@if (Auth::user()->role == 'admin')
    @section('content')
        <div class="container-fluid px-4">
            <a href="{{route('login')}}"><h1 class="mt-4">Dashboard</h1></a>
            <div class="row">
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-primary text-white mb-4">
                        <div class="card-body">Data User</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">
                                {{ $usercount }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-black text-white mb-4">
                        <div class="card-body">Data Kategori</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">
                                {{ $kategoricount }}
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-xl-4 col-md-6">
                    <div class="card bg-success text-white mb-4">
                        <div class="card-body">Data Barang</div>
                        <div class="card-footer d-flex align-items-center justify-content-between">
                            <a class="small text-white stretched-link" href="#">
                                {{ $jmlbrgcount }}
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-pie me-1"></i>
                            Pie Chart Example
                        </div>
                        <div class="card-body"><canvas id="myPieChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Bar Chart Example
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@else
    @section('content')
        <div class="container-fluid px-4">
            <h1 class="mt-4">Dashboard</h1>
            <div class="card mt-3">
                <div class="card-header">
                    Stok Barang Saat ini
                </div>
                <div class="card-body">
                    <table id="dsGudang">
                        <thead>
                            <tr>
                                <th>No</th>
                                <th>Nama Barang</th>
                                <th>Kategori</th>
                                <th>Stok</th>
                                <th>Harga</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($data as $k => $i)
                                <tr>
                                    <td>{{ $k + 1 }}</td>
                                    <td>{{ $i->nama_barang }}</td>
                                    <td>{{ $i->nama_kategori }}</td>
                                    <td>{{ $i->stok }}</td>
                                    <td>{{ $i->harga }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="row mt-3">
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-pie me-1"></i>
                            Pie Chart Example
                        </div>
                        <div class="card-body"><canvas id="myPieChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
                <div class="col-xl-6">
                    <div class="card mb-4">
                        <div class="card-header">
                            <i class="fas fa-chart-bar me-1"></i>
                            Bar Chart Example
                        </div>
                        <div class="card-body"><canvas id="myBarChart" width="100%" height="40"></canvas></div>
                    </div>
                </div>
            </div>
        </div>
    @endsection
@endif

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Pie Chart
    var ctx = document.getElementById("myPieChart").getContext('2d');
    var myPieChart = new Chart(ctx, {
        type: 'pie',
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                data: [10, 20, 30, 40, 50, 60],
                backgroundColor: ['#FF6384', '#36A2EB', '#FFCE56', '#4BC0C0', '#9966FF', '#FF9F40'],
            }],
        },
    });

    // Bar Chart
    var ctx = document.getElementById("myBarChart").getContext('2d');
    var myBarChart = new Chart(ctx, {
        type: 'bar',
        data: {
            labels: ["January", "February", "March", "April", "May", "June"],
            datasets: [{
                label: 'Dataset',
                data: [5, 10, 15, 20, 25, 30],
                backgroundColor: '#007bff',
            }],
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true,
                },
            },
        },
    });
});
</script>
