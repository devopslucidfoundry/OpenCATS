<?php get_header(); ?>
    <div id="main" class="home">
        <?php TemplateUtility::printQuickSearch(); ?>
        <div id="contents" style="padding-top: 10px;">
            <?php print $content ?>
        </div>
    </div>
<?php get_footer(); ?>
