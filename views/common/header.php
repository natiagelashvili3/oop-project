<header>
    <div class="container">
        <nav>
            <ul>
                <li>
                    <?php foreach($data['menu'] as $key => $value): ?>
                        <a href="<?= $value['path'] ?>"><?= $value['name'] ?></a>
                    <?php endforeach; ?>
                </li>
            </ul>
        </nav>
    </div>
</header>