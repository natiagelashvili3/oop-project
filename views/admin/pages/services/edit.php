<form class="admin-form" method="post">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?= $data['service']['id'] ?>">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" value="<?= $data['service']['name'] ?>">
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <textarea name="text"><?= $data['service']['text'] ?></textarea>
    </div>

    <div class="form-group">
        <button class="btn">Update</button>
    </div>
</form>