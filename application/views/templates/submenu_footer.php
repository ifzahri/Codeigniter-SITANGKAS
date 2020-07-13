      <!-- Footer -->
      <footer class="footer pt-0">
          <div class="row align-items-center justify-content-lg-between">
              <div class="col-lg-6">
                  <div class="copyright text-center text-lg-left text-muted">
                      &copy; 2020 <a href="https://www.creative-tim.com" class="font-weight-bold ml-1" target="_blank">SITANGKAS</a>
                  </div>
              </div>
          </div>
      </footer>

      <!-- Modal -->
      <div class="modal fade" id="editSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="editSubMenuModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="editSubMenuModalLabel">Tambah Submenu</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form action="<?= base_url('menu/submenu'); ?>" method="POST">
                      <div class="modal-body">
                          <div class="form-group">
                              <input type="text" class="form-control" id="title" name="title" placeholder="Nama Submenu">
                          </div>
                          <div class="form-group">
                              <select name="menu_id" id="menu_id" class="form-control">
                                  <option value="">Select Menu</option>
                                  <?php foreach ($menu as $m) : ?>
                                      <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                  <?php endforeach; ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="url" name="url" placeholder="URL Submenu">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="icon" name="icon" placeholder="Ikon Submenu">
                          </div>
                          <div class="form-group">
                              <div class="form-check custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" checked>
                                  <label class="custom-control-label" for="is_active">Aktif?</label>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <button type="submit" class="btn btn-primary">Tambah</button>
                  </form>
              </div>
          </div>
      </div>

      <div class="modal fade" id="newSubMenuModal" tabindex="-1" role="dialog" aria-labelledby="newSubMenuModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                  <div class="modal-header">
                      <h5 class="modal-title" id="newSubMenuModalLabel">Edit Submenu</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                      </button>
                  </div>
                  <form action="<?= base_url('menu/submenu'); ?>" method="POST">
                      <div class="modal-body">
                          <div class="form-group">
                              <input type="text" class="form-control" id="title" name="title" value="<?= $menu['title']; ?>">
                          </div>
                          <div class="form-group">
                              <select name="menu_id" id="menu_id" class="form-control">
                                  <option value="">Select Menu</option>
                                  <?php foreach ($menu as $m) : ?>
                                      <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                  <?php endforeach; ?>
                              </select>
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="url" name="url" placeholder="URL Submenu">
                          </div>
                          <div class="form-group">
                              <input type="text" class="form-control" id="icon" name="icon" placeholder="Ikon Submenu">
                          </div>
                          <div class="form-group">
                              <div class="form-check custom-control custom-checkbox">
                                  <input type="checkbox" class="custom-control-input" id="is_active" name="is_active" value="1" checked>
                                  <label class="custom-control-label" for="is_active">Aktif?</label>
                              </div>
                          </div>
                      </div>
                      <div class="modal-footer">
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Tutup</button>
                          <button type="submit" class="btn btn-primary">Tambah</button>
                  </form>
              </div>
          </div>
      </div>
      </div>

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
      <script src="<?= base_url('assets') ?>/vendor/list.js/dist/list.min.js"></script>
      <!-- Argon JS -->
      <script src="<?= base_url('assets'); ?>/js/argon.js?v=1.1.0"></script>
      <!-- Demo JS - remove this in your project -->
      <script src="<?= base_url('assets'); ?>/js/demo.min.js"></script>

      </body>

      </html>