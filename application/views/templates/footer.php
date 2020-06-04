<!-- Footer -->
<footer class="page-footer font-small bg-info mt-3">

    <!-- Social buttons -->
    <div class="primary-color">
        <div class="container ">

            <h3 class="text-center font-weight-bold pt-3 text-dark">Our Outlet</h3>
            <hr>


            <div class="row justify-content-center">
                <div class=" col-12 text-center mb-4">
                    <div class="row">
                        <div class="col-md">
                            <h5 class="font-weight-bold mt-3"> Alamat</h5>
                            <p class="fa fa-phone text-light"> No Hp : +6285262222596</p><br>
                            <p class="fa fa-map-marker text-light"> Jln. Brigjend Zein Hamid No.55</p>
                        </div>
                        <div class="col-md">
                            <h5 class="font-weight-bold mt-3">Fitur Point of </h5>
                            <p class="text-light">JoenFlorist memiliki fitur yang disesuaikan dengan kebutuhan usaha JoenFlorist, dengan fitur ini pemesanan produk lebih mudah dan aman.</p>
                        </div>

                    </div>
                </div>
            </div>

            <div class="row py-4 d-flex align-items-center">

                <!--Grid column-->
                <div class="col-md-6 col-lg-5 text-center text-md-left mb-4 mb-md-0">
                    <h6 class="mb-0 text-white">Get connected with us on social networks!</h6>
                </div>
                <!--Grid column-->

                <!--Grid column-->
                <div class="col-md-6 col-lg-7 text-center text-md-right">
                    <!--Facebook-->
                    <a class="fb-ic ml-0 " href="">
                        <i class="fa fa-facebook text-white mr-4" style="font-size:25px"> </i>
                    </a>
                    <!--Twitter-->
                    <a class="tw-ic" href="">
                        <i class="fa fa-twitter text-white mr-4" style="font-size:25px"> </i>
                    </a>
                    <!--Instagram-->
                    <a class="ins-ic" href="">
                        <i class="fa fa-instagram text-white mr-lg-4" style="font-size:25px"> </i>
                    </a>
                </div>
                <!--Grid column-->

            </div>

        </div>
        <hr>
        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© <?= date('Y'); ?> Copyright
            <a href="" class="text-white"> JoenFlorist</a>
        </div>
        <!-- Copyright -->
    </div>

    <a href="https://api.whatsapp.com/send?phone=6285262222596&text=*HaiMbakJoen%20Apa%20Kabar?!!" class="open-button fa fa-phone text-center" style="background-color: green;
  color: white;
  padding: 16px 16px;
  border: none;
  cursor: pointer;
  opacity: 0.8;
  position: fixed;
  bottom: 23px;
  text-decoration:none;
  right: 28px;
  width: 250px;"> Hubungi Kami</a>


</footer>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="<?= base_url('assets/js/lightbox.js'); ?>"></script>
<script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>


<!-- jQuery sticky menu -->
<script src="<?= base_url(); ?>assets/js/owl.carousel.min.js"></script>
<script src="<?= base_url(); ?>assets/js/jquery.sticky.js"></script>

<!-- jQuery easing -->
<script src="<?= base_url(); ?>assets/js/jquery.easing.1.3.min.js"></script>

<!-- Main Script -->
<script src="<?= base_url(); ?>assets/js/main.js"></script>

<!-- Slider -->
<script type="text/javascript" src="<?= base_url(); ?>assets/js/bxslider.min.js"></script>
<script type="text/javascript" src="<?= base_url(); ?>assets/js/script.slider.js"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>


<script>
    // When the user scrolls down 20px from the top of the document, slide down the navbar
    window.onscroll = function() {
        scrollFunction()
    };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("navbar").style.top = "0";
        } else {
            document.getElementById("navbar").style.top = "-50px";
        }
    }
</script>








</body>



</html>