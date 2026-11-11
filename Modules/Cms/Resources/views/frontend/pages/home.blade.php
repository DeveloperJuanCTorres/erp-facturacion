@extends('cms::frontend.layouts.app')
@section('title', 'FacTyG | Facturación electrónica y gestión empresarial')
@php
    // Enlaces controlados: nunca usar la ruta de registro del CMS.
    $navbar_btn = ['text' => 'Iniciar sesión', 'link' => url('/login')];
    $hero_btn = ['text' => 'Iniciar sesión', 'link' => url('/login')];
    $industry_btn = ['text' => 'Iniciar sesión', 'link' => url('/login')];
    $cta_btn = ['text' => 'Contactar', 'link' => url('/c/contact-us')];
@endphp
@section('meta')
    <meta name="description" content="{{ $page->meta_description ?? 'FacTyG: facturación electrónica, ventas, inventarios y gestión empresarial en una sola plataforma.' }}">
@endsection
@section('css')
    <link rel="stylesheet" href="{{ asset('modules/cms/css/factyg-landing.css') }}?v=3">
@endsection
@include('cms::frontend.layouts.home_header')
@section('content')
<main class="ft-landing" id="contenido">
    <section class="ft-section ft-intro" id="soluciones">
        <div class="ft-container">
            <div class="ft-section-heading">
                <span class="ft-eyebrow">UNA SOLA PLATAFORMA</span>
                <h2>Todo lo que tu negocio necesita, <em>conectado.</em></h2>
                <p>Menos tareas repetitivas. Más visibilidad sobre tus operaciones y más tiempo para crecer.</p>
            </div>
            <div class="ft-feature-grid">
                <article class="ft-feature ft-feature-primary"><span class="ft-feature-icon"><i class="fas fa-file-invoice"></i></span><h3>Facturación electrónica</h3><p>Organiza la emisión y consulta de tus comprobantes desde un solo lugar.</p><span class="ft-feature-tag">Operaciones más ágiles</span></article>
                <article class="ft-feature"><span class="ft-feature-icon"><i class="fas fa-chart-line"></i></span><h3>Ventas y reportes</h3><p>Consulta información comercial para tomar decisiones con mayor claridad.</p></article>
                <article class="ft-feature"><span class="ft-feature-icon"><i class="fas fa-boxes"></i></span><h3>Inventarios</h3><p>Controla productos, movimientos y existencias de forma organizada.</p></article>
                <article class="ft-feature"><span class="ft-feature-icon"><i class="fas fa-users"></i></span><h3>Clientes y proveedores</h3><p>Centraliza la información de tus relaciones comerciales.</p></article>
                <article class="ft-feature"><span class="ft-feature-icon"><i class="fas fa-cash-register"></i></span><h3>Punto de venta</h3><p>Una experiencia de atención más rápida y ordenada.</p></article>
                <article class="ft-feature"><span class="ft-feature-icon"><i class="fas fa-truck-loading"></i></span><h3>Compras</h3><p>Organiza adquisiciones y el seguimiento de tus proveedores.</p></article>
                <article class="ft-feature"><span class="ft-feature-icon"><i class="fas fa-user-tie"></i></span><h3>Recursos Humanos</h3><p>Centraliza procesos y datos de tu equipo de trabajo.</p></article>
                <article class="ft-feature"><span class="ft-feature-icon"><i class="fas fa-laptop"></i></span><h3>Gestión de activos</h3><p>Registra y organiza los activos de tu empresa.</p></article>
                <article class="ft-feature"><span class="ft-feature-icon"><i class="fas fa-chart-pie"></i></span><h3>Reportes de gestión</h3><p>Visualiza información útil para supervisar tu operación.</p></article>
            </div>
        </div>
    </section>


    <section class="ft-section ft-modules" id="modulos">
      <div class="ft-container">
        <div class="ft-section-heading"><span class="ft-eyebrow">CONOCE FACTYG POR DENTRO</span><h2>Un sistema. Múltiples áreas de tu empresa.</h2><p>Explora los módulos de FacTyG y descubre cómo pueden ayudarte a organizar cada proceso.</p></div>
        <div class="ft-module-shell">
          <div class="ft-module-tabs" role="tablist" aria-label="Módulos de FacTyG">
            <button class="ft-module-tab is-active" role="tab" aria-selected="true" tabindex="0" data-ft-module="facturacion"><i class="fas fa-file-invoice"></i> Facturación</button>
            <button class="ft-module-tab" role="tab" aria-selected="false" tabindex="-1" data-ft-module="ventas"><i class="fas fa-shopping-cart"></i> Ventas y POS</button>
            <button class="ft-module-tab" role="tab" aria-selected="false" tabindex="-1" data-ft-module="inventario"><i class="fas fa-boxes"></i> Inventarios</button>
            <button class="ft-module-tab" role="tab" aria-selected="false" tabindex="-1" data-ft-module="compras"><i class="fas fa-truck-loading"></i> Compras</button>
            <button class="ft-module-tab" role="tab" aria-selected="false" tabindex="-1" data-ft-module="rrhh"><i class="fas fa-user-tie"></i> Recursos Humanos</button>
            <button class="ft-module-tab" role="tab" aria-selected="false" tabindex="-1" data-ft-module="activos"><i class="fas fa-laptop"></i> Gestión de activos</button>
            <button class="ft-module-tab" role="tab" aria-selected="false" tabindex="-1" data-ft-module="reportes"><i class="fas fa-chart-bar"></i> Reportes</button>
            <button class="ft-module-tab" role="tab" aria-selected="false" tabindex="-1" data-ft-module="contactos"><i class="fas fa-address-book"></i> Clientes y proveedores</button>
          </div>
          <div class="ft-module-panel" role="tabpanel" aria-live="polite" aria-label="Detalle del módulo">
            <div class="ft-module-copy"><span class="ft-eyebrow">MÓDULO FACTYG</span><div class="ft-module-icon" id="ft-module-icon"><i class="fas fa-file-invoice"></i></div><h3 id="ft-module-title">Facturación electrónica</h3><p id="ft-module-desc">Emite y consulta comprobantes electrónicos desde un entorno integrado con tu gestión comercial.</p><ul id="ft-module-list"><li>Emisión y consulta de comprobantes</li><li>Organización de documentos de venta</li><li>Acceso centralizado a la información</li></ul><a class="ft-text-link" href="{{ $hero_btn['link'] }}">Contactar <i class="fas fa-arrow-right"></i></a></div>
            <div class="ft-module-preview"><div class="ft-preview-top"><span><i class="fas fa-circle"></i> FacTyG / Módulos</span><span>Vista conceptual</span></div><div class="ft-preview-main"><div class="ft-preview-side"><i class="fas fa-th-large"></i><i class="fas fa-file-alt"></i><i class="fas fa-chart-line"></i><i class="fas fa-cog"></i></div><div class="ft-preview-content"><div class="ft-preview-heading"><span id="ft-preview-label">Facturación electrónica</span><span class="ft-preview-dot"></span></div><div class="ft-preview-stats"><div><span>Gestión</span><strong>Centralizada</strong></div><div><span>Operaciones</span><strong>Organizadas</strong></div></div><div class="ft-preview-table"><div><b>Proceso</b><b>Estado</b></div><div><span>Registro de operaciones</span><em>Disponible</em></div><div><span>Consulta de información</span><em>Disponible</em></div><div><span>Seguimiento y control</span><em>Disponible</em></div></div></div></div><small>Representación ilustrativa. No muestra datos reales del ERP.</small></div>
          </div>
        </div>
      </div>
    </section>

    <section class="ft-section ft-workflow" id="como-funciona">
        <div class="ft-container ft-workflow-layout">
            <div>
                <span class="ft-eyebrow">SIMPLIFICA TU DÍA A DÍA</span>
                <h2>De la venta al control del negocio, sin perder el ritmo.</h2>
                <p>FacTyG reúne los procesos importantes en una experiencia clara y accesible.</p>
                <a class="ft-text-link" href="{{ $hero_btn['link'] }}">Iniciar sesión <i class="fas fa-arrow-right"></i></a>
            </div>
            <div class="ft-steps">
                <div class="ft-step"><span>01</span><div><h3>Registra tus operaciones</h3><p>Gestiona ventas y documentos en un mismo entorno.</p></div></div>
                <div class="ft-step"><span>02</span><div><h3>Mantén el control</h3><p>Consulta productos, inventarios y movimientos.</p></div></div>
                <div class="ft-step"><span>03</span><div><h3>Decide con información</h3><p>Revisa reportes para seguir la evolución del negocio.</p></div></div>
            </div>
        </div>
    </section>

    <section class="ft-section ft-audience" id="empresas">
        <div class="ft-container">
            <div class="ft-section-heading"><span class="ft-eyebrow">PENSADO PARA CRECER</span><h2>Una herramienta para negocios que quieren avanzar.</h2></div>
            <div class="ft-audience-grid">
                <div><i class="fas fa-store"></i><h3>Comercios</h3><p>Organiza tus ventas y el movimiento de tus productos.</p></div>
                <div><i class="fas fa-building"></i><h3>Empresas</h3><p>Centraliza procesos y mejora la visibilidad de tu operación.</p></div>
                <div><i class="fas fa-laptop-code"></i><h3>Negocios en expansión</h3><p>Adopta herramientas digitales para acompañar tu crecimiento.</p></div>
            </div>
        </div>
    </section>

    <!-- <section class="ft-corporate"><div class="ft-container ft-corporate-inner"><div><strong>FacTyG</strong><span>Una solución desarrollada por Grupo TyG Ingenieros</span><small>Tecnología e Innovación</small></div><div class="ft-corporate-links"><a href="https://www.grupotyg.pe" target="_blank" rel="noopener noreferrer">www.grupotyg.pe</a><a href="mailto:informes@grupotyg.pe">informes@grupotyg.pe</a><a href="tel:+51978209130">978 209 130</a></div></div></section> -->

    <section class="ft-section ft-final" id="contacto">
        <div class="ft-container ft-final-panel">
            <div><span class="ft-eyebrow">TU SIGUIENTE PASO</span><h2>Tu negocio puede trabajar de una forma más inteligente.</h2><p>Conoce FacTyG y descubre cómo digitalizar tus operaciones.</p></div>
            <div class="ft-final-actions"><a class="ft-btn ft-btn-light" href="{{ $cta_btn['link'] }}">Contactar <i class="fas fa-arrow-right"></i></a><a class="ft-final-secondary" href="{{ url('/login') }}">Ya tengo una cuenta</a></div>
        </div>
    </section>
</main>
@endsection
@section('javascript')
<script>
(function () {
    const menuButton = document.querySelector('.ft-menu-toggle');
    const menu = document.querySelector('.ft-nav-links');
    if (menuButton && menu) {
        menuButton.addEventListener('click', function () {
            const open = menu.classList.toggle('is-open');
            menuButton.setAttribute('aria-expanded', String(open));
        });
        menu.querySelectorAll('a').forEach(a => a.addEventListener('click', () => {
            menu.classList.remove('is-open');
            menuButton.setAttribute('aria-expanded', 'false');
        }));
    }

    const moduleData = {
        facturacion: {title:'Facturación electrónica',icon:'fa-file-invoice',desc:'Emite y consulta comprobantes electrónicos desde un entorno integrado con tu gestión comercial.',items:['Emisión y consulta de comprobantes','Organización de documentos de venta','Acceso centralizado a la información']},
        ventas: {title:'Ventas y punto de venta',icon:'fa-shopping-cart',desc:'Atiende tus ventas y mantén un registro organizado de las operaciones comerciales.',items:['Registro de ventas','Operación en punto de venta','Consulta de transacciones']},
        inventario: {title:'Inventarios y almacenes',icon:'fa-boxes',desc:'Conoce mejor el movimiento de tus productos y mantén el control de las existencias.',items:['Catálogo de productos','Control de existencias','Seguimiento de movimientos']},
        compras: {title:'Gestión de compras',icon:'fa-truck-loading',desc:'Organiza las adquisiciones de tu empresa y la información relacionada con tus proveedores.',items:['Registro de compras','Seguimiento de adquisiciones','Relación con proveedores']},
        rrhh: {title:'Recursos Humanos',icon:'fa-user-tie',desc:'Centraliza información del personal y organiza procesos internos de tu equipo.',items:['Registro del personal','Información organizada por colaborador','Apoyo a la gestión administrativa']},
        activos: {title:'Gestión de activos',icon:'fa-laptop',desc:'Lleva un registro ordenado de los activos y recursos de tu empresa.',items:['Inventario de activos','Identificación y organización','Seguimiento administrativo']},
        reportes: {title:'Reportes de gestión',icon:'fa-chart-bar',desc:'Consulta información de tus operaciones para tener una visión más clara del negocio.',items:['Información comercial','Indicadores de operación','Consultas para la toma de decisiones']},
        contactos: {title:'Clientes y proveedores',icon:'fa-address-book',desc:'Reúne los datos de tus contactos comerciales en un solo entorno.',items:['Registro de clientes','Gestión de proveedores','Consulta de información comercial']}
    };
    const tabs = [...document.querySelectorAll('.ft-module-tab')];
    const title = document.getElementById('ft-module-title');
    const desc = document.getElementById('ft-module-desc');
    const icon = document.getElementById('ft-module-icon');
    const list = document.getElementById('ft-module-list');
    const preview = document.getElementById('ft-preview-label');
    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            const data = moduleData[tab.dataset.ftModule];
            if (!data || !title || !desc || !icon || !list || !preview) return;
            tabs.forEach(t => { t.classList.remove('is-active'); t.setAttribute('aria-selected','false'); t.tabIndex=-1; });
            tab.classList.add('is-active');tab.setAttribute('aria-selected','true');tab.tabIndex=0;
            title.textContent=data.title;desc.textContent=data.desc;icon.innerHTML='<i class="fas '+data.icon+'"></i>';
            list.replaceChildren(...data.items.map(s => { const li=document.createElement('li');li.textContent=s;return li; }));
            preview.textContent=data.title;
        });
        tab.addEventListener('keydown', e => {
            if (e.key !== 'ArrowDown' && e.key !== 'ArrowUp') return;
            e.preventDefault();const next=tabs[(index+(e.key==='ArrowDown'?1:-1)+tabs.length)%tabs.length];next.focus();next.click();
        });
    });

    if ('IntersectionObserver' in window && !window.matchMedia('(prefers-reduced-motion: reduce)').matches) {
        const observer = new IntersectionObserver(entries => entries.forEach(entry => {
            if (entry.isIntersecting) { entry.target.classList.add('is-visible'); observer.unobserve(entry.target); }
        }), { threshold: 0.12 });
        document.querySelectorAll('.ft-feature, .ft-step, .ft-audience-grid > div').forEach(el => {
            el.classList.add('ft-reveal'); observer.observe(el);
        });
    }
})();
</script>
@endsection
