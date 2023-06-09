<div class="about-us_executive-slidings__item flex flex-col items-center justify-center gap-12 sm:flex-row">
    <div class="about-us_executive-slidings__photo">
        <?php the_post_thumbnail('full') ?>
    </div>
    <div class="about-us_executive-slidings__text flex flex-col text-center sm:text-left">
        <?php the_title('<p class="executive-slidings__name text-3xl leading-10">', '</p>'); ?>
        <p class="executive-slidings__position text-xl leading-7"><?php echo esc_html(get_field('position')) ?></p>
        <div class="profile_bo_data">
            <div class="italic mt-5"><?php the_content() ?></div>
        </div>
        <p class="mt-7 text-4xl font-bold text-itc-light-gray italic sm:text-6xl"><?php echo esc_html(strtoupper(get_field('core_value_1'))) ?></p>
        <p class="text-4xl font-bold text-itc-light-gray italic sm:text-6xl"><?php echo esc_html(strtoupper(get_field('core_value_2'))) ?></p>
        <p class="text-4xl font-bold text-itc-light-gray italic sm:text-6xl"><?php echo esc_html(strtoupper(get_field('core_value_3'))) ?></p>
    </div>
</div>