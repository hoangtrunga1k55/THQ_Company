<template>
  <div id="fixed-elements">
    <div id="slide-menu">
      <div class="slide-menu-header">
        <div class="mobile-logo"><a class="logo-img" href="https://casper-pbt.blogspot.com/" rel="home">
          <img alt="Casper - Blogger Template"
               data-src="https://blogger.googleusercontent.com/img/a/AVvXsEiDy9ya2pRGz4e8yyRd0lik5lhnFSQNjN5c3AP9ke4-j4MxrAtbDBOUPD_clfsbMslmvymHuXS3Z1FtP_yGkuGobRsfaMpouVihA3DyG1yAnhM65bpUKj6U0ZK9cHcbTxcIxF9VtVYfh-xlazkQBWGasexC7IDVxSmILOzbO7eVrDIPpvXYFAW15gld9w=s1538-rw"
               height="493"
               src="https://blogger.googleusercontent.com/img/a/AVvXsEiDy9ya2pRGz4e8yyRd0lik5lhnFSQNjN5c3AP9ke4-j4MxrAtbDBOUPD_clfsbMslmvymHuXS3Z1FtP_yGkuGobRsfaMpouVihA3DyG1yAnhM65bpUKj6U0ZK9cHcbTxcIxF9VtVYfh-xlazkQBWGasexC7IDVxSmILOzbO7eVrDIPpvXYFAW15gld9w=s1538-rw"
               title="Casper - Blogger Template" width="1538">


        </a></div>
        <button aria-label="Hide Menu" class="hide-mobile-menu"></button>
      </div>
      <div class="slide-menu-flex">
        <div class="mobile-menu" id="mobile-menu">
          <ul class="mobile-nav" id="mobile-nav">
            <li id="item-0"><a href="/">Haaome</a></li>
            <li id="item-1" class="has-sub"><a href="#">Features</a>
              <button class="submenu-toggle btn"
                      aria-label="expand"></button>
              <ul class="sub-menu sm-1">
                <li id="item-2"><a href="#">Featured Post</a></li>
                <li id="item-3" class="has-sub"><a href="#">Post Layouts</a>
                  <button
                    class="submenu-toggle btn" aria-label="expand"></button>
                  <ul class="sub-menu sm-2">
                    <li id="item-4"><a href="#">Left Sidebar</a></li>
                    <li id="item-5"><a href="#">Full Width</a></li>
                    <li id="item-6"><a href="#">Right Sidebar</a></li>
                  </ul>
                </li>
                <li id="item-7"><a href="/404">Error Page</a></li>
                <li id="item-8"><a href="#">MailChimp</a></li>
                <li id="item-9"><a href="?hl=ar">RTL Support</a></li>
              </ul>
            </li>


            <li id="item-10">
              <a data-shortcode="{getPosts} $label={recent}" href="#">Mega Menu</a>
            </li>
            <li id="item-11"><a href="/p/tipography.html">Tipography</a></li>
            <li id="item-12"><a href="/p/shortcodes.html">Shortcodes</a></li>
          </ul>
        </div>
        <div class="mm-footer flex-col">
          <ul class="social-icons social color">
            <li class="facebook"><a alt="facebook" class="fa-facebook btn"
                                    href="https://www.facebook.com/probloggertemplates" rel="nofollow noopener"
                                    target="_blank" title="facebook"></a></li>
            <li class="twitter"><a alt="twitter" class="fa-twitter btn"
                                   href="https://twitter.com/probtemplates" rel="nofollow noopener" target="_blank"
                                   title="twitter"></a></li>
            <li class="youtube"><a alt="youtube" class="fa-youtube btn"
                                   href="https://www.youtube.com/probloggertemplates?sub_confirmation=1"
                                   rel="nofollow noopener" target="_blank" title="youtube"></a></li>
            <li class="instagram"><a alt="instagram" class="fa-instagram btn"
                                     href="https://instagram.com/probloggertemplates" rel="nofollow noopener"
                                     target="_blank"
                                     title="instagram"></a></li>
            <li class="rss"><a alt="rss" class="fa-rss btn" href="https://probloggertemplates.com/"
                               rel="nofollow noopener" target="_blank" title="rss"></a></li>
          </ul>
          <ul class="link-list">
            <li><a href="/">Home</a></li>
            <li><a href="#">About Us</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Contact Us</a></li>
          </ul>
        </div>
      </div>
    </div>
    <div class="overlay" id="overlay"></div>
    <button aria-label="Back To Top" class="btn show on-footer" id="back-top"></button>
  </div>

</template>
