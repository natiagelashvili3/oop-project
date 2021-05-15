<form class="admin-form" method="post" enctype="multipart/form-data">
    <input type="hidden" name="action" value="store">
    <div class="form-group">
        <label for="">Title</label>
        <input type="text" required name="title">
    </div>
    <div class="form-group">
        <label for="">Short Text</label>
        <textarea name="short_text"></textarea>
    </div>
    <div class="form-group">
        <label for="">Text</label>
        <textarea name="text"></textarea>
    </div>
    <div class="form-group">
        <label for="">Image</label>
        <input type="file" required name="image">
    </div>

    <div class="form-group">
        <button class="btn">Insert</button>
    </div>
</form>