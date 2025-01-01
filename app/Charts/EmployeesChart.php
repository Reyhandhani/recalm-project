<?php

namespace App\Charts;

use App\Models\notes;
use ArielMejiaDev\LarapexCharts\LarapexChart;

class EmployeesChart
{
    protected $chart;

    public function __construct(LarapexChart $chart)
    {
        $this->chart = $chart;
    }

    public function build(): \ArielMejiaDev\LarapexCharts\LineChart
    {
    // Ambil data berdasarkan mood
    // Tentukan hari-hari dalam seminggu untuk sumbu X
    $daysOfWeek = ['Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu', 'Minggu'];

    // Array untuk menyimpan jumlah mood per hari
    $senangData = [];
    $sedihData = [];
    $marahData = [];

    // Loop untuk menghitung jumlah mood pada setiap hari dalam seminggu
    foreach ($daysOfWeek as $index => $day) {
        // Hitung jumlah mood "senang" pada hari tertentu
        $senangData[] = Notes::where('mood', 'senang')
            ->whereRaw('DAYOFWEEK(created_at) = ?', [$index + 2]) // Dimulai dari 2 (Senin) sampai 7 (Minggu)
            ->count();

        // Hitung jumlah mood "sedih" pada hari tertentu
        $sedihData[] = Notes::where('mood', 'sedih')
            ->whereRaw('DAYOFWEEK(created_at) = ?', [$index + 2])
            ->count();

        // Hitung jumlah mood "marah" pada hari tertentu
        $marahData[] = Notes::where('mood', 'marah')
            ->whereRaw('DAYOFWEEK(created_at) = ?', [$index + 2])
            ->count();
    }

    // Membangun grafik
    return $this->chart->lineChart()
        ->setTitle('Mood Chart.')
        ->setSubtitle('Mood trends over time.')
        ->addData('Senang', $senangData)
        ->addData('Sedih', $sedihData)
        ->addData('Marah', $marahData)
        ->setXAxis($daysOfWeek); // Menampilkan hari Senin sampai Minggu dari kiri ke kanan
}
}
