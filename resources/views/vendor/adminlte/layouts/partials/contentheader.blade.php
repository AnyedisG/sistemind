{{-- pagina principal cuando se inicia sesion(home)--}}
<!-- Content Header (Page header) -->
<section class="content-header">
	{{--se rellena con lo que se quiere que aparezca al inicar sesion--}}
    <h1>
        @yield('contentheader_title', 'Encabezado de página aquí')
        <small>@yield('contentheader_description')</small>
    </h1>
</section>