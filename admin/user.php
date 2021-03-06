<?php include "header.php" ?>
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
              <th style="width: 33,33%">
                Email
              </th>
              <th style="width: 33,33%">
                Password
              </th>
              <th style="width: 33,33%">
                FirstName
              </th>
              <th style="width: 33,33%">
                LastName
              </th>
              <th style="width: 33,33%" class="text-center">
                Action
              </th>
            </tr>
          </thead>
          <tbody>
              <?php 
              $account = new Account;
              $getAllaccounts = $account->getAllAccount();
             foreach($getAllaccounts as $value): ?>
            <tr>
              <td>
                <?php echo $value['email']; ?>
              </td>
              <td>
              <?php echo $value['password']; ?>
              </td>
              <td>
              <?php echo $value['first_name']; ?>
              </td>
              <td>
              <?php echo $value['last_name']; ?>
              </td>
              <td class="project-actions text-right">

                <a class="btn btn-info btn-sm" href="edituser.php?email=<?php echo $value['email'] ?>">
                

                  <i class="fas fa-pencil-alt">
                  </i>
                  Edit
                </a>
                <a class="btn btn-danger btn-sm" href="delUser.php?id=<?php echo $value['email'] ?>">
                  <i class="fas fa-trash">
                  </i>
                  Delete
                </a>
              </td>
            </tr>
            <?php endforeach ?>
          </tbody>
        </table>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
  <!-- /.content -->
</div>
<!-- /.content-wrapper -->
<?php include "footer.html" ?>