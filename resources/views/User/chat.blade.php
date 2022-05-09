<!DOCTYPE html>
<html lang="en">
    @include('User.files.style_files')
</html>
<body class="aos-all" id="transcroller-body">


    <menu class=" container menu" id="home">
        <nav class="undefined main-menu animate__animated animate__bounceInDown " id="menu">
          <label class="show-menu" for="show-menu">
            <div class="topbar"><span class="logo menu-logo mobile-logo dark-logo"><a href="index.html"><img src="./src/img/logo.png" alt="#{logoMenu}"/></a></span>
              <div class="lines"></div>
            </div>
          </label>
          <input id="show-menu" type="checkbox"/>
          <ul id="menu">
            <li class="undefined logo menu-logo "><a href="index.html"><img src="./src/img/logo.png" alt="#{logoMenu}"/><img class="logo-small court" src="./src/img/court justice.jpg" alt="#{logoMenu}"/></a></li>
            <div class="undefined menu-links " id="menu_links">
              <li class="button no-margin"><a class="btn btn-sm btn-" href="#"><i class="fas fa-search"></i></a>
              </li>
              <li class="button no-margin"><a class="btn btn-sm btn-" href="/Chat"><i class="fab fa-rocketchat"></i></a>
              </li>
              <li class="button no-margin"><a class="btn btn-sm btn-" href="#"><i class="fas fa-calendar-alt"></i></a>
              </li>
              <li><a href="/Dashboard">Dashboard</a></li>
              <li><a href="/">Logout</a></li>
            </div>
          </ul>
        </nav>
      </menu>

  <div class="main_content top-fixed full-width">
    <div id="frame">
      <div id="sidepanel">
        <div id="profile">
          <div class="wrap"><img class="online" id="profile-img" src="src/img/users/user-1.png" alt="">
            <p>John Doe</p><i class="fa fa-chevron-down expand-button"></i>
            <div id="status-options">
              <li class="active" id="status-online"><span class="status-circle"></span>
                <p>Online</p>
              </li>
              <li id="status-away"><span class="status-circle">Away</span></li>
              <li id="status-busy"><span class="status-circle">Busy</span></li>
              <li id="status-offline"><span class="status-circle">Offline</span></li>
            </div>
            <div id="expanded">
              <li><a href=""> <i class="fas fa-gear" aria-hidden="true"></i>
                  <p>Settings </p></a></li>
              <li><a href=""> <i class="fas fa-user" aria-hidden="true"></i>
                  <p>Profile </p></a></li>
              <li><a href=""> <i class="fas fa-arrow-right-from-bracket" aria-hidden="true"></i>
                  <p>Logout </p></a></li>
            </div>
          </div>
        </div>
        <div id="search">
          <label for=""><i class="fas fa-search fa-fw" aria-hidden="true"></i></label>
          <input type="text" placeholder="Search Contacts">
        </div>
        <div id="contacts">
          <ul>
            <li class="contact">
              <div class="wrap"><span class="contact-status online"></span><img src="src/img/users/user-6.png"/>
                <div class="meta">
                  <p class="name">Lorem name Ex</p>
                  <p class="preview">Lorem ipsum sir dolor amet</p>
                </div>
              </div>
            </li>
            <li class="contact">
              <div class="wrap"><span class="contact-status online"></span><img src="src/img/users/user-2.png"/>
                <div class="meta">
                  <p class="name">Lorem 2</p>
                  <p class="preview">Lorem ipsum sir dolor amet</p>
                </div>
              </div>
            </li>
            <li class="contact">
              <div class="wrap"><span class="contact-status online"></span><img src="src/img/users/user-3.png"/>
                <div class="meta">
                  <p class="name">Lorem 3</p>
                  <p class="preview">Lorem ipsum sir dolor amet</p>
                </div>
              </div>
            </li>
            <li class="contact">
              <div class="wrap"><span class="contact-status online"></span><img src="src/img/users/user-4.png"/>
                <div class="meta">
                  <p class="name">Lorem Ex 4</p>
                  <p class="preview">Lorem ipsum sir dolor amet</p>
                </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="content">
        <div class="contact-profile"><img src="src/img/users/user-5.png">
          <p>Harvey Specter</p>
          <div class="social-media"><i class="fab fa-facebook" aria-hidden="true"></i><i class="fab fa-twitter" aria-hidden="true"></i><i class="fab fa-instagram" aria-hidden="true"></i></div>
        </div>
        <div class="messages">
          <ul>
            <li class="sent"><img ssrc="src/img/users/user-1.png"/>
              <p>Lorem ipsum sir</p>
            </li>
            <li class="replies"><img ssrc="src/img/users/user-5.png"/>
              <p>Curabitur at dolor libero. </p>
            </li>
            <li class="sent"><img ssrc="src/img/users/user-1.png"/>
              <p>Aliquam non metus pretium, ornare sapien non, ornare arcu. Sed vel elementum est, dignissim maximus metus. Quisque ultricies cursus libero, non dictum justo pulvinar quis.</p>
            </li>
            <li class="sent"><img ssrc="src/img/users/user-1.png"/>
              <p>Lorem ipsum sir</p>
            </li>
            <li class="replies"><img ssrc="src/img/users/user-5.png"/>
              <p>Phasellus fringilla eros a mauris tempus, ac molestie velit ultrices. Morbi eu nisl id lacus finibus malesuada viverra sit amet nunc. In vel ligula dolor.</p>
            </li>
            <li class="sent"><img ssrc="src/img/users/user-1.png"/>
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </li>
          </ul>
        </div>
        <div class="message-input">
          <div class="wrap">
            <input type="text" name="msg" placeholder="Write your message...">
            <button class="submit"><i class="fas fa-paper-plane"> </i></button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shaded" id="backToTop" onclick="goTop()"><i class="fas fa-angle-up"> </i></div>
</body>
@include('User.files.script_files')
<script>
  AOS.init({
      easing: 'ease-in-out-sine'
  });
</script>
<script src="./src/js/chat.js"> </script>
