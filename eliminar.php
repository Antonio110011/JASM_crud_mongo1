<?php include "./header.php"; ?>

<div class="container">
      <div class="row">
        <div class="col">
        <div class="card nt-4">
        <div class="card-body">
        
        <a href="index.php" class="btn btn-info">
          <i class="fa-sharp fa-regular fa-house-person-return"></i>
          Regresar
        </a>
        <h2>Eliminar registro</h2>
         
        <table class="table table-bordered">
            <thead>
                  <th>Apellido paterno</th>
                  <th>Apellido materno</th>
                  <th>Nombre</th>
                  <th>Fecha de nacimiento</th>
            </thead>

            <tbody>
                  <tr>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                  </tr>
            </tbody>

        </table>
      
        <hr>

        <div class="alert alert-danger" role="alert">
       ¿Estas seguro de eliminar el registro?
      </div>


        <form action="" method="post">
            <button class="btn btn-danger">
            <i class="fa-solid fa-user-minus"></i>
                  Eliminar
            </button>
        </form>
      
       
           
        </div>
      </div>
    </div>
  </div>
</div>


<?php include "./scripts.php"; ?>