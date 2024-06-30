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
            'description' => "El Sistema de Control y Manejo de Equipos permite registrar y administrar equipos con diferentes roles de usuario. Los administradores pueden agregar, actualizar y eliminar equipos, así como ver reportes detallados. Los operadores pueden ingresar y actualizar información de los equipos, y los clientes pueden visualizar el estado de sus equipos y los reportes asociados.\n\nNuestro Sistema de Control y Manejo de Equipos proporciona una plataforma robusta para la gestión eficiente de equipos con múltiples roles de usuario. Los administradores tienen control total sobre el registro y la gestión de equipos, con acceso a reportes detallados y análisis gráficos. Los operadores pueden actualizar información en tiempo real, asegurando un mantenimiento efectivo. Ideal para empresas que requieren una gestión precisa y transparente de sus activos.",
            'image' => 'https://www.rammaheshwari.com/assets/jpeg/dopefolio.jpeg',
            'features' => 'Registro de equipos, Reportes, Gráficas, Planillas de registro',
            'short_description' => 'Sistema para registrar y administrar equipos con roles de usuario y reportes detallados.'
        ]);

        Project::create([
            'name' => 'Web de Pedidos',
            'slug' => Str::slug('Web de Pedidos'),
            'description' => "La plataforma Web de Pedidos está diseñada para facilitar la realización de pedidos en línea de manera rápida y sencilla. Los usuarios pueden navegar por el catálogo de productos, agregar artículos a su carrito de compras, y proceder al pago en línea de forma segura. Además, incluye opciones para gestionar el estado de los pedidos y recibir notificaciones sobre el progreso del pedido hasta su entrega.\n\nLa **Web de Pedidos** ofrece una experiencia de compra eficiente con navegación intuitiva, integración de pagos seguros y gestión avanzada de pedidos. Ideal para negocios que buscan simplificar el proceso de compra en línea y mejorar la satisfacción del cliente.",
            'image' => 'https://www.rammaheshwari.com/assets/jpeg/wilsonport.jpeg',
            'features' => 'Gestión de pedidos, Carrito de compras, Pagos en línea',
            'short_description' => 'Plataforma web para pedidos en línea de manera rápida y sencilla.'
        ]);

        Project::create([
            'name' => 'Webshop',
            'slug' => Str::slug('Webshop'),
            'description' => "El Webshop es una tienda en línea completa que ofrece un catálogo de productos detallado, gestión de inventarios, y opciones de pago integradas. Los administradores pueden agregar y actualizar productos, gestionar el inventario en tiempo real, y procesar pagos de manera segura. Los clientes pueden navegar por las categorías de productos, ver descripciones detalladas y realizar compras fácilmente. Incluye herramientas de análisis para monitorizar el rendimiento de ventas y la popularidad de los productos.\n\nCon una interfaz intuitiva y funciones avanzadas, la Web de Pedidos proporciona una solución integral para empresas que buscan optimizar sus operaciones de ventas en línea. Los clientes pueden disfrutar de un proceso de compra fluido desde la selección de productos hasta el pago seguro. Los administradores tienen acceso completo para gestionar pedidos, actualizar inventarios y analizar el rendimiento de ventas, asegurando eficiencia y satisfacción del cliente en cada transacción.",
            'image' => 'https://www.rammaheshwari.com/assets/jpeg/boreal-coffee-clone.jpeg',
            'features' => 'Catálogo de productos, Gestión de inventarios, Pagos integrados',
            'short_description' => 'Tienda en línea con catálogo de productos, gestión de inventarios y pagos integrados.'
        ]);

        Project::create([
            'name' => 'Páginas Web Estáticas',
            'slug' => Str::slug('Páginas Web Estáticas'),
            'description' => "El desarrollo de Páginas Web Estáticas se centra en la creación de sitios web personalizados con diseños únicos. Cada página es optimizada para SEO para mejorar su visibilidad en motores de búsqueda y está diseñada para ser completamente responsiva, adaptándose a diferentes dispositivos y tamaños de pantalla. Ideal para empresas que necesitan una presencia en línea profesional y efectiva sin la necesidad de funcionalidades dinámicas complejas.\n\nNuestro servicio de desarrollo de Páginas Web Estáticas se enfoca en ofrecer soluciones visuales impactantes y funcionales para empresas y profesionales que buscan destacar en línea. Cada página está meticulosamente diseñada para reflejar la identidad única de tu marca, optimizada para SEO y completamente adaptable a cualquier dispositivo. Es la opción perfecta para aquellos que buscan una presencia web profesional y accesible desde cualquier lugar.",
            'image' => 'https://www.rammaheshwari.com/assets/jpeg/crown-template.jpeg',
            'features' => 'Diseños personalizados, Optimización SEO, Responsive Design',
            'short_description' => 'Desarrollo de páginas web estáticas con diseños personalizados y optimización SEO.'
        ]);
    }
}
