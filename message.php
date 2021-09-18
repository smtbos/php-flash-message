<?php
if (is_have_messages()) {
    $msg_str = get_all_message();
?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <?php echo $msg_str; ?>
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
            <span aria-hidden="true">&times;</span>
        </button>
    </div>
<?php
}
?>