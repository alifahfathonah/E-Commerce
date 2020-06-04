 <!-- partial:partials/_footer.html -->
 <footer class="footer">
     <div class="container-fluid clearfix">
         <span class="text-muted d-block text-center ">Copyright © <?= date(''); ?>
             <a href="" target="_blank">Gorbyno.id</a>. All rights reserved.</span>

     </div>
 </footer>
 <!-- partial -->
 </div>


 <!-- main-panel ends -->
 </div>
 <!-- page-body-wrapper ends -->
 </div>
 <!-- container-scroller -->

 <!-- plugins:js -->
 <script src="<?= base_url("assets/"); ?>vendors/js/vendor.bundle.base.js"></script>
 <script src="<?= base_url("assets/"); ?>vendors/js/vendor.bundle.addons.js"></script>
 <!-- endinject -->
 <!-- Plugin js for this page-->
 <!-- End plugin js for this page-->
 <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.8.5/js/mdb.min.js"></script>
 <!-- inject:js -->
 <script src="<?= base_url("assets/"); ?>js/off-canvas.js"></script>
 <script src="<?= base_url("assets/"); ?>js/misc.js"></script>
 <!-- endinject -->

 <!-- Custom js for this page-->
 <script src="<?= base_url("assets/"); ?>js/dashboard.js"></script>




 <!-- Custom js for this page-->
 <script src="<?= base_url("assets/"); ?>js/chart.js"></script>
 <!-- End custom js for this page-->
 <script type="text/javascript" charset="utf8" src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>

 <script>
     $(document).ready(function() {
         $('#table_id').DataTable();
     });
 </script>

 </body>

 </html>