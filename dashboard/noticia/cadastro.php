<?php session_start();
include_once('../conexao.php');
?>
<html lang="pt-br">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Home banner</title>

  <!-- Custom fonts for this template-->
  <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
  <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="../css/sb-admin-2.min.css" rel="stylesheet">
  <!-- ICONE -->
  <link rel="shortcut icon" href="../img/favicon.webp" />
</head>

<body id="page-top">

  <?php include('../include/nav-interno.php'); ?>


  <div class="container-fluid">

    <!-- Content Row -->

    <div class="row">
      <!-- Area Chart -->
      <div class="col-xl-12 col-lg-12">
        <div class="card shadow mb-4">
          <!-- Card Header - Dropdown -->
          <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
            <h6 class="m-0 font-weight-bold">Nova notícia</h6>

          </div>

          <div class="card-body">
            <div class="chart-area">

              <form class="user" action="cadastro_novo.php" method="POST" enctype="multipart/form-data">
                <div class="form-group">
                  <h6>Titulo</h6>
                  <input type="text" name="titulo" class="form-control" placeholder="Digite o titulo" required>
                </div>
                <div class="form-group">
                  <h6>Descrição</h6>
                  <input type="text" name="descricao" class="form-control" placeholder="Digite a descrição" required>
                </div>
                <div class="form-group">
                  <h6>Texto</h6>
                  <textarea type="text" name="texto" class="form-control" rows="6" placeholder="Digite o texto aqui" required></textarea>
                </div>
                <div class="form-group">
                  <h6>Fonte</h6>
                  <input type="text" name="fonte" class="form-control" placeholder="Digite a fonte" required>
                </div>
                <input type="submit" class="btn" value="cadastrar">
              </form>
            </div>
          </div>
        </div>
      </div>
      <!-- Begin Page Content -->

    </div>
    <!-- Begin Page Content -->
    <!-- End of Content Wrapper -->

    <?php include('../include/footer.php'); ?>

  </div>
  <!-- End of Content Wrapper -->

  </div>
  <!-- End of Page Wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>



  <!-- Bootstrap core JavaScript-->
  <script src="../vendor/jquery/jquery.min.js"></script>
  <script src="../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="../vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="../js/sb-admin-2.min.js"></script>

  <!-- Page level custom scripts -->
  <script src="../js/demo/chart-area-demo.js"></script>
  <script src="../js/demo/chart-pie-demo.js"></script>

</body>

</html>