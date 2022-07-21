@extends('layouts.app')

@section('template_title')
    {{ $product->name ?? 'Show Product' }}
@endsection

@section('content')
    <section class="content container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">
                        <div class="float-left">
                            <span class="card-title">Enseñar Productos</span>
                        </div>
                        <div class="float-right">
                            <a class="btn btn-primary" href="{{ route('products.index') }}"> Back</a>
                        </div>
                    </div>

                    <div class="card-body">
                        
                        <div class="form-group">
                            <strong>Codigo Del Pedido:</strong>
                            {{ $product->codigo_del_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Cliente:</strong>
                            {{ $product->cliente }}
                        </div>
                        <div class="form-group">
                            <strong>Direccion De Entrega:</strong>
                            {{ $product->Direccion_de_Entrega }}
                        </div>
                        <div class="form-group">
                            <strong>Nombre Del Producto:</strong>
                            {{ $product->nombre_del_producto }}
                        </div>
                        <div class="form-group">
                            <strong>Referencia:</strong>
                            {{ $product->referencia}}
                        </div>
                        <div class="form-group">
                            <strong>Cantidad:</strong>
                            {{ $product->cantidad }}
                        </div>
                        <div class="form-group">
                            <strong>Estado Del Pedido:</strong>
                            {{ $product->estado_del_pedido }}
                        </div>
                        <div class="form-group">
                            <strong>Fecha Estimada De Entrega:</strong>
                            {{ $product->fecha_estimada_de_entrega }}
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
