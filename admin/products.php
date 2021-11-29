<?php include "header.php"; ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <section class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1>Projects</h1>
        </div>
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Projects</li>
          </ol>
        </div>
      </div>
    </div><!-- /.container-fluid -->
  </section>

  <!-- Main content -->
  <section class="content">

    <!-- Default box -->
    <div class="card">
      <div class="card-header">
        <h3 class="card-title">Projects</h3>

        <div class="card-tools">
          <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
            <i class="fas fa-minus"></i>
          </button>
          <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
            <i class="fas fa-times"></i>
          </button>
        </div>
      </div>
      <div class="card-body p-0">
        <table class="table table-striped projects">
          <thead>
            <tr>
              <th style="width: 1%">
                ID
              </th>
              <th style="width: 10%">
                Name
              </th>
              <th style="width: 10%">
                Image
              </th>

              <th style="width: 40%">
                Description
              </th>
              <th style="width: 10%" class="text-center">
                Price
              </th>
              <th style="width: 10% " class="text-center">
                Manufacture
              </th>
              <th style="width: 10%" class="text-center">
                Protype
              </th>
              <th style="width: 10%" class="text-center">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
            <?php
            $getAllProductsManuProtypes = $product->getAllProductsManuProTypes();
            // hiển thị 3 sản phẩm trên 1 trang
            $perPage = 5;
            // Lấy số trang trên thanh địa chỉ
            $page = isset($_GET['page']) ? $_GET['page'] : 1;
            // Tính tổng số dòng, ví dụ kết quả là 18
            $total = count($getAllProductsManuProtypes);
            // lấy đường dẫn đến file hiện hành
            $url = $_SERVER['PHP_SELF'];
            $getAllProductsManuProtypes = $product->getAllProductsManuProTypesPhanTrang($page,$perPage);
            foreach ($getAllProductsManuProtypes as $value) :
            ?>
              <tr>
                <td>
                  <?php echo $value['id']; ?>
                </td>
                <td>
                  <a>
                    <?php echo $value['name']; ?>
                  </a>
                  <br />
                </td>
                <td>
                  <img style="height: 100px;width:100px" src="../themes/images/products/<?php echo $value['image']; ?>" alt="">
                </td>
                <td class="project_progress">
                  <?php echo substr($value['description'], 0, 50) ?>
                </td>
                <td class="project-state">
                  <?php echo $value['price']; ?>
                </td>
                <td class="project-state">
                  <?php echo $value['manu_name']; ?>
                </td>
                <td class="project-state">
                  <?php echo $value['type_name']; ?>
                </td>
                <td class="project-actions text-right">
                  <a class="btn btn-primary btn-sm" href="#">
                    <i class="fas fa-folder">
                    </i>
                    View
                  </a>
                  <a class="btn btn-info btn-sm" href="productedit.php?id=<?php echo $value['id'] ?>">
                    <i class="fas fa-pencil-alt">
                    </i>
                    Edit
                  </a>
                  <a class="btn btn-danger btn-sm" href="del.php?id=<?php echo $value['id']; ?>">
                    <i class="fas fa-trash">
                    </i>
                    Delete
                  </a>
                </td>
              </tr>
            <?php
             endforeach; 
              
            ?>
            
          </tbody>
        </table>
      </div>
      
      <!-- /.card-body -->
    </div>
    <?php echo$product->paginate($url,$total,$perPage);?>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->


<?php include "footer.html"; ?>