<?php 
require "header.php";
// if (isset($_GET['manu_id'])) :
//   $manufacture = new Manufacture();
//   $manufacture = $manufacture->getManufactureById($_GET['id']);
?>


  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Project Edit</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Edit</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="editmanu.php?id=<?php echo $_GET['manu_id'] ?>"  method="post" enctype="multipart/form-data">
    
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Manufacture Edit</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <?php
            $manu_id = $_GET['manu_id'];
            $getManufactureById = $manu->getManufactureById($manu_id);
            foreach ($getManufactureById as $value) :
             ?>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" value="<?php echo $value['manu_name'] ?>"class="form-control" name = "manu_name">
              </div>
              <?php endforeach; ?>
              
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          
          <input type="submit" name = "submit" value="EDIT MANUFACTURE" class="btn btn-success float-right">

        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
// endif;
require "footer.html"; 
?>
  
