<main>
    <section class="single-page-content page-contact">
        <div class="container">
            <h1>Contact Us</h1>
            <form id="contact-form" method="post">
                <div class="form-group">
                    <label>Name</label>
                    <input type="text" name="name">
                </div>
                <div class="form-group">
                    <label>Lastname</label>
                    <input type="text" name="lastname">
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="text" name="email">
                </div>
                <div class="form-group">
                    <label>Message</label>
                    <textarea name="message"></textarea>
                </div>
                <div class="form-group">
                    <button class="link-default">Send</button>
                </div>
            </form>

            <?php if($data['contact_send'] == true): ?>
                <p><?= $data['contact_send_message'] ?></p>
            <?php endif; ?>
        </div>
    </section>
</main>