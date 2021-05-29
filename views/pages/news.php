<section class="news-section">
    <div class="container">
        <div class="row">
            <?php foreach($data['news'] as $key => $value){ ?>
                <div class="news-item-row wow fadeInUp" data-wow-delay="0ms">
                    <div class="news-item">
                        <div class="news_box">
                            <div class="newsimg"><img class="img-responsive" src="<?= HOST.'assets/uploads/'.$value['image'] ?>" alt=""></div>
                            <div class="news-content">
                                <div class="news_postdate">
                                    <?php
                                        $time = strtotime($value['publish_date']);
                                        $date = date('M d, Y', $time);
                                    ?>
                                    <span><?= $date ?></span>
                                </div>
                                <a href="#">
                                    <h3><?= $value['title'] ?></h3>
                                </a>
                                <p><?= $value['short_text'] ?></p>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        </div>
    </div>
</section>