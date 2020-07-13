      <!-- Footer -->
      <footer class="footer pt-0">
          <div class="row align-items-center">
              <div class="col-lg-6">
                  <div class="copyright text-center text-lg-right text-muted">
                      &copy; 2020 SITANGKAS
                  </div>
              </div>
          </div>
      </footer>
      </div>
      </div>
      <!-- Argon Scripts -->
      <!-- Core -->
      <script src="<?= base_url('assets'); ?>/vendor/jquery/dist/jquery.min.js"></script>
      <script src="<?= base_url('assets'); ?>/vendor/bootstrap/dist/js/bootstrap.bundle.min.js"></script>
      <script src="<?= base_url('assets'); ?>/vendor/js-cookie/js.cookie.js"></script>
      <script src="<?= base_url('assets'); ?>/vendor/jquery.scrollbar/jquery.scrollbar.min.js"></script>
      <script src="<?= base_url('assets'); ?>/vendor/jquery-scroll-lock/dist/jquery-scrollLock.min.js"></script>
      <!-- Optional JS -->
      <script src="<?= base_url('assets'); ?>/vendor/chart.js/dist/Chart.min.js"></script>
      <script src="<?= base_url('assets'); ?>/vendor/chart.js/dist/Chart.extension.js"></script>
      <script src="<?= base_url('assets'); ?>/vendor/bootstrap-notify/bootstrap-notify.min.js"></script>
      <script src="<?= base_url('assets') ?>/vendor/sweetalert2/dist/sweetalert2.min.js"></script>
      <script src="<?= base_url('assets') ?>/vendor/sweetalert2/dist/myscript.js"></script>
      <!-- Argon JS -->
      <script src="<?= base_url('assets'); ?>/js/argon.js?v=1.1.0"></script>
      <!-- Demo JS - remove this in your project -->
      <script src="<?= base_url('assets'); ?>/js/demo.min.js"></script>

      <script>
          $('.custom-file-input').on('change', function() {
              let fileName = $(this).val().split('\\').pop();
              $(this).next('.custom-file-label').addClass("selected").html(fileName);
          });

          $('.form-check-input').on('click', function() {
              const menuId = $(this).data('menu');
              const roleId = $(this).data('role');

              $.ajax({
                  url: "<?= base_url('admin/changeaccess'); ?>",
                  type: 'post',
                  data: {
                      menuId: menuId,
                      roleId: roleId
                  },
                  success: function() {
                      document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
                  }
              });
          });
      </script>
      </body>

      </html>