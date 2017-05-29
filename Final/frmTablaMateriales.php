<html>
  <body>
    <div class="w3-panel" align="center">
      <div class="w3-row-padding" style="text-align: center;">
        
        <table align="center" class='w3-table-all w3-card-4'>
        <thead>
        <tr bgcolor="#e65d00">
          <th>        </th>       
          <th>  ID   </th>       
          <th>  Nombre   </th>
          <th>  Precio     </th>
          <th>  Tipo  </th>
          <th></th>
        </tr> 
        </thead>
  <script type="text/javascript" src="FuncionesJava.js"></script>

  <?php
  require_once"php\materiales.php";
  $matateriales = Material::TraerTodosLosMaterials();
  //Obtengo y muestro los materiales    
  foreach ($matateriales as $mat){

    $btnMod = "Modificar($mat->idMat,'$mat->nombre',$mat->precio,'$mat->tipo')";
    echo  "<tr>
            <td><i class='fa fa-user w3-text-blue w3-large'></i></td>
            <td>$mat->idMat</td>
            <td>$mat->nombre</td>
            <td>$mat->precio</td>
            <td>$mat->tipo</td>
            <td><button onclick='Vender($mat->idMat)' class='w3-button w3-round w3-red w3-hover-blue w3-opacity w3-hover-opacity-off' style='padding:3px 10px'>Vender</button>
            <button onclick=$btnMod class='w3-button w3-round w3-green w3-opacity w3-hover-blue w3-hover-opacity-off' style='padding:3px 10px'>Modificar</button></td>
          </tr>
          " ;

  }

  ?>
        </table>
        </div>
    </div>
  </body>
</html>
