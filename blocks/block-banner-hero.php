<?php
$title = get_field('title') ?? null;
$content = get_field('content') ?? null;
$button_1 = get_field('button_1') ?? null;
$button_2 = get_field('button_2') ?? null;
$bg_img = get_field('bg') ?? null;
?>

<section class="banner-hero">
    <div class="banner-hero__inner container">
        <figure class="banner-hero__decoration">
            <img src="<?php echo IMG . 'spinner-main-light.svg' ?>" alt="BR Druk">
            <img src="<?php echo IMG . 'spinner-text-light.svg' ?>" alt="BR Druk">
        </figure>
        <?php if ($title): ?>
            <h1 class="banner-hero__title font-title">
                <?php echo $title ?>
            </h1>
        <?php endif; ?>
        <?php if ($content): ?>
            <div class="banner-hero__content text-content">
                <?php echo $content ?>
            </div>
        <?php endif; ?>

        <?php if ($button_1 || $button_2): ?>
            <div class="banner-hero__buttons">
                <?php if ($button_1): ?>
                    <a href="<?php echo $button_1['url'] ?>" class="btn btn--dark" title="<?php echo $button_1['title'] ?>">
                        <span>
                            <?php echo $button_1['title'] ?>
                        </span>
                    </a>
                <?php endif; ?>

                <?php if ($button_2): ?>
                    <a href="<?php echo $button_2['url'] ?>" class="btn btn--light" title="<?php echo $button_2['title'] ?>">
                        <span>
                            <?php echo $button_2['title'] ?>
                        </span>
                    </a>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>

    <?php if ($bg_img) : ?>
        <img src="<?php echo $bg_img ?>" alt="BR Druk Opole" class="banner-hero__bg">
    <?php endif; ?>
</section>