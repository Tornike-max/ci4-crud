<?= $this->extend('layout/layout.php') ?>


<?= $this->section('content') ?>

<h2 class="m-4">Edit Student</h2>
<?php if (session()->has('errors')) : ?>
    <div class="alert alert-danger">
        <?php foreach (session('errors') as $error) : ?>
            <p><?= $error ?></p>
        <?php endforeach ?>
    </div>
<?php endif ?>
<form style="padding: 20px" method="POST" action="<?= base_url('students/update/' . $student['id']) ?>">
    <input type="hidden" name="<?= csrf_token() ?>" value="<?= csrf_hash() ?>" />
    <input type="hidden" name="_method" value="PUT">

    <div class="form-group">
        <label for="name">Name:</label>
        <input type="text" class="form-control" name='name' id="name" value="<?= $student['name'] ?>" placeholder="Enter name">
    </div>
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name='email' id="email" value="<?= $student['email'] ?>" placeholder="Enter email">
    </div>
    <div class="form-group">
        <label for="phone">Phone:</label>
        <input type="tel" class="form-control" name='phone' id="phone" value="<?= $student['phone'] ?>" placeholder="Enter phone number">
    </div>
    <div class="form-group">
        <label for="course">Course:</label>
        <input type="text" class="form-control" name='course' id="course" value="<?= $student['course'] ?>" placeholder="Enter course">
    </div>
    <div style="width: 100%; display: flex; justify-content:flex-end; align-items:center; margin-top: 10px">
        <button style="margin-right: 5px" id='navigate-to-students-page' type="button" class="btn btn-primary">Go Back</button>
        <button style="margin-left: 5px" type="submit" class="btn btn-primary">Update</button>
    </div>

</form>

<?= $this->endSection() ?>