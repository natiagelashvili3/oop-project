<div>
    <a href="<?= HOST.'admin/?page=menu&action=create' ?>" class="btn">Create Menu Item</a>
</div>

<div class="table-container">
    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Path</th>
        <th>Order</th>
        <th class="table-actions">Actions</th>
    </tr>

    <?php foreach($data['menu'] as $key => $value) { ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['path'] ?></td>
            <td><?= $value['ord'] ?></td>
            <td>
                <a class="btn-action btn-edit" href="<?= HOST . 'admin/?page=menu&action=edit&id='.$value['id'] ?>">Edit</a>
                <div>
                    <a class="btn-action btn-delete" data-id="<?= $value['id'] ?>" data-page="menu">Delete</a>
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