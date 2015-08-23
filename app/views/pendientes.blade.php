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

