@include('headerInicio')

<article id="faqs" style="margin-bottom: 100px;">
    <div class="container" style="padding-top: 160px;">
        <form action="{{ action('RemindersController@postRemind') }}" method="POST">
            <div class="col_full">
                <label>Email</label>
                <input type="email" required id="email" name="email" value="" class="form-control" />
            </div>
            <input class="button button-rounded button-reveal button-red tright" type="submit" value="Send Remind">
        </form>
    </div>
</article>

@include('footerInicio')
