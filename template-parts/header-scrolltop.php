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

  .scrollToTop {
    color: var(--color-text-light);
    font-size: 1.4em;
    box-shadow: var(--box-shadow-1);
    width: 50px;
    height: 50px;
    border-radius: 50%;
    border: none;
    outline: none;
    background: var(--color-primary);
    z-index: 9999;
    bottom: var(--space-2);
    right: var(--space-2);
    position: fixed;
    opacity: 0;
    visibility: hidden;
  }
</style>
<button id="scrollToTopButton" on="tap:siteheader.scrollTo(duration=200)" class="scrollToTop">⌃</button>  