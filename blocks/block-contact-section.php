<?php
$cf_title = get_field('cf_title') ?? null;
$cf_code = get_field('cf_code') ?? null;
$info_title = get_field('info_title') ?? null;
$content = get_field('content');
?>

<section class="contact-section">
    <div class="contact-section__inner container">
        <?php if ($cf_title && $cf_code): ?>
            <div class="contact-section__form">
                <h2 class="text-section__title font-title">
                    <?php echo $cf_title ?>
                </h2>
                <div class="contact-section__form">
                    <?php echo do_shortcode($cf_code); ?>
                </div>
            </div>
        <?php endif; ?>
        <?php if ($info_title && $content): ?>
            <div class="contact-section__form">
                <h2 class="text-section__title font-title">
                    Dane Kontaktowe
                </h2>
                <div class="contact-section__info text-content">
                    <p>Blah blah blah</p>
                </div>
            </div>
        <?php endif; ?>
    </div>
</section>