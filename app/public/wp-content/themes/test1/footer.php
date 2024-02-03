<footer>

  <section class="footer-widgets">
    <div class="container">
      <div class="row">Footer Widgets</div>
    </div>
  </section>
  <section class="copyright">
    <div class="container">
      <div class="row">
        <div class="copyright-text col-12 col-md-6">
          <p><?php echo get_theme_mod('set_copyright', 'Copyright X - All Right Reserved'); ?></p>
        </div>
        <nav class="footer-menu col-12 col-md-6 text-left text-md-right">
          <?php 
            wp_nav_menu(
              array(
                'theme_location' => 'fancy_lab_footer_menu'
              )
              );
           ?>
        </nav>
      </div>
    </div>
  </section>

</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

<?php wp_footer(); ?>
</body>

</html>