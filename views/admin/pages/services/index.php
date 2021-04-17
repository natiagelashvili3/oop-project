<div>
    <a href="<?= HOST.'admin/?page=services&action=create' ?>" class="btn">Create New Service</a>
</div>

<div class="table-container">
    <table>
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Text</th>
        <th>Actions</th>
    </tr>

    <?php foreach($data['services'] as $key => $value) { ?>
        <tr>
            <td><?= $value['id'] ?></td>
            <td><?= $value['name'] ?></td>
            <td><?= $value['text'] ?></td>
            <td>
                <a href="">Edit</a>
                <a href="">Delete</a>
            </td>
        </tr>
    <?php } ?>
    
    
    </table>
</div>