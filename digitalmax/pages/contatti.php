<div id="contatti">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <p class="contatti-title">Contact us</p>
                <p>Puoi scriverci qui sotto oppure chiamarci allo +39 0423 952830. Grazie.</p>
                <div>
                    <form action="/action_page.php">
                        <label for="fname">Nome</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your name..">
                    
                        <label for="lname">Azienda</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your azienda..">
                    
                        <label for="fname">E-mail</label>
                        <input type="text" id="fname" name="firstname" placeholder="Your e-mail..">
                    
                        <label for="lname">Telefono</label>
                        <input type="text" id="lname" name="lastname" placeholder="Your telefono..">
                        <label for="lname" class="contati-text-box-txt">Scrivi qui il tuo messaggio</label>
                        <textarea id="subject" name="subject" class="contati-text-box" placeholder="Scrivi qui il tuo messaggio"></textarea>
                      <input type="submit" value="Submit">
                    </form>
                  </div>                  
            </div>
            <div class="col-md-5">
                <p class="contati-map-text">La nosta sede</p>
                <a href="https://goo.gl/maps/qzStJPD3C5GBA4su5"><img class="contati-map" src="<?php echo get_template_directory_uri() . '/static/img/location.png'; ?>"></a>
               
            </div>
        </div>
    </div>
</div>

