<template>
<div class='is-home is-multiple'>
  <!-- Site Content -->
  <div id='outer-wrapper'>
    <div class='flex-c' id='top-ads-wrap'>
      <div class='top-ads container row-x1 section' id='top-ads' name='Top ADS'>
        <div class='widget HTML' data-version='2' id='HTML1'>
          <div class='widget-content'>
            <a class="pbt-ad" href="https://probloggertemplates.com/"><span>Premium Blogger
                                Templates</span></a>
          </div>
        </div>
      </div>
    </div>
    <HeaderComponent />
    <MainPostComponent />
    <div class='flex-c' id='content-wrapper'>
      <div class='container row-x1 flex-sb'>
        <main id='main-wrapper'>
          <div class='main section' id='main' name='Main Posts'>
            <div class='widget Blog index-blog flex-col' data-version='2' id='Blog1'>
              <div class='title-wrap blog1-title'>
                <h3 class='title'>Latest Posts</h3><a class='title-link' href='/search'>View all</a>
              </div>
              <div class='blog-posts index-post-wrap grid-items'>
                <PostComponent />
                <PostComponent />
                <PostComponent />
              </div>
              <div class='blog-pager' id='blog-pager'>
                <a class='blog-pager-older-link btn load-more'
                   data-load='https://casper-pbt.blogspot.com/search?updated-max=2022-04-12T11:32:00-07:00&amp;max-results=9'
                   href='#' id='x43cf-load-more-link'>
                  Load More
                </a>
                <span class='loading'>
                                    <div class='loader'>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                        <div></div>
                                    </div>
                                </span>
                <span class='no-more btn load-more'>No results found</span>
              </div>
            </div>
          </div>
        </main>
      </div>
    </div>
    <FooterComponent />
    <div class='cookie-consent' id='x43cf-cookie-consent'>
      <div class='section' id='cookie-consent-section' name='Cookie Consent'>
        <div class='widget Text' data-shortcode='$ok={OK, Go it!} $days={7}' data-version='2' id='Text51'>
          <p class='consent-text excerpt'>Our website uses cookies to improve your experience. <a
            href="#">Learn
            more</a></p>
          <button aria-label='Ok' class='consent-button btn'>Ok</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Fixed Elements -->
  <FixedFooterComponent />
  <!-- Main Scripts -->
  <ContactComponent />
  <!-- Blogger Scripts -->
</div>
</template>
<script>
import HeaderComponent from "../../components/HeaderComponent";
import FooterComponent from "../../components/FooterComponent";
import MainPostComponent from "../../components/detail/MainPostComponent";
import PostComponent from "../../components/main/PostComponent";
import FixedFooterComponent from "../../components/FixedFooterComponent";
import ContactComponent from "../../components/ContactComponent";
export default {
  name: 'News',
  components: {
    ContactComponent,
    FixedFooterComponent, PostComponent, MainPostComponent, FooterComponent, HeaderComponent}
}
</script>
