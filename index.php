<?php include "./header.php"; ?>


    <div class="container">
      <div class="row">
        <div class="col">
        <div class="card nt-4">
        <div class="card-body">
          <h2>Crud con mongo y php</h2>
          <a href="./agregar.php" class="btn btn-primary">
          <i class="fa-solid fa-user-plus"></i>  
          agregar nuevo registro
       
          </a>
          <hr>
          <table class="table table-sm table-hover table-bordered">
            <thead>
              <th>Apellido paterno</th>
              <th>Apellido materno</th>
              <th>Nombre</th>
              <th>Fecha de nacimiento</th>
              <th>Editar</th>
              <th>Eliminar</th>
             
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                
                <td class="text-center">
                  <form action="" method="post">
                    <button class="btn btn-warning">
                    <i class="fa-solid fa-user-pen"></i>
                    </button>
                  </form>
                </td>
                <td class="text-center">
                  <form action="">
                    <button class="btn btn-danger">
                    <i class="fa-solid fa-user-xmark"></i>
                    </button>
                  </form>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
  </div>
</div>



<?php include "./scripts.php"; ?>
