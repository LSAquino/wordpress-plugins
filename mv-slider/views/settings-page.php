<div class="wrap">
    <h1><?= get_admin_page_title(); ?></h1>
    <form action="options.php" method="POST">
        <?php 
        settings_fields('mv_slider_group');
        do_settings_sections('mv_slider_page1');
        submit_button('Save Settings');
        ?>
    </form>
</div>