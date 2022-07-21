<!DOCTYPE html>
<html>
   <head>
      <title>Formulario</title>
      <link rel="stylesheet" href="{{ asset('css/estilos.css') }}" />
   </head>

<body>
     
    <div class="contact_form">

        <div class="formulario">      
            <h1>Formulario de Contacto</h1><center>
            <h3>Escríbenos y en breve los pondremos en contacto contigo</h3>

    <br>
        <div>
        codigo pedido: <input type="text" name="codigo_del_pedido" /> 
        </div>
    <br>
        <div>
        cliente: <input type="text" name="cliente" />
        </div>
    <br>
        <div>
        Direccion Entrega: <input type="text" name="Direccion_de_Entrega" />
        </div>
        <br>
        <div>
        Nombre del Producto: <input type="text" name="nombre_producto" />
        </div>
        
    <br>
        <div>
        Referencia: <input type="text" name="referencia" />
        </div>
    <br>
    <div>
        cantidad: <input type="text" name="cantidad" />
        </div>
    <br>
        <div>
        Estado del Pedido: <input type="text" name="estado_del_pedido" />
        </div>
    <br>
        <div>
        Fecha de Entrega: <input type="date" name="fecha_estimada_de_entrega" />
        </div>
    <br>

            </div>
                <div class="box-footer mt20">
                     <button type="submit" value='Registrar' class="btn btn-primary">Registrar</button>
                </div>
            </div> 
    
      
        </div> 
    </div> 
   </body>
</html>

----------------------------------


