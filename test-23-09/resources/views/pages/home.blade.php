@extends('layouts.app')

@section('title', 'Inicio')

@section('content')
    <!-- Main Hero Carousel/Banner -->
    <section class="main-hero">
        <div class="hero-slider">
            <!-- Simulated Slider Item -->
            <div class="hero-item" style="background-image: url('{{ asset('images/hero.jpg') }}');">
                <div class="hero-content-box">
                    <h2>NUEVA COLECCIÓN ELITE</h2>
                    <h1>DOMINA EL CAMPO</h1>
                    <p>Las últimas botas de gama alta ya están disponibles en BluePitch. Diseño ligero, tracción explosiva y control absoluto del balón.</p>
                    <a href="/services" class="btn btn-primary">Comprar Ahora</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Top Categories / Brands Banner -->
    <section class="brand-bar container">
        <div class="brand-logos">
            <span>NIKE</span>
            <span>ADIDAS</span>
            <span>PUMA</span>
            <span>NEW BALANCE</span>
            <span>MIZUNO</span>
        </div>
    </section>

    <!-- Product Grid: Botas -->
    <section class="product-section container">
        <div class="section-header">
            <h2>Novedades en Botas</h2>
            <a href="/services" class="view-all">Ver todas</a>
        </div>
        
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/boot1.jpg') }}" alt="Nike Mercurial" style="height: 250px; width: 100%; object-fit: cover; border-radius: 4px;">
                    <span class="badge new">NUEVO</span>
                </div>
                <div class="product-info">
                    <h3 class="product-title">Nike Zoom Mercurial Superfly 9 Elite</h3>
                    <p class="product-price">279,99 €</p>
                    <p style="font-size:0.8rem; color:var(--text-gray); margin-top:5px;">Velocidad pura y reactividad con cámara Zoom Air.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/boot2.jpg') }}" alt="adidas Predator" style="height: 250px; width: 100%; object-fit: cover; border-radius: 4px;">
                </div>
                <div class="product-info">
                    <h3 class="product-title">adidas Predator Accuracy.1</h3>
                    <p class="product-price">259,99 €</p>
                    <p style="font-size:0.8rem; color:var(--text-gray); margin-top:5px;">Toque letal con elementos de goma High-Definition Grip.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/boot3.jpg') }}" alt="Puma Future" style="height: 250px; width: 100%; object-fit: cover; border-radius: 4px;">
                    <span class="badge discount">-20%</span>
                </div>
                <div class="product-info">
                    <h3 class="product-title">Puma Future Ultimate FG/AG</h3>
                    <p class="product-price"><span class="old-price">220,00 €</span> 176,00 €</p>
                    <p style="font-size:0.8rem; color:var(--text-gray); margin-top:5px;">Ajuste adaptativo FUZIONFIT360 para creadores de juego.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/boot4.jpg') }}" alt="Nike Phantom" style="height: 250px; width: 100%; object-fit: cover; border-radius: 4px;">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Nike Phantom GX Elite</h3>
                    <p class="product-price">269,99 €</p>
                    <p style="font-size:0.8rem; color:var(--text-gray); margin-top:5px;">Precisión inigualable con hilo Nike Gripknit.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Player Endorsement Banner (Pro Level) -->
    <section class="endorsement-banner" style="background-image: linear-gradient(90deg, rgba(0,0,0,0.9) 0%, rgba(0,0,0,0.3) 100%), url('https://images.unsplash.com/photo-1518605368461-1eb5d45d3159?q=80&w=1600&auto=format&fit=crop');">
        <div class="container endorsement-content">
            <h2>JUEGA COMO LOS PROFESIONALES</h2>
            <p>Descubre el equipamiento exacto que utilizan tus ídolos en los estadios más grandes de Europa. Siente la diferencia de llevar material 100% Elite.</p>
            <a href="/services" class="btn btn-primary">Ver Colección Elite</a>
        </div>
    </section>

    <!-- Product Grid: Ropa -->
    <section class="product-section container">
        <div class="section-header">
            <h2>Ropa de Clubes y Entrenamiento</h2>
            <a href="/services" class="view-all">Ver catálogo</a>
        </div>
        
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/apparel1.jpg') }}" alt="Camiseta Local" style="height: 250px; width: 100%; object-fit: cover; border-radius: 4px;">
                    <span class="badge new">OFICIAL</span>
                </div>
                <div class="product-info">
                    <h3 class="product-title">Camiseta 1ª Equipación Royal Lions 24/25</h3>
                    <p class="product-price">95,00 €</p>
                    <p style="font-size:0.8rem; color:var(--text-gray); margin-top:5px;">Tejido transpirable con tecnología de absorción.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/apparel2.jpg') }}" alt="Camiseta Visitante" style="height: 250px; width: 100%; object-fit: cover; border-radius: 4px;">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Camiseta 2ª Equipación BluePitch 24/25</h3>
                    <p class="product-price">89,95 €</p>
                    <p style="font-size:0.8rem; color:var(--text-gray); margin-top:5px;">Diseño oscuro y elegante para los partidos fuera.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/apparel3.jpg') }}" alt="Pantalón Entrenamiento" style="height: 250px; width: 100%; object-fit: cover; border-radius: 4px;">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Pantalón Corto Training Pro</h3>
                    <p class="product-price">35,00 €</p>
                    <p style="font-size:0.8rem; color:var(--text-gray); margin-top:5px;">Ligereza y máxima libertad de movimiento.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="{{ asset('images/apparel4.jpg') }}" alt="Chándal Entrenamiento" style="height: 250px; width: 100%; object-fit: cover; border-radius: 4px;">
                    <span class="badge discount">-15%</span>
                </div>
                <div class="product-info">
                    <h3 class="product-title">Chándal de Entrenamiento Club Elite</h3>
                    <p class="product-price"><span class="old-price">120,00 €</span> 102,00 €</p>
                    <p style="font-size:0.8rem; color:var(--text-gray); margin-top:5px;">Conjunto completo de chaqueta y pantalón técnico.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Accesorios Pro -->
    <section class="product-section container">
        <div class="section-header">
            <h2>Accesorios Pro</h2>
            <a href="/services" class="view-all">Explorar accesorios</a>
        </div>
        
        <div class="product-grid">
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1614632537197-38a17061c2bd?q=80&w=400&auto=format&fit=crop" alt="Balón" style="height: 250px; width: 100%; object-fit: cover; border-radius: 4px;">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Balón Oficial Training Pro</h3>
                    <p class="product-price">35,00 €</p>
                    <p style="font-size:0.8rem; color:var(--text-gray); margin-top:5px;">Durabilidad y vuelo preciso para entrenamientos diarios.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1553062407-98eeb64c6a62?q=80&w=400&auto=format&fit=crop" alt="Mochila" style="height: 250px; width: 100%; object-fit: cover; border-radius: 4px;">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Mochila Teamwear 30L</h3>
                    <p class="product-price">45,00 €</p>
                    <p style="font-size:0.8rem; color:var(--text-gray); margin-top:5px;">Compartimento impermeable para botas y ropa húmeda.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1602143407151-7111542de6e8?q=80&w=400&auto=format&fit=crop" alt="Botella" style="height: 250px; width: 100%; object-fit: cover; border-radius: 4px;">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Botella Térmica BluePitch</h3>
                    <p class="product-price">20,00 €</p>
                    <p style="font-size:0.8rem; color:var(--text-gray); margin-top:5px;">Mantiene el agua helada durante 24 horas.</p>
                </div>
            </div>
            <div class="product-card">
                <div class="product-image">
                    <img src="https://images.unsplash.com/photo-1511886929837-354d827aae26?q=80&w=400&auto=format&fit=crop" alt="Botas Extras" style="height: 250px; width: 100%; object-fit: cover; border-radius: 4px;">
                </div>
                <div class="product-info">
                    <h3 class="product-title">Bolsa para Botas Premium</h3>
                    <p class="product-price">15,00 €</p>
                    <p style="font-size:0.8rem; color:var(--text-gray); margin-top:5px;">Protege tus botas con tejido transpirable.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Promo Banner Grid -->
    <section class="promo-grid container">
        <div class="promo-box promo-1" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/promo1.jpg') }}');">
            <div class="promo-content">
                <h3>EQUIPACIONES OFICIALES</h3>
                <p style="color:#ddd; margin-bottom:20px; font-size:1.1rem;">Viste los colores de tu equipo favorito esta temporada.</p>
                <a href="/services" class="btn btn-secondary">Descubrir</a>
            </div>
        </div>
        <div class="promo-box promo-2" style="background-image: linear-gradient(rgba(0,0,0,0.6), rgba(0,0,0,0.6)), url('{{ asset('images/promo2.jpg') }}');">
            <div class="promo-content">
                <h3>ZAPATILLAS DE FÚTBOL SALA</h3>
                <p style="color:#ddd; margin-bottom:20px; font-size:1.1rem;">Máximo agarre y control para la pista indoor.</p>
                <a href="/services" class="btn btn-secondary">Descubrir</a>
            </div>
        </div>
    </section>

    <!-- Social Grid / Shop the Look -->
    <section class="social-section">
        <div class="container">
            <div class="section-header" style="justify-content: center; text-align: center; margin-bottom: 20px;">
                <h2>#BluePitchCommunity</h2>
            </div>
            <p style="text-align: center; color: var(--text-gray); margin-bottom: 40px;">Sube tus fotos a Instagram con nuestro hashtag y aparece aquí.</p>
            
            <div class="social-grid">
                <a href="#" class="social-item" style="background-image: url('https://images.unsplash.com/photo-1543326727-cf6c39e8f84c?q=80&w=400&auto=format&fit=crop');">
                    <div class="social-overlay"><i class="fab fa-instagram"></i> Comprar Look</div>
                </a>
                <a href="#" class="social-item" style="background-image: url('https://images.unsplash.com/photo-1522778119026-d647f0596c20?q=80&w=400&auto=format&fit=crop');">
                    <div class="social-overlay"><i class="fab fa-instagram"></i> Comprar Look</div>
                </a>
                <a href="#" class="social-item" style="background-image: url('https://images.unsplash.com/photo-1518091043644-c1d44570a2bf?q=80&w=400&auto=format&fit=crop');">
                    <div class="social-overlay"><i class="fab fa-instagram"></i> Comprar Look</div>
                </a>
                <a href="#" class="social-item" style="background-image: url('https://images.unsplash.com/photo-1587329310686-91414b8e3cb7?q=80&w=400&auto=format&fit=crop');">
                    <div class="social-overlay"><i class="fab fa-instagram"></i> Comprar Look</div>
                </a>
                <a href="#" class="social-item" style="background-image: url('https://images.unsplash.com/photo-1515444744559-7be63e1600de?q=80&w=400&auto=format&fit=crop');">
                    <div class="social-overlay"><i class="fab fa-instagram"></i> Comprar Look</div>
                </a>
            </div>
        </div>
    </section>

    <!-- Features / USPs -->
    <section class="usps-section">
        <div class="container usps-grid">
            <div class="usp">
                <i class="fa-truck"></i>
                <strong>ENVÍO EN 24/48H</strong>
                <p>Recibe tu pedido de forma rápida en tu domicilio</p>
            </div>
            <div class="usp">
                <i class="fa-undo"></i>
                <strong>DEVOLUCIONES FÁCILES</strong>
                <p>Hasta 30 días para cambios de talla</p>
            </div>
            <div class="usp">
                <i class="fa-shield"></i>
                <strong>PAGO SEGURO</strong>
                <p>Garantía de protección en cada transacción</p>
            </div>
            <div class="usp">
                <i class="fa-store"></i>
                <strong>ATENCIÓN EXPERTA</strong>
                <p>Asesoramiento personalizado de futbolistas</p>
            </div>
        </div>
    </section>
@endsection
