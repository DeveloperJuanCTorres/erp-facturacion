<!-- Left side column. contains the logo and sidebar -->

<!-- <aside class="main-sidebar"> -->
  <aside class="main-sidebar etu-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">

	<!-- <a href="{{route('home')}}" class="logo">
		<span class="logo-lg">{{ Session::get('business.name') }}</span>
	</a> -->
    

<!-- siguiente -->

    <div class="etu-tools">
        <button
            type="button"
            class="etu-theme-toggle"
            id="etu-theme-toggle"
            aria-label="Cambiar tema"
        >
            <i class="fas fa-moon" aria-hidden="true"></i>
            <span class="etu-theme-label">Tema oscuro</span>
        </button>
    </div>


    <!-- Sidebar Menu -->
    {!! Menu::render('admin-sidebar-menu', 'adminltecustom'); !!}

    <!-- /.sidebar-menu -->
  </section>
  <!-- /.sidebar -->
</aside>
