<!DOCTYPE html>
<html lang="en">
<?php $menu = "status";?>
<?php include("head.php"); ?> 

<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">

  <!-- Navbar -->
  <?php include("navbar.php"); ?> 
  <!-- /.navbar -->
  <?php include("menu.php"); ?> 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
    <?php 
      if(@$_GET['do']=='success'){
        echo '<script type="text/javascript">
              swal("", "ทำรายการสำเร็จ !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=status.php" />';
      }else if(@$_GET['do']=='finish'){
        echo '<script type="text/javascript">
              swal("", "แก้ไขสำเร็จ !!", "success");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=status.php" />'; 
      }else if(@$_GET['do']=='f'){
        echo '<script type="text/javascript">
              swal("", "ผิดพลาด !!", "error");
              </script>';
        echo '<meta http-equiv="refresh" content="1;url=status.php" />';
      } ?>
    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
          <!-- ./col -->
          <p><button type="button" class="btn btn-success btn-sm" data-toggle="modal" data-target="#myModal"> +เพิ่มข้อมูล</button>
  <div class="modal fade" id="myModal">
    <div class="modal-dialog modal-lg">
      <div class="modal-content">
        <form action="status_db.php" method="post" accept-charset="utf-8">
          <!-- Modal Header -->
          <div class="modal-header">
            <h4 class="modal-title">เพิ่มข้อมูล|จัดการข้อมูลสถานะ </h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!-- Modal body -->
          <div class="container">
            <div class="row">
              <div class="form-group col-md-6">
                <label for="recipient-name" class="col-form-label">สถานะ:</label>
                <input type="text" class="form-control" required name="status_name">
              </div>
              
            </div>
          </div>
          <!-- Modal footer -->
          <div class="modal-footer">
            <button type="submit" class="btn btn-success">บันทึก</button>
            <button type="button" class="btn btn-danger" data-dismiss="modal">ยกเลิก</button>
          </div>
        </form>
      </div>
    </div>
  </div>
           <div class="col-md-12">
            <?php include('status_list.php'); ?>
          </div>
        </div>
        <!-- /.row -->
      
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include("footer.php"); ?> 
  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->
  <?php include("script.php"); ?> 
</body>
</html>
