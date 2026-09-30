@extends('layouts.app')

@section('title', 'Contacto')

@section('content')
    <div class="container contact-page">
        <h1>Ponte en Contacto</h1>
        <p>¿Tienes dudas sobre tallas, disponibilidad de la nueva colección o quieres agendar un estudio de pisada? Escríbenos y un experto te atenderá en menos de 24 horas.</p>
        
        <div class="contact-grid">
            <div class="contact-info">
                <h3>Visítanos en nuestra sede principal</h3>
                <p>Avenida del Estadio, 10<br>Madrid, 28014<br>España</p>
                
                <h3>Horario de Atención</h3>
                <p>Lunes a Sábado: 10:00 - 21:00<br>Domingos: Cerrado</p>
                
                <h3>Teléfono Directo</h3>
                <p>+34 91 123 45 67</p>
            </div>
            
            <div class="contact-form-container">
                <form action="#" method="POST" class="contact-form">
                    <div class="form-group">
                        <label for="name">Nombre Completo</label>
                        <input type="text" id="name" name="name" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Correo Electrónico</label>
                        <input type="email" id="email" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="subject">Asunto</label>
                        <input type="text" id="subject" name="subject" required>
                    </div>
                    <div class="form-group">
                        <label for="message">Mensaje o Consulta</label>
                        <textarea id="message" name="message" rows="5" required></textarea>
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar Mensaje</button>
                </form>
            </div>
        </div>
    </div>
@endsection
