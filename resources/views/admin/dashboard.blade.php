@extends('layouts.admin')
@section('content')
    <div class="flex-1 bg-gray-50">
        <div class="flex justify-between items-center mb-8">
            <div class="relative w-70">
                <input type="text" placeholder="Search" class="border rounded p-2 pl-10 w-full">
                <div class="absolute inset-y-0 left-40 flex items-center pl-3 pointer-events-none">
                    <svg class="w-5 h-5 text-gray-400" fill="none" stroke="currentColor" stroke-width="2"
                        viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M21 21l-4.35-4.35m0 0A7.5 7.5 0 1110.5 3a7.5 7.5 0 016.15 13.65z" />
                    </svg>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <div class="text-right">
                    <div class="font-semibold text-gray-800 text-md">{{ Auth::user()->name }}</div>
                    <div class="text-sm text-gray-500">{{ Auth::user()->identification_number }}</div>
                </div>
                <img src="{{ asset('images/profile.jpeg') }}" alt="Profile" class="w-12 h-12 rounded-full">
            </div>
        </div>

        <div class="row mb-5">


            <div class="card">
                <div class="card-body">
                    <h5 class="card-title text-center">Grafik Nilai Rata-Rata</h5>
                    <canvas id="chartNilai"></canvas>
                </div>
            </div>

        </div>


        <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
        <script>
            const ctx = document.getElementById('chartNilai').getContext('2d');
            const chartNilai = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: ['Kelas 7', 'Kelas 8', 'Kelas 9'],
                    datasets: [{
                        label: 'Rata-rata Nilai',
                        data: [80, 85, 82],
                        backgroundColor: [
                            'rgba(0, 123, 255, 0.7)',
                            'rgba(40, 167, 69, 0.7)',
                            'rgba(255, 193, 7, 0.7)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true,
                            max: 100
                        }
                    }
                }
            });
        </script>



    </div>
@endsection
