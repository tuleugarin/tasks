<?php session_start();    ?>
<?php include 'header.php'; ?>

    <div class="panel-content">
        <div class="form-group">
            <?php if (isset($_SESSION['danger'])):?>
            <div class="alert alert-danger fade show" role="alert">
                <?php echo $_SESSION['danger'];
                    unset($_SESSION['danger']);
                ?>
            </div>
        <?php endif ?>
            <?php if (isset($_SESSION['success'])):?>
            <div class="alert alert-success fade show" role="alert">
                <?php echo $_SESSION['success'];
                    unset($_SESSION['success']);
                ?>
            </div>
        <?php endif ?>
            <form action="save10.php" method="post">
                <label class="form-label" for="simpleinput">Text</label>
                <input type="text" id="simpleinput" class="form-control" name="note">
                <button class="btn btn-success mt-3" type="Submit">Submit</button>
            </form>
        </div>
    </div>
<?php include 'footer.php'; ?>