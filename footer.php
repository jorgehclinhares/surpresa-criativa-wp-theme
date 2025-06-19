<?php wp_footer(); ?>
<footer>
  <img src="<?php echo get_template_directory_uri(); ?>/assets/images/svgs/logo.svg" alt="Logo">
  <p>© <?php echo date('Y'); ?> Todos os direitos reservados.</p>
  <a href="https://www.instagram.com/surpresacriativa.com.br" target="_blank">Instragram</a>
</footer>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
<script>
  function validarBusca(form) {
    var termo = form.s.value.trim();
    if (termo.length === 0) {
      window.location.href = "<?php echo esc_url(home_url('/')); ?>";
      return false;
    }
    return true;
  }
</script>
</body>

</html>