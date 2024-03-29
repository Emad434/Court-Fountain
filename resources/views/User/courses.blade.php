<!DOCTYPE html>
<html lang="en">
    @include('User.files.style_files')
</html>
<body class="aos-all" id="transcroller-body">
    @include('layouts.User.nav_bar')
  <div class="main_content top-fixed">
    <section class="lg-padding" id="gallery">
      <div class="container">
        <div class="container-header mb-5">
          <div class="title"><span>Courses</span></div>
          <div class="subtitle"> <span>Lacus malesuada at viverra ut accumsan sagittis, hac.</span></div>
        </div>
      </div>
      <div class="container">
        <div class="gallery-image">
          <div class="img-box"><img src="https://picsum.photos/350/250?image=444"/>
            <div class="caption-visible">
              <p>MPS21192S4</p>
              <p class="opacity-low">Process Protocol</p><a class="btn btn-xs btn-primary" href="#">In Progress </a>
            </div>
            <div class="transparent-box">
              <div class="caption">
                <p>Title Sample</p>
                <p class="opacity-low">Subtitle Sample Content</p>
              </div>
            </div>
          </div>
          <div class="img-box"><img src="https://picsum.photos/350/250?image=232"/>
            <div class="caption-visible">
              <p>CPS21192S7</p>
              <p class="opacity-low">Process Protocol</p><a class="btn btn-xs btn-primary" href="#">In Progress </a>
            </div>
            <div class="transparent-box">
              <div class="caption">
                <p>Sample 2</p>
                <p class="opacity-low">Subtitle Protocol</p>
              </div>
            </div>
          </div>
          <div class="img-box"><img src="https://picsum.photos/350/250?image=431"/>
            <div class="caption-visible">
              <p>NPS21192S6</p>
              <p class="opacity-low">Process Protocol</p><a class="btn btn-xs btn-primary" href="#">In Progress </a>
            </div>
            <div class="transparent-box">
              <div class="caption">
                <p>Title 3</p>
                <p class="opacity-low">Subtitle Name</p>
              </div>
            </div>
          </div>
          <div class="img-box"><img src="https://picsum.photos/350/250?image=532"/>
            <div class="caption-visible">
              <p>MPS21192S4</p>
              <p class="opacity-low">Process Protocol</p><a class="btn btn-xs btn-primary" href="#">In Progress </a>
            </div>
            <div class="transparent-box">
              <div class="caption">
                <p>Title Sample</p>
                <p class="opacity-low">Subtitle Sample Content</p>
              </div>
            </div>
          </div>
          <div class="img-box"><img src="https://picsum.photos/350/250?image=436"/>
            <div class="caption-visible">
              <p>CPS21192S7</p>
              <p class="opacity-low">Process Protocol</p><a class="btn btn-xs btn-primary" href="#">In Progress </a>
            </div>
            <div class="transparent-box">
              <div class="caption">
                <p>Sample 2</p>
                <p class="opacity-low">Subtitle Protocol</p>
              </div>
            </div>
          </div>
          <div class="img-box"><img src="https://picsum.photos/350/250?image=237"/>
            <div class="caption-visible">
              <p>NPS21192S6</p>
              <p class="opacity-low">Process Protocol</p><a class="btn btn-xs btn-primary" href="#">In Progress </a>
            </div>
            <div class="transparent-box">
              <div class="caption">
                <p>Title 3</p>
                <p class="opacity-low">Subtitle Name</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <input type="checkbox" id="target-modal">
    <div class="modal">
      <div class="modal-inner">
        <label class="close-modal" for="target-modal"></label>
        <div class="contact" id="contact">
          <form class="contact-form" action="#" id="contact">
            <h5 class="title">Contact Us</h5>
            <p class="description mb-5">Feel free to contact us if you need any assistance, any help or another question.</p>
            <Fieldset>
              <input type="text" id="name" placeholder="Your name" required autofocus tabindex="1">
            </Fieldset>
            <Fieldset>
              <input type="text" id="email" placeholder="Your email" required tabindex="2">
            </Fieldset>
            <Fieldset>
              <textarea placeholder="Your message" required tabindex="3"> </textarea>
            </Fieldset>
            <div class="button-group d-flex-centered"><a class="btn btn-lg btn-primary send_mail">Send Message</a></div>
          </form>
        </div>
      </div>
      <label class="overlay-modal" for="target-modal"></label>
    </div>
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
