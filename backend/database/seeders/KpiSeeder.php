<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Kpi;

class KpiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kpi::create([
            'titulo' => 'Vendas do Dia',
            'valor' => 1280.50,
            'variacao_percentual' => 5.2
        ]);
        Kpi::create([
            'titulo' => 'Visitas do Site',
            'valor' => 3500,
            'variacao_percentual' => -3.4
        ]);
        Kpi::create([
            'titulo' => 'Novos Usuários',
            'valor' => 57,
            'variacao_percentual' => 1.8
        ]);
        Kpi::create([
            'titulo' => 'Pedidos Finalizados',
            'valor' => 132,
            'variacao_percentual' => 0.0
        ]);
    }
}
