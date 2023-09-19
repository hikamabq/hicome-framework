<?php 
$this->loadView('layouts/header');
?>
    <h3>List User</h3>
    <hr>
    <br>
    <a href="<?= url ?>user/add">+ Tambah Data</a>

    <table border="1">
        <tr>
            <th>Username</th>
            <th>Password</th>
            <th>Action</th>
        </tr>
        <?php foreach($user as $data){ ?>
            <tr>
                <td><?= $data->username ?></td>
                <td><?= $data->password ?></td>
                <td>
                    <a href="<?= url ?>user/edit/<?= $data->id ?>">Edit</a>
                    <a href="<?= url ?>user/delete/<?= $data->id ?>">Delete</a>
                </td>
            </tr>
        <?php } ?>
    </table>
<?php 
 $this->loadView('layouts/footer');
 ?>