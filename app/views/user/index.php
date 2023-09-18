<?php 
$this->loadView('layouts/header');
?>
    <h3>List User</h3>
    <a href="<?= url ?>user/add">Tambah Data</a>
    <hr>
    <?php foreach($user as $data){ ?>
        <p>
            <b><?= $data->username ?></b>
            <a href="<?= url ?>user/edit/<?= $data->id ?>">Edit</a>
            <a href="<?= url ?>user/delete/<?= $data->id ?>">Delete</a>
        </p>    
    <?php } ?>
<?php 
 $this->loadView('layouts/footer');
 ?>