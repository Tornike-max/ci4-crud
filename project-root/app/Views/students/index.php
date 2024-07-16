<?= $this->extend('layout/layout.php') ?>

<?= $this->section('content') ?>

<div style="width: 100%; display: flex; justify-content: space-between; align-items: center; margin-bottom: 20px; padding: 20px">
    <h1>Students Data</h1>
    <button id="addstudent-btn" class="btn btn-primary">Add Students</button>
</div>

<?php
if (session()->getFlashdata('status')) {
?>
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Hey!</strong> <?= session()->getFlashdata('status') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}

?>


<table class="table table-striped table-bordered">
    <thead class="thead-dark">
        <tr>
            <th>Name</th>
            <th>Email</th>
            <th>Phone</th>
            <th>Course</th>
            <th class="text-center">Actions</th>
        </tr>
    </thead>
    <tbody>
        <?php foreach ($students as $student) : ?>
            <tr style="background-color: #f2f2f2;">
                <td><?= $student['name'] ?></td>
                <td><?= $student['email'] ?></td>
                <td><?= $student['phone'] ?></td>
                <td><?= $student['course'] ?></td>
                <td class="d-flex justify-content-center align-items-center gap-2">

                    <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        delete
                    </button>
                    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog modal-dialog-centered">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h1 class="modal-title fs-5" id="exampleModalLabel">Delete</h1>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body text-danger">
                                    Do you want to delete this student?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                    <form action="<?= base_url('/students/delete/' . $student['id']) ?>" method="POST">
                                        <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
                                        <input type="hidden" name="_method" value="DELETE">
                                        <button class="btn btn-danger" id='delete-student'>Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href='<?= base_url('students/edit/' . $student['id']) ?>' class="btn btn-success" id='edit-student'>Edit</a>
                </td>
            </tr>

        <?php endforeach; ?>

    </tbody>
</table>

<?= $this->endSection() ?>