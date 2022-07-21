@extends('layouts.app')

@section('template_title')
    Product
@endsection

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        <div style="display: flex; justify-content: space-between; align-items: center;">

                            <span id="card_title">
                                {{ __('Product') }}
                            </span>

                          
                            
                            <div class="float-right">
                                <a href="{{ route('products.create') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                  {{ __('Solictar_Pedido') }}
                                </a>
                            </div>
                        </div>
                    </div>
                    @if ($message = Session::get('success'))
                        <div class="alert alert-success">
                            <p>{{ $message }}</p>
                        </div>
                    @endif

                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead class="thead">
                                    <tr>
                                        <th>No</th>
                                        
										<th>Codigo Del Pedido</th>
										<th>Cliente</th>
										<th>Direccion De Entrega</th>
                                        <th>Nombre del Producto</th>
                                        <th>Referencia</th>
										<th>Estado Del Pedido</th>
										<th>Fecha Estimada De Entreg</th>
                                        
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($products as $product)
                                        <tr>
                                            <th>{{ $product->id }}</th>
											<td>{{ $product->codigo_del_pedido }}</td>
											<td>{{ $product->cliente}}</td>
											<td>{{ $product->Direccion_de_Entrega }}</td>
                                            <td>{{ $product->nombre_producto}}</td>
                                            <td>{{ $product->referencia}}</td>
											<td>{{ $product->estado_del_pedido }}</td>
											<td>{{ $product->fecha_estimada_de_entrega}}</td>
											

                                            <td>
                                                <form action="{{ route('products.destroy',$product->id) }}" method="POST">
                                                    <a class="btn btn-sm btn-primary " href="{{ route('products.show',$product->id) }}"><i class="fa fa-fw fa-eye"></i> Consultar</a>
                                                    <a class="btn btn-sm btn-success" href="{{ route('products.edit',$product->id) }}"><i class="fa fa-fw fa-edit"></i> Edit</a>
                                                    @csrf
                                                    @method('DELETE')
                                                    <button type="submit" class="btn btn-danger btn-sm"><i class="fa fa-fw fa-trash"></i> Delete</button>
                                                </form>
                                            </td>
                                        </tr>
                                    @endforeach
                                    <div class="float-right">
                                        <a href="{{ route('login') }}" class="btn btn-primary btn-sm float-right"  data-placement="left">
                                          {{ __('Iniciar') }}
                                        </a>
                                    </div>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                {!! $products->links() !!}
            </div>
        </div>
    </div>
@endsection
