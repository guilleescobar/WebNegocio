@extends('layouts.app')

@section('title', 'Servicios')

@section('content')
    <div class="container services-page">
        <h1>Nuestros Servicios en Tienda</h1>
        <p>En Elite Pitch Soccer no solo vendemos productos, ofrecemos una experiencia completa para asegurarnos de que rindas al máximo en cada partido.</p>
        
        <ul class="services-list">
            <li>
                <strong>Estudio de Pisada y Ajuste de Botas:</strong> 
                <p>Contamos con tecnología láser para analizar tu forma de correr. Te recomendamos la bota ideal dependiendo de la fisionomía de tu pie para prevenir ampollas y lesiones a largo plazo.</p>
            </li>
            <li>
                <strong>Personalización de Camisetas:</strong>
                <p>Estampamos tu nombre y número al instante con la tipografía oficial de las mejores ligas del mundo (LaLiga, Premier League, Serie A). Utilizamos vinilos de alta durabilidad.</p>
            </li>
            <li>
                <strong>Mantenimiento de Calzado:</strong>
                <p>Servicio exclusivo de limpieza profunda, reparación de costuras y reemplazo de tacos de aluminio para alargar drásticamente la vida útil de tus botas favoritas.</p>
            </li>
        </ul>
        
        <div class="cta-section">
            <p>¿Interesado en agendar alguno de nuestros servicios especiales con nuestros expertos?</p>
            <a href="/contact" class="btn btn-secondary">Contacta con nosotros ahora</a>
        </div>
    </div>
@endsection
