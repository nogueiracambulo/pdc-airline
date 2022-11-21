@extends('layouts.painel.principal')
{{-- @extends('layouts.main') --}}
@section('titulo', 'MULONGI - Perfil')

@section ('content')
	<!-- Breadcrumb section -->
	<section class="content-header">
    <div class="container-fluid">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Actualiza informações do seu perfil</h1>
            </div>
            <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/">Inicio</a></li>
                    <li class="breadcrumb-item active">Perfil</li>
                </ol>
            </div>
        </div>
    </div>
  </section>

	<!-- Breadcrumb section end -->
  <div class="container">
        <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
         <div class="col-md-12">
          @livewire('profile.update-profile-information-form')

          </div>
        </div>
      </div>
    </section>
  </div>
@endsection
