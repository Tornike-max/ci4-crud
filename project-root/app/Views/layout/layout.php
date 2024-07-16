<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link href="<?= base_url('assets/css/bootstrap.min.css');  ?>" rel="stylesheet">
    <link href="//cdn.datatables.net/2.0.8/css/dataTables.dataTables.min.css" rel="stylesheet">
</head>

<body>
    <div class="app">
        <?= $this->include('layout/inc/navbar.php'); ?>
        <?= $this->renderSection('content')  ?>
    </div>

    <script src="<?= base_url('assets/js/jquery-3.7.1.js'); ?>"></script>
    <script src="<?= base_url('assets/js/popper.min.js'); ?>"></script>
    <script src="<?= base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="//cdn.datatables.net/2.0.8/js/dataTables.min.js"></script>
    <script>
        $(document).ready(() => {
            $('#addstudent-btn').click(() => {
                window.location.href = '<?= base_url('students/create'); ?>';
            });

            $('#navigate-to-students-page').click(() => {
                window.location.href = '<?= base_url('students') ?>'
            });
        });
        let table = new DataTable('#mydatatable')
    </script>

    <?= $this->renderSection('confirmation') ?>
</body>

</html>