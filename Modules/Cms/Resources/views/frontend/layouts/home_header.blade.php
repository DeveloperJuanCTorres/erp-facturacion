<header class="ft-hero" id="inicio">
    <div class="ft-glow ft-glow-a" aria-hidden="true"></div><div class="ft-glow ft-glow-b" aria-hidden="true"></div>
    <nav class="ft-nav ft-container" aria-label="Navegación principal">
       
        <a href="{{ url('/') }}" class="ft-brand" aria-label="FacTyG, inicio">
            <img
                src="{{ asset('modules/cms/img/factyg-logo.png') }}"
                alt="FacTyG"
                class="ft-brand-logo"
            >

            <span class="ft-brand-name">
                Fac<span>TyG</span>
                <small>by Grupo TyG Ingenieros</small>
            </span>
        </a>
        
        <button type="button" class="ft-menu-toggle" aria-label="Abrir menú" aria-expanded="false" aria-controls="ft-nav-links"><i class="fas fa-bars"></i></button>
        <div class="ft-nav-links" id="ft-nav-links">
            <a href="#soluciones">Soluciones</a><a href="#como-funciona">Cómo funciona</a><a href="#modulos">Módulos</a><a href="#empresas">Para empresas</a>
            <a href="{{ url('/c/contact-us') }}">Contacto</a>
            <a class="ft-btn ft-btn-nav" href="{{ $navbar_btn['link'] }}">Iniciar sesión <i class="fas fa-arrow-right"></i></a>
        </div>
    </nav>
    <div class="ft-container ft-hero-layout">
        <div class="ft-hero-copy">
            <div class="ft-pill"><span class="ft-live-dot"></span> SOFTWARE DE GESTIÓN EMPRESARIAL</div>
            <h1>Tu negocio en orden.<br><span>Tu crecimiento</span><br>sin límites.</h1>
            <p>Facturación electrónica, ventas, inventarios y control empresarial en una plataforma diseñada para simplificar tu día a día.</p>
            <div class="ft-hero-actions">
                <a class="ft-btn ft-btn-primary" href="{{ $hero_btn['link'] }}">Iniciar sesión <i class="fas fa-arrow-right"></i></a>
                <a class="ft-btn ft-btn-outline" href="#soluciones"><i class="fas fa-play-circle"></i> Explorar funciones</a>
            </div>
            <div class="ft-hero-trust"><span><i class="fas fa-check-circle"></i> Gestión centralizada</span><span><i class="fas fa-check-circle"></i> Interfaz intuitiva</span></div>
        </div>
        <div class="ft-hero-visual" aria-label="Vista conceptual del panel de gestión FacTyG">
            <div class="ft-orbit ft-orbit-one"></div><div class="ft-orbit ft-orbit-two"></div>
            <div class="ft-dashboard">
                <div class="ft-dashboard-top"><span class="ft-window-dots"><i></i><i></i><i></i></span><span class="ft-dashboard-url"><i class="fas fa-lock"></i> FacTyG / Panel de control</span><i class="fas fa-ellipsis-h"></i></div>
                <div class="ft-dashboard-body">
                    <aside class="ft-dashboard-sidebar"><div class="ft-mini-logo">F</div><i class="fas fa-th-large active"></i><i class="fas fa-file-invoice"></i><i class="fas fa-box"></i><i class="fas fa-chart-bar"></i><i class="fas fa-cog"></i></aside>
                    <div class="ft-dashboard-main"><div class="ft-dashboard-heading"><div><small>BIENVENIDO A FACTYG</small><h3>Resumen general</h3></div><span class="ft-dashboard-avatar">TYG</span></div>
                        <div class="ft-metric-row"><div class="ft-metric"><span>Ventas</span><strong><i class="fas fa-chart-line"></i></strong><small>Vista general</small></div><div class="ft-metric"><span>Inventario</span><strong><i class="fas fa-box-open"></i></strong><small>Control de stock</small></div><div class="ft-metric"><span>Comprobantes</span><strong><i class="fas fa-receipt"></i></strong><small>Documentos</small></div></div>
                        <div class="ft-chart-panel"><div class="ft-chart-head"><strong>Actividad comercial</strong><span>Vista ilustrativa</span></div><div class="ft-chart-bars"><i style="height:35%"></i><i style="height:54%"></i><i style="height:43%"></i><i style="height:70%"></i><i style="height:60%"></i><i style="height:86%"></i><i style="height:75%"></i><i style="height:95%"></i><i style="height:72%"></i><i style="height:100%"></i></div></div>
                    </div>
                </div>
            </div>
            <div class="ft-floating-card"><span class="ft-floating-icon"><i class="fas fa-check"></i></span><div><strong>Todo conectado</strong><small>Gestión en un solo lugar</small></div></div>
        </div>
    </div>
    <div class="ft-hero-bottom ft-container"><span>TECNOLOGÍA E INNOVACIÓN</span><span>DESARROLLADO POR GRUPO TYG INGENIEROS</span></div>
</header>
