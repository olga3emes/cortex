<!-- Footer
        ============================================= -->
<footer id="footer" class="dark">

    <!-- Copyrights
            ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col-md-6">
                &copy;2015 Corte'x
                    <br><a href="{{URL::asset('aviso-legal')}}"> Términos y Condiciones de la Plataforma - Cookies - Política de Privacidad</a>
            </div>

            <div class="col-md-6" style="text-align:right">
                <h6>Email: infopeluqueriacortex@gmail.com</h6>
                <h6>Teléfono: +34 955 677 264</h6>
            </div>


        </div>
    </div>
    <!-- #copyrights end -->

</footer>
<!-- #footer end -->

</div>
<!-- #wrapper end -->

<!-- Go To Top
    ============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- Footer Scripts
    ============================================= -->
{{HTML::script('js/functions.js')}}
{{HTML::script('js/bootstrap-datetimepicker.js')}}
{{HTML::script('js/moment.js')}}


<script type="text/javascript">
    $(function () {
        $('#datetimepicker4').datetimepicker();
    });
</script>

</body>

</html>