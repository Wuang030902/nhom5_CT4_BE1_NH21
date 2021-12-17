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
    <form action = "edit5.php?id=<?php echo $_GET['order_id'] ?>"  method="post" enctype="multipart/form-data">
   
      <div class="row">
        <div class="col-md-12">
          <div class="card card-primary">
            <div class="card-header">
              <h3 class="card-title">OrderDetails Edit</h3>

              <div class="card-tools">
                <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                  <i class="fas fa-minus"></i>
                </button>
              </div>
            </div>
            <?php 
              $order_id = $_GET['order_id'];
              $getOrderDetailsById = $order_details->getOrderDetailsById($order_id);
              foreach ($getOrderDetailsById as $value):
            ?>
            <div class="card-body">
              <div class="form-group">
                <label for="inputName">Id</label>
                <input type="text" value = "<?php echo $value['id']?>" id="inputName" class="form-control" name = "id">
              </div>
              <div class="form-group">
                <label for="inputName">Product_Id</label>
                <input type="text" value = "<?php echo $value['product_id']?>" id="inputName" class="form-control" name = "product_id">
              </div>
              <div class="form-group">
                <label for="inputName">Qty</label>
                <input type="text" value = "<?php echo $value['qty']?>" id="inputName" class="form-control" name = "qty">
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
  
