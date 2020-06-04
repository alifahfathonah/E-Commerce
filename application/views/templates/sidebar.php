 <!-- partial:partials/_sidebar.html -->
 <nav class="sidebar sidebar-offcanvas" id="sidebar">
     <ul class="nav">
         <li class="nav-item nav-profile">
             <div class="nav-link">
                 <div class="user-wrapper">
                     <div class="profile-image">
                         <img src="<?= base_url("assets/images/home-right.png"); ?>" alt="<?= "JoenFLorist" ?> ">
                     </div>
                     <div class="text-wrapper">
                         <p class="profile-name"><?php echo $this->session->userdata('nama_user'); ?></p>
                         <div>
                             <small class="designation text-muted">Manager</small>
                             <span class="status-indicator online"></span>
                         </div>
                     </div>
                 </div>

             </div>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url("dashboard"); ?>">
                 <i class="menu-icon mdi mdi-television"></i>
                 <span class="menu-title">Dashboard</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" target="_blank" href="<?= base_url("home"); ?>">
                 <i class="menu-icon mdi mdi-send"></i>
                 <span class="menu-title">Lihat Website</span>
             </a>
         </li>
         <li class="nav-item">
             <a class="nav-link" href="<?= base_url("dashboard/produk"); ?>">
                 <i class="menu-icon mdi mdi-laptop"></i>
                 <span class="menu-title">Produk</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" href="<?= base_url("dashboard/promo"); ?>">
                 <i class="menu-icon mdi mdi-laptop"></i>
                 <span class="menu-title">Promo</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" href="<?= base_url("dashboard/admin"); ?>">
                 <i class="menu-icon mdi mdi-account"></i>
                 <span class="menu-title">Administrator</span>
             </a>
         </li>

         <li class="nav-item">
             <a class="nav-link" href="<?= base_url("dashboard/logout"); ?>">
                 <i class="menu-icon mdi mdi-power"></i>
                 <span class="menu-title">Keluar</span>
             </a>
         </li>
     </ul>
 </nav>