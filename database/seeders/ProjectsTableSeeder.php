<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Str;
use App\Models\Project;

class ProjectsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        Project::create([
            'name' => 'Sistema de Control y Manejo de Equipos',
            'slug' => Str::slug('Sistema de Control y Manejo de Equipos'),
            'description' => 'Sistema para el registro y manejo de equipos con usuarios administradores, operadores y clientes, mostrando gráficas de reportes y generando planillas de registro.',
            'image' => 'https://www.rammaheshwari.com/assets/jpeg/dopefolio.jpeg',
            'features' => 'Registro de equipos, Reportes, Gráficas, Planillas de registro',
        ]);

        Project::create([
            'name' => 'Web de Pedidos',
            'slug' => Str::slug('Web de Pedidos'),
            'description' => 'Plataforma web para realizar pedidos en línea de manera rápida y sencilla.',
            'image' => 'https://www.rammaheshwari.com/assets/jpeg/wilsonport.jpeg',
            'features' => 'Gestión de pedidos, Carrito de compras, Pagos en línea',
        ]);

        Project::create([
            'name' => 'Webshop',
            'slug' => Str::slug('Webshop'),
            'description' => 'Tienda en línea con catálogos de productos, gestión de inventarios y pagos integrados.',
            'image' => 'https://www.rammaheshwari.com/assets/jpeg/boreal-coffee-clone.jpeg',
            'features' => 'Catálogo de productos, Gestión de inventarios, Pagos integrados',
        ]);

        Project::create([
            'name' => 'Páginas Web Estáticas',
            'slug' => Str::slug('Páginas Web Estáticas'),
            'description' => 'Desarrollo de páginas web estáticas con diseños personalizados.',
            'image' => 'https://www.rammaheshwari.com/assets/jpeg/crown-template.jpeg',
            'features' => 'Diseños personalizados, Optimización SEO, Responsive Design',
        ]);
    }
}
