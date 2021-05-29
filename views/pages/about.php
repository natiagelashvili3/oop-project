<main>
    <section class="single-page-content">
        <div class="container">
            <h1>
                <?= $data['about']['title'] ?>
            </h1>
            <div style="text-align:center; margin: 10px">
                <form action="" method="post">
                    <input type="submit" name="pdf" value="Generate PDF">
                </form>
            </div>
            <p>
                <?= $data['about']['text'] ?>
            </p>
        </div>
    </section>
</main>
