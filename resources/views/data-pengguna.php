<!DOCTYPE html>
<html lang="en">

 <?php
 require '../core/init.php';
 include ("../template/head.php");
 ?>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="../pages/dashboard.php" class="site_title"><i class="fa fa-paw"></i> <span>Gentelella Alela!</span></a>
            </div>

            <div class="clearfix"></div>

            <?php include ("../template/sidebar.php"); ?>

          </div>
        </div>
      </div>

        <?php include '../template/topnav.php'; ?>

        <!-- page content -->
        <div class="right_col" role="main">

          <br />

          <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Form Design <small>different form elements</small></h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                        <ul class="dropdown-menu" role="menu">
                          <li><a href="#">Settings 1</a>
                          </li>
                          <li><a href="#">Settings 2</a>
                          </li>
                        </ul>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
                    <br />
                    <form action="../action/action_tambah_pengguna.php" method="POST" data-parsley-validate class="form-horizontal form-label-left">

                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Fullname <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="fullname" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Username <span class="required">*</span>
                        </label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input type="text" name="username" required="required" class="form-control col-md-7 col-xs-12">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Password</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <input class="form-control col-md-7 col-xs-12" type="text" name="password">
                        </div>
                      </div>
                      <div class="form-group">
                        <label class="control-label col-md-3 col-sm-3 col-xs-12">Level</label>
                        <div class="col-md-6 col-sm-6 col-xs-12">
                          <div id="gender" class="btn-group" data-toggle="buttons">
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="level" value="1"> &nbsp;Admin &nbsp;
                            </label>
                            <label class="btn btn-default" data-toggle-class="btn-primary" data-toggle-passive-class="btn-default">
                              <input type="radio" name="level" value="0"> Pengguna
                            </label>
                          </div>
                        </div>
                      </div>

                      <div class="ln_solid"></div>
                      <div class="form-group">
                        <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                          <button type="submit" name="button" class="btn btn-success"><i class="fa fa-plus"></i> Tambah</button>
                        </div>
                      </div>

                    </form>
                  </div>
                </div>
              </div>
            </div>

                            <?php if (isset($_SESSION['text'])): ?>

                                <div class="alert alert-<?=$_SESSION['color']?> text-center animated slideInRight slower" role="alert">
                                   <?= $_SESSION['text'] ?>
                                 </div>

                            <?php endif; Core::deleteFlash(); ?>

						<script>
						window.setTimeout (function (){
							$(".alert").fadeOut(8000);
						});
						</script>


                      <!-- Table Dynamix -->
                     <div class="x_panel">
                        <div class="x_title">
                          <h2>Data Pengguna</h2>
                          <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                            <li class="dropdown">
                              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>
                              <ul class="dropdown-menu" role="menu">
                                <li><a href="#">Settings 1</a>
                                </li>
                                <li><a href="#">Settings 2</a>
                                </li>
                              </ul>
                            </li>
                            <li><a class="close-link"><i class="fa fa-close"></i></a>
                            </li>
                          </ul>
                          <div class="clearfix"></div>
                        </div>
                        <div class="x_content">

                          <table id="datatable" class="table table-striped table-bordered">
                            <thead>
                              <tr>
                                 <th>No</th>
                                  <th>Username</th>
                                  <th>Fullname</th>
                                  <th>Level</th>
                                  <th>Aksi</th>
                              </tr>
                            </thead>


                            <tbody>

                             <?php
                              require '../action/data_pengguna.php';

                         	 if($hasil > 0 ) :
                                $i = 1;

                                while ($row = mysqli_fetch_assoc($query) ) :
                            ?>

                              <tr>
                                <td> <?= $i ?> </td>
                                <td> <?= $row ['username']; ?> </td>
                                <td> <?= $row ['fullname']; ?> </td>
                                <td> <?= $row ['level']; ?> </td>

                                <td>
                                    <button class="btn btn-danger btn-custome"  data-toggle="modal" data-target="#exampleModal<?=$i?>" role="button"><i class="fa fa-trash"></i> Hapus</button>
                                    <div class="modal fade" id="exampleModal<?=$i?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                      <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                          <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Penghapusan Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                              <span aria-hidden="true">&times;</span>
                                            </button>
                                          </div>
                                          <div class="modal-body">
                                            Yakin mau di Hapus?
                                          </div>
                                          <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                                            <a href="../action/action_hapus_pengguna.php?id=<?=$row['id_user']?>" type="button" class="btn btn-danger">YA</a>
                                          </div>
                                        </div>
                                      </div>
                                    </div>
                                    <a href="ubah-pengguna.php?id=<?=$row['id_user']?>" class="btn btn-primary btn-custome shadow" role="button"><i class="fa fa-pencil"></i> Edit</a>
                                </td>
                              </tr>


                            <?php
                                $i++;
                               endwhile;
                              endif;
                            ?>

                            </tbody>
                          </table>
                        </div>
                      </div>
                    <!-- /Table Dynamix -->

         </div>
         <!-- /page content -->
       </div>
       <!-- Modal -->



        <?php include '../template/footer.php'; ?>

  </body>
</html>
