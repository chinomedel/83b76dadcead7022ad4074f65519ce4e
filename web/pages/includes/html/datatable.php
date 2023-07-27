<div class="padding">
  <div class="box">
    <div class="box-header">
      <h2>DataTables Nelson</h2>
    </div>
    <div class="table-responsive">
      <table ui-jp="dataTable" class="table table-striped b-t b-b">
        <thead>
          <tr>
            <th  style="width:20%">Id</th>
            <th  style="width:25%">Nombre Dispositivo</th>
            <th  style="width:25%">Serie</th>
            <th  style="width:15%">Id Usuario</th>
            <th  style="width:15%">Accion</th>
          </tr>
        </thead>
        <tbody>
          <?php 
         
            if (count($resultado) > 0) {
              
              foreach ($resultado as $resultado) {
                  echo "<tr>";
                  echo "<td>" . $resultado['device_id'] . "</td>";
                  echo "<td>" . $resultado['device_name'] . "</td>";
                  echo "<td>" . $resultado['device_serie'] . "</td>";
                  echo "<td>" . $resultado['device_user_id'] . "</td>";
                  echo "<td> Editar</td>";
                  echo "</tr>";
                }

            } else {
                echo "No se encontraron dispositivos.";
            }
          
          ?>
        </tbody>
      </table>
    </div>
  </div>
</div>
