<?php
include_once 'Resources/views/components/header.php';
?>
<form style="width: 50%; display:flex; justify-content: center; align-items: center; gap: 20px;">
    <div class="d-flex justify-content-center flex-column align-items-space-between">
        <input type="text" class="form-control" placeholder="First name">
        <input type="text" class="form-control" placeholder="Last name">
        <input type="email" class="form-control" placeholder="Email">
        <input type="password" class="form-control" placeholder="Password">

        <button class="btn btn-primary" type="submit">Submit</button>
    </div>
</form>
<?php
include_once 'Resources/views/components/footer.php';
?>