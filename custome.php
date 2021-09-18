<?php include('config.php'); ?>
<?php
if (isset($_POST['add']) && isset($_POST['msg'])) {
    if (!empty($_POST['msg'])) {
        add_message($_POST['msg']);
        header('location:index.php');
        exit();
    } else {
        add_message('Enter Your Custome Message');
        header('location:custome.php');
        exit();
    }
}
?>
<?php include('header.php'); ?>
<div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
    <?php include('message.php'); ?>
    <form method="POST">
        <div class="row">
            <div class="col-12 pt-0 pb-2">
                <label>Enter Your Message:</label>
                <input type="text" name="msg" class="form-control mt-2" required>
            </div>
            <div class="col-6 offset-3 mt-3">
                <button type="submit" class="btn btn-success btn-lg btn-block" name="add">Add Message</button>
            </div>
        </div>
    </form>
</div>
<?php include('footer.php'); ?>