@extends('layouts.app')
@section('title', 'Inicio')
@section('head')
    {!! Html::style('css/home.css') !!}
@endsection
@section('content')
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
      <!-- Indicators -->
      <ol class="carousel-indicators">
        <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
        <li data-target="#carousel-example-generic" data-slide-to="1"></li>
        <li data-target="#carousel-example-generic" data-slide-to="2"></li>
      </ol>
      <!-- Wrapper for slides -->
      <div class="carousel-inner" role="listbox">
        <div class="item active image-background">
          <img class="black-background"/>
          <div class="carousel-caption">
            <h3>El mundo espera por ti</h3>
            <p>Ven y renueva tu mente</p>
          </div>
        </div>
        <div class="item image-background">
          <img class="black-background"/>
          <div class="carousel-caption">
            <h3>Grandes personas vienen de una gran educación</h3>
          </div>
        </div>
        <div class="item image-background">
          <img class="black-background"/>
          <div class="carousel-caption">
            <h3>Formando a grandes personas</h3>
          </div>
        </div>
      </div>
    
      <!-- Controls -->
      <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
      </a>
      <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
      </a>
    </div>
    <section id="about-us">
        <div class="container">
          <div class="col-md-8 center-block text-center">
              <h2 class="page-header">Nosotros</h2>
              <p>BIG es una empresa peruana que fomenta la cultura emprendedora
              en el país a través de talleres, seminarios, cursos y conferencias en temas de negocios y TI.</p>
          </div>
        </div>
    </section>
    <section class="gray" id="services">
        <div class="container">
          <div class="col-md-8 center-block text-center">
              <h2 class="page-header">Nuestros servicios</h2>
          </div>
          <div class="row">    
            <div class="col-md-8 center-block text-center">
                <div class="col-md-4 col-xs-12">
                    <div class="icon-ball">
                      <span class="glyphicon glyphicon-education" aria-hidden="true"></span>
                    </div>
                    <h4>Cursos</h4>
                </div>
                <div class="col-md-4 col-xs-12">
                    <span class="glyphicon glyphicon-blackboard" aria-hidden="true"></span>
                    <h4>Talleres y Seminarios</h4>
                </div>
                <div class="col-md-4 col-xs-12">
                    <span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
                    <h4>Conferencias</h4>
                </div>
            </div>
          </div>
        </div>
    </section>
    @include('partials.sponsors')
@endsection