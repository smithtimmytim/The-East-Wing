<!DOCTYPE html>
<head>

  <!--

  @@@@@@@@@@@@@@@@@  @@@   @@@          @@@
  @@@@@@@@@@@@@@@@@  @@@   @@@@        @@@@
         @@@         @@@   @@@ @      @ @@@
         @@@         @@@   @@@  @@  @@  @@@
         @@@         @@@   @@@   @@@    @@@
         @@@         @@@   @@@          @@@
         @@@         @@@   @@@          @@@
         @@@         @@@   @@@          @@@

  How much does a polar bear weigh? Just enough to break the ice.

  Made with love in beautiful Saint Paul, Minnesota.
  The East Wing © 2013 Anythin’ Goes LLC and Timothy B. Smith.

  -->

	<meta charset="utf-8" />
	<meta name="description" content="The East Wing is a weekly interview show featuring established and up-and-coming designers, developers, and entrepreneurs." />

  <title><?php is_home() ? bloginfo('description') : wp_title(''); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />

	<link rel="alternate" type="application/rss+xml" href="<?php bloginfo('rss2_url'); ?>" />

  <link rel="shortcut icon" href="<?php bloginfo('template_url'); ?>/favicon.ico">

  <!-- Global -->
  <link rel="stylesheet" type="text/css" href="<?php bloginfo('template_url'); ?>/assets/css/global.css"/>

  <!-- Typekit Code -->
  <script type="text/javascript" src="//use.typekit.net/ohk1cik.js"></script>
  <script type="text/javascript">try{Typekit.load();}catch(e){}</script>

  <!-- Fusion Ad Code -->
  <script type="text/javascript">
  (function(){
    var fusion = document.createElement('script');
    fusion.src = window.location.protocol + '//adn.fusionads.net/api/1.0/ad.js?zoneid=294&rand=' + Math.floor(Math.random()*9999999);
    fusion.async = true;
    (document.head || document.getElementsByTagName('head')[0]).appendChild(fusion);
  })();</script>


  <!--WP Generated Header -->
  <?php wp_head(); ?>
  <!--End WP Generated Header -->

</head>


<body <?php body_class($class); ?>>

  <?php if (get_field('live_stream', 'options')) : ?>
    <div class="live-banner">
      <div class="contain">
        <div class="recording animated pulse"></div>
        <p>ON AIR: The East Wing #<?php the_field('live_episode_number', 'options'); ?> with Tim Smith - <a href="/live">Listen</a> </p>
      </div>
    </div>

  <?php endif; ?>




<header role="banner">
  <section class="nav-bar">
    <div class="contain">
      <nav role="navigation" class="header-nav">
        <a href="/">Episodes</a>
        <a href="/contact">Contact</a>
        <a href="/sponsorship">Sponsorship</a>
        <a href="/membership">Membership</a>
      </nav>

      <div class="subscribe-search">
        <ul class="subscribe">
          <li>Subscribe:</li>
          <li><a href="http://itunes.apple.com/us/podcast/the-east-wing/id503801143" target="_blank" class="itunes">
            <span aria-hidden="true" data-icon="i"></span>
            <span class="screen-reader-text">Subscribe on iTunes</span>
          </a></li>
          <li><a href="http://theeastwing.net/feed/podcast" target="_blank" class="rss">
            <span aria-hidden="true" data-icon="r"></span>
            <span class="screen-reader-text">Subscribe via RSS</span>
          </a></li>
        </ul>

        <div class="search-form">
          <?php get_search_form(); ?>
        </div><!-- .search -->
      </div><!-- end .subscribe-search -->

    </div> <!-- end .contain -->
  </section><!-- end .nav-bar -->

  <section class="statement">
    <div class="contain">
      <a href="/" class="logo">The East Wing</a>
    </div> <!-- end .contain -->
  </section><!-- end .statement -->

</header>

<section class="alt-description">
  <div class="contain">
    <p>The East Wing is a weekly interview show featuring established and up-and-coming designers, developers, and entrepreneurs.</p>
    <p><small>The East Wing broadcasts live. <a href="/schedule">See the schedule</a></small>.</p>
  </div>
</section>

<section class="guest-sponsor-bar">
  <div class="contain">

      <div id="fusion_ad" class="adspot">
        <a class="fusionlink" href="http://fusionads.net">Powered by Fusion</a>
      </div>


  </div><!-- end .contain -->
</section>




