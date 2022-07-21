<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Product
 *
 * @property $id
 * @property $codigo del pedido
 * @property $cliente
 * @property $Direccion de Entrega
 * @property $nombre del producto
 * @property $referencia
 * @property $cantidad
 * @property $estado del pedido
 * @property $fecha estimada de entrega
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Product extends Model
{
    
    static $rules = [
		'codigo del pedido' => 'required',
		'cliente' => 'required',
		'Direccion de Entrega' => 'required',
		'nombre del producto' => 'required',
		'referencia' => 'required',
		'cantidad' => 'required',
		'estado del pedido' => 'required',
		'fecha estimada de entrega' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['codigo del pedido','cliente','Direccion de Entrega','nombre del producto','referencia','cantidad','estado del pedido','fecha estimada de entrega'];



}
