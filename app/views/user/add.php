<?php 
$this->loadView('layouts/header');
?>
<form action="<?= url ?>user/add" method="post">
    <input type="text" name="username">
    <input type="password" name="password">
    <button type="submit">Go</button>
</form>

<?php 
$this->loadView('layouts/footer');
?>