    <div style="border:1px solid #290728;margin-top:3px;text-align:center;">
      <div style="font-weight:bolder;font-size:15px;border-bottom:2px solid #300830;background-color:#290728;color:white; ">Carga Manual</div>
      <div style="font-size:15px;margin-top:2px">
        <form id="form" method="POST" action="paso2.php">
        <input type="hidden" name="manual" value="1">
          <label>Nombre:</label><input type="text" required name="nombre"><br>
          <label>Apellido:</label><input type="text" required name="apellido"><br>
          <label> DNI:</label><input type="text" required name="dni"><br>
          <label> Empresa:</label><input type="text" required name="empresa"><br>
          <label>  Puteada:</label><textarea required name="problema"></textarea><br>
          <input type="submit" value="finalizar">
        </form>
      </div>
    </div>