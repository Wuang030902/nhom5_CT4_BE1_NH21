<?php
include "header.php";
if (isset($_GET['id'])) :
    $prodcut = new Products();
    $product = $product->getProductByID($_GET['id']);
?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>Edit</h1>
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
            <form action="editproduct.php?id=<?php echo $_GET['id']; ?>" method="post" enctype="multipart/form-data">
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
                            <div class="card-body">
                                <div class="form-group">
                                    <label for="inputName">Name</label>
                                    <input type="text" id="inputName" class="form-control" name="name" value="<?php echo $product[0]['name'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Manufacture</label>
                                    <select id="inputStatus" class="form-control custom-select" name="manu">
                                        <option disabled>Select one</option>
                                        <?php
                                        $getAllManu = $manu->getAllManu();
                                        foreach ($getAllManu as $value) :
                                            if ($value['manu_id'] == $product[0]['manu_id']) :
                                        ?>
                                                <option selected value="<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name'] ?></option>
                                            <?php endif; ?>
                                            <option value="<?php echo $value['manu_id'] ?>"><?php echo $value['manu_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputStatus">Protypes</label>
                                    <select id="inputStatus" class="form-control custom-select" name="type">
                                        <option disabled>Select one</option>
                                        <?php
                                        $getAllProtypes = $protypes->getAllProtypes();
                                        foreach ($getAllProtypes as $value) :
                                            if ($value['type_id'] == $product['type_id']) :
                                        ?>
                                                <option selected value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                                            <?php endif; ?>
                                            <option value="<?php echo $value['type_id'] ?>"><?php echo $value['type_name'] ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label for="inputPrice">Price</label>
                                    <input type="text" id="inputPrice" class="form-control" name="price" value="<?php echo  $product[0]['price'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Description</label>
                                    <input type="text" id="inputProjectLeader" class="form-control" name="desc" value="<?php echo  $product[0]['description'] ?>">
                                </div>
                                <div class="form-group">
                                    <label for="inputProjectLeader">Image</label>
                                    <button id="files" onclick="document.getElementById('file').click();return false;">Upload Image</button>
                                    <input type="file" id="file" onchange="readURL(this);" class="form-control" name="image" style="visibility: hidden" >
                                    <img id="Image1" style="height:350px; width:400px" src="../themes/images/products/<?php echo  $product[0]['image'] ?>" alt="hinh anh">


                                </div>
                            </div>
                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                    <div class="col-md-6">
                        <div class="card card-secondary">

                            <!-- /.card-body -->
                        </div>
                        <!-- /.card -->
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">

                        <input type="submit" value="Edit File" class="btn btn-success float-right" name="submit">

                    </div>
                </div>
            </form>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
<?php
endif;
include "footer.html";
?>