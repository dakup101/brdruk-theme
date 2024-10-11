<?php
$is_gray = get_field('is_gray') ?? false;
$title = get_field('title') ?? null;
$content = get_field('content') ?? null;
$button = get_field('button') ?? null;

$section_class = $is_gray ? 'text-section text-section--gray' : 'text-section';
?>

<section class="<?php echo $section_class ?>">
    <article class="container">
        <?php if ($title): ?>
            <h2 class="text-section__title font-title">
                <span><?php echo $title ?></span>
            </h2>
        <?php endif; ?>
        <?php if ($content): ?>
            <div class="text-section__content text-content">
                <?php echo $content ?>
            </div>
        <?php endif; ?>
        <?php if ($button): ?>
            <div class="text-section__button">
                <a href="<?php echo $button['url'] ?>" class="btn btn--dark" title="<?php echo $button['title'] ?>">
                    <span>
                        <?php echo $button['title'] ?>
                    </span>
                </a>
            </div>
        <?php endif; ?>
    </article>
</section>