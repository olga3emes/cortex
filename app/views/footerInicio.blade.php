<!-- Footer
        ============================================= -->
<footer id="footer" class="dark">

    <!-- Copyrights
            ============================================= -->
    <div id="copyrights">

        <div class="container clearfix">

            <div class="col_half">
                &copy;2015 Corte'x
                    <br><a href="{{URL::asset('administrador/calendario')}}"> Administrador</a>
                    <br><a href="{{URL::asset('cliente/calendario')}}"> Cliente</a>
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