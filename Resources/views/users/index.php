<?php
$title = 'User Page';
include_once 'Resources/views/components/header.php';
?>

<main class="md-5 d-flex justify-contenet-center">
    <div class="container mt-5">
        <table class="table table-striped table-bordered w-md-50 w-100">
             <thead>
                 <tr>
                     <th>First Name</th>
                     <th>Last Name</th>
                     <th>Email</th>
                 </tr>
             </thead>
             <tbody>
                 <?php foreach  ($data as $user) {?>
                 <tr>
                     <td><?= $user->first_name ?></td>
                     <td><?= $user->last_name ?></td>
                     <td><?= $user->email ?></td>
                 </tr>
                 <?php }?>
             </tbody>
        </table>
    </div>
</main>
<?php
include_once 'Resources/views/components/footer.php';
