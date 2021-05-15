<form class="admin-form" method="post">
    <input type="hidden" name="action" value="update">
    <input type="hidden" name="id" value="<?= $data['menu']['id'] ?>">
    <div class="form-group">
        <label for="">Name</label>
        <input type="text" name="name" value="<?= $data['menu']['name'] ?>">
    </div>
    <div class="form-group">
        <label for="">Path</label>
        <input type="text" name="path" value="<?= $data['menu']['path'] ?>">
    </div>
    <div class="form-group">
        <label for="">Order</label>
        <input type="text" name="ord" value="<?= $data['menu']['ord'] ?>">
    </div>

    <div class="form-group">
        <button class="btn">Update</button>
    </div>
</form>