@include('headerInicio')

<article id="404" style="margin-bottom: 100px;">
    <div class="content" style="padding-top: 50px;">

        <!-- Error -->
        <div class="error404-wrap" data-wow-delay="0" style="text-align: center;">
            <div class="title-block" data-wow-delay="0" style="text-align: center;">
                <h2>Página no encontrada.</h2>

                <div class="col_full" style="text-align: center;">
                    <h1><strong>404</strong>error</h1>

                    <div class="col_full">
                        <a href="{{URL::previous()}}" id="back">Volver</a>
                    </div>

                </div>
            </div>
        </div>


        <!-- End Error -->

    </div>
</article>

@include('footerInicio')
