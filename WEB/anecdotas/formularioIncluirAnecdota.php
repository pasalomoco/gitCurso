<div  id="formularioIncluirAnecdota" class="container-sm indexContainers" style="display:none;">

    <div class="container" >
        <p class="h4 text-center separador"> AÑADIR PERSONAJE </p>
        <form class="cajon form-horizontal" action="/action_page.php">
            <input type="hidden" name="hiddenFecha">
            <div class="form-group">
              <label class="control-label col-sm-12" for="campaniaAsociada">Campaña asociada:</label>
              <div class="col-sm-10">
                <select name="campaniaAsociada" id="campaniaAsociada">
                  <option value="volvo">aasd</option>
                  <option value="saab">sad</option>
                  <option value="opel">asd</option>
                  <option value="audi">Audasdi</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-12" for="jugadores">Jugador asociado</label>
              <div class="col-sm-10">          
                <select name="jugadores" id="jugadores">
                  <option value="volvo">Volvo</option>
                  <option value="saab">Saab</option>
                  <option value="opel">Opel</option>
                  <option value="audi">Audi</option>
                </select>
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-12" for="descripcionCorta">Descripción corta:</label>
              <div class="col-sm-10">
                  <input type="text" class="form-control" id="descripcionCorta" name="descripcionCorta">
              </div>
            </div>

            <div class="form-group">
              <label class="control-label col-sm-12" for="descripcionCompleta">Descripción completa:</label>
              <div class="col-sm-10">
                <textarea id="descripcionCompleta" name="descripcionCompleta">
                    
                </textarea>
              </div>
            </div>
          
        </form>

    </div>