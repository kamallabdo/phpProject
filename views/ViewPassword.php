<div class="container"><br>
    <div class="row">
        <?php echo $message; ?>
        <br>
    </div>
    <div class="row" >
        <form method="post" action="Password">
            <div class="row" align="">
                <div class="col-md-5 col-md-offset-5" >
                    <input id="email" type="email" name="email" size="30" placeholder=" Votre Email " >
                    <span id="loader" style="display: none;"><img src="public/image/loader.gif" alt="loading" /></span>
                    <span style="color: red" id="email_check" >&nbsp;</span>
                </div>
            </div>
            <div class="row">
                <div class="col-md-5 col-md-offset-5"><br>
                    <button type="submit" class="btn btn-danger" name="recuperer">
                        <span class="glyphicon glyphicon-refresh"></span> Récupérer vos coordonnées
                    </button>
                </div>
            </div>
        </form>
        <br><br>
    </div>
</div>
<hr>