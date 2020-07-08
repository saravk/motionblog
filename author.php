<?php
/**
 * Author template file
 *
 * @package Motion Blog
 */

// header
get_header();

$curauth = (isset($_GET['author_name'])) ? get_user_by('slug', $author_name) : get_userdata(intval($author));
$author_id = $curauth->id
?>

<div class="page-author-container">
  <h2><?php the_author_meta( 'display_name', $author_id ); ?></h2>
  <div class="author-description">
    <?php the_author_meta( 'description', $author_id ); ?>
  </div>
  <div class="author-social-links">
    <?php mb_author_social_links($author_id);?>
  </div>
</div>

<?php
// blog posts with pagination and sidebar
get_template_part( 'template-parts/homepage' );

// footer
get_footer();
