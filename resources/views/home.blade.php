@extends('layouts.app')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card shadow-lg">
                <div class="card-header text-center bg-primary text-white">
                    <h3 class="mb-0">Bienvenido al sistema de la farmacia</h3>
                </div>
                <div class="card-body text-center">
                    <div class="row g-3">
                        <div class="col-md-6">
                            <a class="btn btn-outline-primary w-100 py-2" href="{{ route('medicamentos.index') }}">Medicamentos</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-outline-primary w-100 py-2" href="{{ route('unidades-medida.index') }}">Unidades de Medida</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-outline-primary w-100 py-2" href="{{ route('categorias.index') }}">Categorías</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-outline-primary w-100 py-2" href="{{ route('proveedores.index') }}">Proveedores</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-outline-primary w-100 py-2" href="{{ route('ventas.index') }}">Ventas</a>
                        </div>
                        <div class="col-md-6">
                            <a class="btn btn-outline-primary w-100 py-2" href="{{ route('devoluciones.index') }}">Devoluciones</a>
                        </div>
                        <div class="col-md-12">
                            <a class="btn btn-outline-primary w-100 py-2" href="{{ route('inventario.index') }}">Inventario</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection