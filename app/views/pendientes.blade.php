<style>
    .file-drop-zone-title {
        color: #AAA;
        font-size: 20px !important;
        padding: 55px 10px !important;
    }

    .file-preview {
        border-radius: 5px;
        border: 1px solid #DDD;
        padding: 5px;
        width: 100%;
        margin-bottom: 5px;
        height: 200px !important;
    }

    .file-drop-zone {
        height: 87% !important;
    }
</style>


@include("header")

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">

    @if(Cliente::esCliente())
        <section class="content">
            <div class="col-md-12">
                <div class="box box-solid" style="margin-top: 1%;">
                    <div class="box-header with-border">
                        <h3 style="color:#AA1B30;text-align: center"><i class="fa fa-shopping-cart"></i> Catálogo de productos</h3>
                    </div>

                    <div class="box-body">
                        <p style="text-align: center"> Todo el catálogo de productos estará disponible en nuestra tienda.</p>
                    </div>

                </div>
            </div>

            <div class="col-md-12">
                @foreach($productos as $producto)
                    @if($producto->publicado == 1)
                        <div class="col-sm-4 col-md-3 col-xs-12">
                            @include('ficha-producto')
                        </div>
                    @endif
                @endforeach
            </div>
        </section>

    @else
    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            @foreach($productos as $producto)
                @if($producto->cantidadMinima >= $producto->cantidadActual)
                    <div class="col-sm-4 col-md-3 col-xs-12">
                        @include('ficha-producto')
                    </div>
                @endif
            @endforeach
        </div>
    </section>
    <!-- /.content -->
    @endif

</div>

<!-- /.content-wrapper -->

@include( "footer")

