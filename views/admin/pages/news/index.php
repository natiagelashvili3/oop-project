<div>
    <a href="<?= HOST.'admin/?page=news&action=create' ?>" class="btn">Create News</a>
</div>

<div class="table-container">
    <table>
    <tr>
        <th>ID</th>
        <th>Image</th>
        <th>Title</th>
        <th>Publis Date</th>
        <th class="table-actions">Actions</th>
    </tr>

    <?php foreach($data['news'] as $key => $value) { ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td>
                <img style="width: 100px" src="<?= HOST.'assets/uploads/'.$value['image'] ?>" alt="">
            </td>
            <td><?= $value['title'] ?></td>
            <td><?= $value['publish_date'] ?></td>
            <td>
                <a class="btn-action btn-edit" href="<?= HOST . 'admin/?page=news&action=edit&id='.$value['id'] ?>">Edit</a>
                <div>
                    <a class="btn-action btn-delete" data-id="<?= $value['id'] ?>" data-page="news">Delete</a>
                    <!-- <form method="post">
                        <input type="hidden" name="action" value="delete">
                        <input type="hidden" name="id" value="<?= $value['id'] ?>">
                    </form> -->
                </div>
            </td>
        </tr>
    <?php } ?>
    
    
    </table>
</div>