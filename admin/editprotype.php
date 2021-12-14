<?php 
require "header.php";
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
    <form action = "edit3.php?id=<?php echo $_GET['type_id'] ?>"  method="post" enctype="multipart/form-data">
   
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">Protype Edit</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <?php 
              $type_id = $_GET['type_id'];
              $getProtypeById = $protypes->getProtypeById($type_id);
              foreach ($getProtypeById as $value):
            ?>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" value = "<?php echo $value['type_name']?>" id="inputName" class="form-control" name = "type_name">
              </div>
              
              
            </div>
            <?php endforeach; ?>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
        
      </div>
      <div class="row">
        <div class="col-12">
          
          <input type="submit" name = "submit" value="EDIT PROTYPE" class="btn btn-success float-right">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
<?php
require "footer.html"; 
?>
  
