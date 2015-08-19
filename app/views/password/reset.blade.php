@include('headerInicio')


<article id="faqs" style="margin-bottom: 100px;">
    <div class="container" style="padding-top: 160px;">
    <h3>Cambiar la contraseña</h3>
        <form action="{{action('RemindersController@postReset') }}" method="POST" class="cd-form">
            <input type="hidden" name="token" value="{{$token}}">

            <div class="col_full">
                <label>Email</label>
                <input type="email" required id="email" name="email" value="" class="form-control" />
            </div>
            <div class="col_full">
                <label >Contraseña</label>
                <input name="password" class="form-control" id="password" type="password" placeholder="Nueva contraseña">
            </div>
            <p class="fieldset">
                <label>Repite la contraseña</label>
                <input name="password" class="form-control" id="password_confirmation" type="password" placeholder="Nueva contraseña">
            </p>
            <input class="button button-rounded button-reveal button-red tright" type="submit" value="Reset Password">
        </form>
    </div>
</article>

@include('footerInicio')
