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
            <h1>Project Add</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Project Add</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
    <form action="edit4.php?id=<?php echo $_GET['email'] ?>" method="post" enctype="multipart/form-data">
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">User Add</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <?php 
            $email = $_GET['email'];
            $getUserByEmail = $account->getUserByEmail($email);
            foreach ($getUserByEmail as $value) :
             ?>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Email</label>
                <input type="text" id="inputName" value ="<?php echo $value['email'] ?>"class="form-control" name = "email">
              </div>
              <div class="form-group">
                <label for="inputName">Pass Word</label>
                <input type="text" id="inputName"  class="form-control" name = "password">
              </div>
              <div class="form-group">
                <label for="inputName">FirstName</label>
                <input type="text" id="inputName" value ="<?php echo $value['first_name'] ?>" class="form-control" name = "firstname">
              </div>
              <div class="form-group">
                <label for="inputName">LastName</label>
                <input type="text" id="inputName" value ="<?php echo $value['last_name'] ?>" class="form-control" name = "lastname">
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
          
          <input type="submit" name = "submit" value="Create new Porject" class="btn btn-success float-right">
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
  
