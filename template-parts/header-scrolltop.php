<?php
/**
 * The template for adding a ScrollTop button with AMP Animation
 *
 * @package MotionBlog
 */
?>

<amp-position-observer on="enter:hideAnim.start; exit:showAnim.start" layout="nodisplay">
  </amp-position-observer>
  <amp-animation id="showAnim" layout="nodisplay">
    <script type="application/json">
      {
        "duration": "200ms", "fill": "both", "iterations": "1", "direction": "alternate",
        "animations": [{"selector": "#scrollToTopButton", "keyframes": [{"opacity": "1","visibility": "visible"}]}]
      }
    </script>
  </amp-animation>  
  <amp-animation id="hideAnim" layout="nodisplay">
    <script type="application/json">
      {
        "duration": "200ms", "fill": "both", "iterations": "1", "direction": "alternate",
        "animations": [{"selector": "#scrollToTopButton", "keyframes": [{"opacity": "0", "visibility": "hidden"}]}]
      }
    </script>
  </amp-animation>  
<style amp-custom>
  .scrollToTop {color: var(--color-text-light);box-shadow: var(--box-shadow-1);font-size: 1.4em;width: 60px;height: 60px;border-radius: 50%;border: none;outline: none;background: var(--color-primary);z-index: 9999;bottom: var(--space-4);right: var(--space-2);position: fixed;opacity: 0;visibility: hidden;}
.scrollarrow {position: absolute;top: 50%;left: 50%;width: 18px;height: 18px;margin-left: -9px;margin-top: -5px;cursor: pointer;}
.scrollarrow:hover polyline, .scrollarrow:focus polyline {stroke-width: 15;}
.scrollarrow:active polyline {stroke-width: 15;transition: all 100ms ease-in-out;}  
</style>
<button id="scrollToTopButton" on="tap:siteheader.scrollTo(duration=200)" class="scrollToTop">
  <svg class="scrollarrow" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" viewBox="5 0 50 80" xml:space="preserve">
    <polyline fill="none" stroke="#FFFFFF" stroke-width="8" stroke-linecap="round" stroke-linejoin="round" points="
0.375, 35.375 28.375, 0.375 58.67, 35.375 " />
  </svg>
</button>  