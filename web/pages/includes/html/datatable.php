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
         
            if (count($dispositivos) > 0) {
              
              foreach ($dispositivos as $dispositivos) {
                  echo "<tr>";
                    echo "<td>" . $dispositivos['device_id'] . "</td>";
                    echo "<td>" . $dispositivos['device_name'] . "</td>";
                    echo "<td>" . $dispositivos['device_serie'] . "</td>";
                    echo "<td>" . $dispositivos['device_user_id'] . "</td>";
                    echo "<td>";
                    echo "<a href='editar_dispositivo.php?id=" . $dispositivo['device_id'] . "'>Editar</a> | ";
                    echo "<a href='verDispositivos.php?id=".$dispositivos['device_id'] ."' onclick='return confirm(\"¿Estás seguro de que deseas eliminar este dispositivo?\")'>Eliminar</a>";
                    echo "</td>";
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
