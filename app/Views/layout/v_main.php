<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title; ?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="/enlink/assets/images/logo/favicon.png">

    <!-- Core css -->
    <link href="/enlink/assets/css/app.min.css" rel="stylesheet">


</head>

<body>
    <div class="app">
        <div class="layout">
            <?= $this->include('layout/v_navbar.php'); ?>
            <?= $this->include('layout/v_sidebar.php'); ?>
            <?= $this->rendersection('content'); ?>

        </div>

        <!-- Core Vendors JS -->
        <script src="/enlink/assets/js/vendors.min.js"></script>

        <!-- page js -->
        <script src="/enlink/assets/vendors/datatables/jquery.dataTables.min.js"></script>
        <script src="/enlink/assets/vendors/datatables/dataTables.bootstrap.min.js"></script>


        <!-- page css -->
        <link href="/enlink/assets/vendors/datatables/dataTables.bootstrap.min.css" rel="stylesheet">
        <!-- Core JS -->
        <script src="/enlink/assets/js/app.min.js"></script>
        <script src="/enlink/assets/js/jquery.inputmask.bundle.min.js"></script>

</body>

</html>
<script>
    $('#data-table').DataTable();
</script>
<script>
    $('.phone').inputmask({
        prefix: '(+62)',
        groupSeparator: "-",
        alias: "numeric",
        autoGroup: true,
        digits: 0,
        rightAlign: false
    });
</script>
<script>
    function previewImg() {

        const foto = document.querySelector('#foto');
        const fotoLabel = document.querySelector('.custom-file-label');
        const imgPreview = document.querySelector('.img-preview');
        fotoLabel.textContent = foto.files[0].name;
        const filefoto = new FileReader();
        filefoto.readAsDataURL(foto.files[0]);
        filefoto.onload = function(e) {
            imgPreview.src = e.target.result;
        }
    }
</script>

<script>
    window.setTimeout(function() {
        $(".alert").fadeTo(500, 0).slideUp(500, function() {
            $(this).remove();
        })
    }, 3000);
</script>