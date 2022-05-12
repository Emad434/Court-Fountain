<!DOCTYPE html>
<html lang="en">
    @include('User.files.style_files')
    <script src="https://cdn.ckeditor.com/ckeditor5/34.0.0/classic/ckeditor.js"></script>

</html>
<body class="aos-all" id="transcroller-body">
    @include('layouts.User.nav_bar')
  <div class="main_content top-fixed">
    <section class="no-padding mt-8" id="latest_news_title">
      <div class="aos-item" data-aos="fade-up" data-aos-duration="350" data-aos-delay="0" data-aos-easing="ease-out" data-aos-anchor-placement="top-bottom">
        <div class="aos-item__inner">
          <div class="container container-header">
            <div class="title"><span>Latest News</span></div>
            <div class="subtitle mb-5"><span>Latest News for New York Adult Drug Court</span></div>
            <div id="breadcumb">
              <div class="breadcumb">
                <div class="path">
                  <p><a href="#">Latest News</a></p>
                  <p>/</p>
                  <p>Breadcumb Article News Example</p>
                </div>

                <div class="buttons"></div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="d-flex f-grow lg-padding bg-gray" id="empty">

    </section>
    <div class="line_hr"></div>
    <footer class="text-dark">
      <div class="container pt-2">
        <div class="content">
          <div class="footer-content">
            <div class="copyright">
              <p>Center for Court Innovation © All Rights Reserved</p>
            </div>
            <div class="social"><a class="btn btn-lg btn-circle btn-social d-flex-centered"><i class="fab fa-facebook-f"></i></a><a class="btn btn-lg btn-circle btn-social d-flex-centered"><i class="fab fa-twitter"></i></a></div>
          </div>
        </div>
      </div>
    </footer>
  </div>
  <div class="shaded" id="backToTop" onclick="goTop()"><i class="fas fa-angle-up"> </i></div>


</body>
@include('User.files.script_files')
<script>

  AOS.init({
      easing: 'ease-in-out-sine'
  });
</script>
