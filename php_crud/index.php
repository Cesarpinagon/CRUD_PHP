<?php

include("db.php");
?>
<?php
include("includes/navigation.php");

?>

<?php
include("includes/header.php");

?>


<div class="container-fluid p-4 p-3 mb-2 bg-secondary text-white">
    <div class="row">
        <div class="col-md-4 mt-4">

            <?php if (isset($_SESSION['mensaje'])) { ?>

                <div class="alert alert-<?php echo $_SESSION['color']; ?> alert-dismissible fade show" role="alert">
                    <?php echo $_SESSION['mensaje']; ?>
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                </div>

            <?php
                session_unset();
            } ?>
            <div class="card card-body">
                <form action="save_user.php" method="post">
                    <div class="form-group">
                        <input type="text" name="nombre" class="form-control" placeholder="Name">
                    </div>
                    <div class="form-group">
                        <input type="text" name="correo" class="form-control" placeholder="Email">
                    </div>
                    <div class="form-group">
                        <textarea type="text" rows="10" name="cv" class="form-control" placeholder="Curriculum"></textarea>
                    </div>
                    <input type="submit" value="Save user" name="guardar_usr" class="btn btn-success btn-block">
                </form>
            </div>
        </div>

        <div class="col-md-8 mt-4 table-responsive">
            <table class="table table-bordered table-dark">
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Curriculum</th>
                        <th>Registration date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php

                    $query = "SELECT * FROM usuarios";
                    $result = mysqli_query($conn, $query);

                    while ($row = mysqli_fetch_assoc($result)) {   ?>
                        <tr>
                            <td><?php echo $row['nombre'] ?></td>
                            <td><?php echo $row['correo'] ?></td>
                            <td><?php echo $row['cv'] ?></td>
                            <td><?php echo $row['fecha_creacion'] ?></td>
                            <td>
                                <a href="edit_user.php?id=<?php echo $row['id']; ?>" class="btn btn-warning btn-block"><i class="far fa-edit"></i></a>
                                <a href="delete_user.php?id=<?php echo $row['id']; ?>" class="btn btn-danger btn-block"><i class="far fa-trash-alt" </a>
                            </td>
                        </tr>

                    <?php } ?>


                </tbody>
            </table>

        </div>

    </div>

</div>









<?php
include("includes/footer.php");

?>