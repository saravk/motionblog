<?php
/**
 * The sidebar containing the main widget area
 *
 * @package Neblue
 */

if (!is_active_sidebar('sidebar-1')) {
  return;
}
?>
<aside id="secondary" class="widget-area sidebar-area">
  <?php dynamic_sidebar( 'sidebar-1' ); ?>
</aside>
