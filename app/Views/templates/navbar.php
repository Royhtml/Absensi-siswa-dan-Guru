<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-transparent navbar-absolute fixed-top">
   <div class="container-fluid">
      <div class="navbar-wrapper">
         <p class="navbar-brand my-auto"><b><?= $title; ?></b></p>
      </div>
      <button class="navbar-toggler" type="button" data-toggle="collapse" aria-controls="navigation-index" aria-expanded="false" aria-label="Toggle navigation">
         <span class="sr-only">Toggle navigation</span>
         <span class="navbar-toggler-icon icon-bar"></span>
         <span class="navbar-toggler-icon icon-bar"></span>
         <span class="navbar-toggler-icon icon-bar"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-end">
         <ul class="navbar-nav">
            <!-- Dark mode toggle -->
            <li class="nav-item d-flex align-items-center mr-2">
               <button class="btn btn-just-icon btn-link text-dark font-weight-bold" id="darkModeToggle" title="Toggle dark mode" style="font-size: 20px; padding: 0; margin: 0; background: none; border: none; box-shadow: none; cursor: pointer;">
                  🌓
               </button>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link" href="javascript:;" id="navbarDropdownScan" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">qr_code</i>
                  <p class="d-lg-none d-md-block">
                     Scan
                  </p>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownScan">
                  <a class="dropdown-item" href="<?= base_url('scan/masuk'); ?>">Absen masuk</a>
                  <a class="dropdown-item" href="<?= base_url('scan/pulang'); ?>">Absen pulang</a>
               </div>
            </li>
            <li class="nav-item dropdown">
               <a class="nav-link <?= is_superadmin() ? 'text-danger' : ''; ?>" href="javascript:;" id="navbarDropdownProfile" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  <i class="material-icons">person</i>
                  <p class="d-lg-none d-md-block">
                     Account
                  </p>
                  <span>User : <?= user()->toArray()['username']; ?></span>
               </a>
               <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdownProfile">
                  <a class="dropdown-item" href="#">
                     Email: <?= user()->toArray()['email']; ?>
                  </a>
                  <a class="dropdown-item" href="#">
                     Role:
                     <span class="h6 text-capitalize ml-2 my-auto badge badge-<?= is_superadmin() ? 'danger' : 'success'; ?>">
                        <?= user_role()->label(); ?>
                     </span>
                  </a>
                  <div class="dropdown-divider"></div>
                  <a class="dropdown-item" href="<?= base_url('/logout'); ?>">
                     Log Out
                  </a>
               </div>
            </li>
         </ul>
      </div>
   </div>
</nav>
<!-- End Navbar -->