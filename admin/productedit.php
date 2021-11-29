<?php 

if(isset($_GET['id'])):
  include "header.php" ;
  $products = new Products ;
  $getAllProducManuProtypes  = $products->getAllProductManuProtypesByID($_GET['id']);

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
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">General</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <form action="editproduct.php" method="POST">
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Name</label>
                <input type="text" id="inputName" class="form-control" value="<?php echo $getAllProducManuProtypes[0]['name'] ?>" name="name" >
              </div>
              <label for="inputStatus">Manufactures</label>
                <select id="inputStatus" class="form-control custom-select" name="manufactures">
                  <option disabled>Select one</option>
                  <?php 
                  $manu = new Manufacture;
                  $getAllManu = $manu->getAllManu(); 
                  foreach($getAllManu as $value):
                    if($value['manu_id']==$getAllProducManuProtypes[0]['manu_id']):
                  ?>
                  <option selected value="<?php echo $value['manu_id'] ;?>"><?php echo $value['manu_name']; ?></option>
                  <?php endif; ?>
                  <option value="<?php echo $value['manu_id'] ;?>"><?php echo $value['manu_name']; ?></option>
                  <?php  endforeach;?>
                </select>
                
                <label for="inputStatus">Protypes</label>
                <select id="inputStatus" class="form-control custom-select" name="prototypes">
                  <option  disabled>Select one</option>
                  <?php  
                    $protypes = new Protype ;
                    $getAllProtypes = $protypes->getAllProtypes();
                    foreach($getAllProtypes as $value):
                      if($value['type_id']==$getAllProducManuProtypes[0]['type_id']):
                  ?>
                  <option selected value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                  <?php endif; ?>
                  <option value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                  <?php endforeach;  ?>
                  
                </select>
                <div class="form-group">
                <label for="inputName">Price</label>
                <input type="text" id="inputName" class="form-control" value="<?php echo $getAllProducManuProtypes[0]['price']?>" name="price">
              </div>
              <div class="form-group">
                <label for="inputDescription">Description</label>
                <textarea id="inputDescription" class="form-control" rows="4" name="description"><?php echo $getAllProducManuProtypes[0]['description'] ?></textarea>
              </div>
              <div class="form-group">
              <div class="form-group">
                <label for="inputProjectLeader">Image</label>
                <input type="file" id="inputProjectLeader" class="form-control"name="image" value=""><?php echo $getAllProducManuProtypes[0]['image'] ;?>
              </div>
                
              </div>
            </div>
            <!-- /.card-body -->
          </div>
          <!-- /.card -->
        </div>
      </div>
      <div class="row">
        <div class="col-12">
          <a href="#" class="btn btn-secondary">Cancel</a>
          <input type="submit" value="Update" class="btn btn-success float-right" name="submit">
        </div>
      </div>
      </form>
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

 <?php include "footer.html"; 
 endif;
 ?>
