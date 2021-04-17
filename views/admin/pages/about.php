<form class="admin-form" method="post">
    <input type="hidden" name="action" value="update">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" name="title" value="<?= $data['about']['title'] ?>">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <textarea name="text"><?= $data['about']['text'] ?></textarea>
    </div>

    <div class="form-group">
        <button class="btn">Update</button>
    </div>
</form>