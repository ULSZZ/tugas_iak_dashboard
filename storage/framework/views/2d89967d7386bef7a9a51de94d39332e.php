  <!-- -------- START FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
  <footer class="footer py-5">
    <div class="container">
      <div class="row">

        <?php if(!auth()->user() || \Request::is('static-sign-up')): ?> 
          <div class="col-lg-8 mx-auto text-center mb-4 mt-2">
              <a href="https://dribbble.com/creativetim" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-dribbble" aria-hidden="true"></span>
              </a>
              <a href="https://twitter.com/CreativeTim" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-twitter" aria-hidden="true"></span>
              </a>
              <a href="https://www.instagram.com/creativetimofficial/" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-instagram" aria-hidden="true"></span>
              </a>
              <a href="https://ro.pinterest.com/thecreativetim/" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-pinterest" aria-hidden="true"></span>
              </a>
              <a href="https://github.com/creativetimofficial" target="_blank" class="text-secondary me-xl-4 me-4">
                  <span class="text-lg fab fa-github" aria-hidden="true"></span>
              </a>
          </div>
        <?php endif; ?>
      </div>
      <?php if(!auth()->user() || \Request::is('static-sign-up')): ?> 

      <?php endif; ?>
    </div>
  </footer>
  <!-- -------- END FOOTER 3 w/ COMPANY DESCRIPTION WITH LINKS & SOCIAL ICONS & COPYRIGHT ------- -->
<?php /**PATH C:\UUL\smster 7\IAK\dashboard_transportasi_iak-main\resources\views/layouts/footers/guest/footer.blade.php ENDPATH**/ ?>