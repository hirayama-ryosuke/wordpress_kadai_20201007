<?php echo hello ?>
<?php get_footer();?>

<?php wp_footer(); ?>

<?php
if( is_home() ){
    wp-enqueue_style('font-awesome', 'https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
    wp_enqueue_script('jquery');
}
?>
</body>
</html>