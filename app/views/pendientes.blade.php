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

    <!-- Main content -->
    <section class="content">
        <div class="col-md-12">
            <div class="col-sm-4 col-md-3 col-xs-12">
                @include("ficha-producto")
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12">
                @include("ficha-producto")
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12">
                @include("ficha-producto")
            </div>
            <div class="col-sm-4 col-md-3 col-xs-12">
                @include("ficha-producto")
            </div>
        </div>
    </section>
    <!-- /.content -->

</div>

<!-- /.content-wrapper -->

@include( "footer")

<script>
    $('#file-es').fileinput({
        language: 'es',
        uploadUrl: '#',
        allowedFileExtensions: ['jpg', 'png', 'gif'],
    });
    $(".btn-warning").on('click', function () {
        if ($('#file-4').attr('disabled')) {
            $('#file-4').fileinput('enable');
        } else {
            $('#file-4').fileinput('disable');
        }
    });
    $(".btn-info").on('click', function () {
        $('#file-4').fileinput('refresh', {
            previewClass: 'bg-info'
        });
    });
</script>