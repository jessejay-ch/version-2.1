<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Wayback Machine</title>
    <script>
    /*
    @licstart  The following is the entire license notice for the JavaScript code in this page.

    Copyright (C) 2020 Internet Archive

    The JavaScript code in this page is free software: you can
    redistribute it and/or modify it under the terms of the GNU Affero
    General Public License as published by the Free Software
    Foundation, either version 3 of the License, or (at your option)
    any later version.  The code is distributed WITHOUT ANY WARRANTY;
    without even the implied warranty of MERCHANTABILITY or FITNESS
    FOR A PARTICULAR PURPOSE.  See the GNU GPL for more details.

    As additional permission under GNU AGPL version 3 section 7, you
    may distribute non-source (e.g., minimized or compacted) forms of
    that code without the copy of the GNU AGPL normally required by
    section 4, provided you include this license notice and a URL
    through which recipients can access the Corresponding Source.

    @licend  The above is the entire license notice for the JavaScript code in this page.
    */
    </script>
    <script type="text/javascript">
      window.webComponentLoaderConfig = {
      baseUrl: 'https://archive.org',
      version: '29e56e87'
      }
    </script>
    <script src="https://polyfill.archive.org/v3/polyfill.min.js?features=fetch,IntersectionObserver,ResizeObserver,globalThis,Element.prototype.getAttributeNames,String.prototype.startsWith,Array.prototype.flat,Element.prototype.closest,Element.prototype.scroll,Element.prototype.remove,Object.entries,Object.fromEntries,Object.values"></script>
    <script src="//archive.org/includes/analytics.js?v=3d1310ba" type="text/javascript"></script>
    <script src="//archive.org/components/npm/lit/polyfill-support.js?v=3d1310ba" type="text/javascript"></script>
    <script src="//archive.org/components/npm/@webcomponents/webcomponentsjs/webcomponents-bundle.js?v=3d1310ba" type="text/javascript"></script>
    <script src="//archive.org/includes/build/js/ia-topnav.min.js?v=3d1310ba" type="text/javascript"></script>
    <script src="//archive.org/includes/build/js/archive.min.js?v=3d1310ba" type="text/javascript"></script>
    <link href="//archive.org/includes/build/css/archive.min.css?v=3d1310ba" rel="stylesheet" type="text/css"/>
    <meta property="mediatype" content="">
    <meta property="primary_collection" content="">
    <script type="text/javascript">if('archive_analytics' in window){var v=archive_analytics.values;v.path='/web';v.service='wb';v.server_name='wwwb-app227.us.archive.org';v.server_ms=82;archive_analytics.send_pageview_on_load()}</script>
    <link href="/_static/images/archive.ico" rel="shortcut icon">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="content-type" content="text/html; charset=utf-8">
    <link rel="stylesheet" type="text/css" href="/_static/css/styles.css?v=X-Ndhul9" />
    <script type="text/javascript" src="/_static/js/ui.js?v=NTAW0JFh" charset="utf-8"></script>
    <base target="_top">
    <link href="/_static/css/web.css" rel="stylesheet" type="text/css"/>
    <!-- include component js and css -->
    <link rel="stylesheet" type="text/css" href="/static/bower_components/wayback-search-js/dist/vendors~main.6a934aa18e24059078e7.chunk.css" />
<link rel="stylesheet" type="text/css" href="/static/bower_components/wayback-search-js/dist/main.181a2460fd5cab984442.chunk.css" />
<script src="/static/bower_components/wayback-search-js/dist/runtime.0a44659b8be5d61bab17.js"></script>
<script src="/static/bower_components/wayback-search-js/dist/vendors~main.6a934aa18e24059078e7.chunk.js"></script>
<script src="/static/bower_components/wayback-search-js/dist/main.181a2460fd5cab984442.chunk.js"></script>
    <script src="https://archive.org/web/carouFredSel/jquery.carouFredSel-6.2.1-packed.js?v6.2.1" type="text/javascript"></script>
    <style>
      html, body { margin:0; padding:0 }
      #faux-header {
        height: 50px;
        width: 100%;
        margin:0;
        background-color:black;
      }
      #react-wayback-search {
        max-width: 1170px;
        margin: 0 auto;
        padding: 10px;
      }
    </style>
  </head>
  <body class="navia">
    
                    <div class="ia-banners">
              <div
        class="ia-banner hidden outage-2022-01-14"
        data-campaign="outage-2022-01-14">
        <p>Due to a planned power outage on Friday, 1/14, between 8am-1pm PST, some services may be impacted.</p>
        <form class="banner-close" action="" method="get" data-action="ia-banner-close">
          <fieldset>
            <button aria-label="Close Banner" type="submit"></button>
          </fieldset>
        </form>
      </div>
          </div>
                    <div id="topnav">
              <input class="js_nav_tweaks" type="hidden" value='[]'/>
    <!-- Shady DOM styles for icon-hamburger --><style scope="icon-hamburger-1">.icon-hamburger-1 svg.icon-hamburger {
  display: block;
}

.icon-hamburger-1 .fill-color.icon-hamburger {
  fill: #fff;
}</style><!-- Shady DOM styles for login-button --><!-- Shady DOM styles for nav-search --><style scope="nav-search-1">.nav-search-1 input.nav-search[type="text"] {
  color: #222;
}

.nav-search-1 input.nav-search:focus {
  outline: none;
}

.nav-search-1 button.nav-search {
  background: none;
    color: inherit;
    border: none;
    font: inherit;
    cursor: pointer;
}

.nav-search-1 button.nav-search:focus {
  outline: none;
}

.nav-search-1 .search.nav-search {
  padding-top: 0;
    margin-right: 0.5rem;
}

.nav-search-1 .search.nav-search svg.nav-search {
  position: relative;
    top: -5px;
    right: -3px;
    fill:;
}

.nav-search-1 .search-activated.nav-search {
  display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    position: absolute;
    top: 0;
    right: 4rem;
    bottom: 0;
    left: 4rem;
    z-index: 3;
    padding: 0.5rem 0.2rem;
    border-radius: 1rem 1rem 0 0;
    background: #333;
}

.nav-search-1 .search-inactive.nav-search {
  display: none;
}

.nav-search-1 .search-activated.nav-search .highlight.nav-search,.nav-search-1 .search-activated.nav-search .search.nav-search {
  background: #fff;
    border-radius: 0.5rem;
}

.nav-search-1 .search-activated.nav-search .highlight.nav-search {
  display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    width: 100%;
    margin: 0 0.5rem;
}

.nav-search-1 .search-activated.nav-search .search.nav-search {
  height: 100%;
    padding: 0;
    margin-right: 0;
    -ms-flex-item-align: center;
    -ms-grid-row-align: center;
    align-self: center;
}

.nav-search-1 .search-activated.nav-search .search-field.nav-search {
  width: 100%;
    height: 100%;
    box-sizing: border-box;
    padding-left: 1rem;
    border-radius: 0.5rem;
    border: none;
    font-size: 1.6rem;
    text-align: center;
}

.nav-search-1 .search-activated.nav-search .search-field.nav-search:focus {
  outline: none;
}

@keyframes fade-in-nav-search-1 {
0% {
  opacity: 0;
}

100% {
  opacity: 1;
}

}

.nav-search-1 .fade-in.nav-search {
  animation: fade-in-nav-search-1 0.2s forwards;
}

@media (min-width: 890px) {
.nav-search-1 .search.nav-search svg.nav-search {
  display: inline;
      width: 28px;
      height: 28px;
      vertical-align: -14px;
}

.nav-search-1 .search.nav-search path.nav-search {
  fill: #333;
}

.nav-search-1 .search-inactive.nav-search,.nav-search-1 .search-activated.nav-search {
  display: block;
      position: static;
      padding: 1.2rem 0.2rem;
      background: transparent;
}

.nav-search-1 .search-activated.nav-search .highlight.nav-search {
  width: 13rem;
      height: 2.8rem;
      -webkit-box-orient: horizontal;
      -webkit-box-direction: reverse;
      -ms-flex-direction: row-reverse;
      flex-direction: row-reverse;
}

.nav-search-1 .search-activated.nav-search .search-field.nav-search {
  width: calc(100% - 28px);
      height: 100%;
      padding-left: 0;
      font-size: 1.4rem;
      text-align: left;
}

.nav-search-1 .search-activated.nav-search .search.nav-search svg.nav-search {
  width: 28px;
      height: 28px;
}

}</style><!-- Shady DOM styles for media-button --><style scope="media-button-1">.media-button-1 a.media-button {
  display: inline-block;
    text-decoration: none;
}

.media-button-1 .menu-item.media-button {
  display: inline-flex;
    width: 100%;
    padding: 0;
    font-size: 1.6rem;
    text-align: left;
    background: transparent;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.media-button-1 .menu-item.media-button:focus {
  outline: none;
}

.media-button-1 .label.media-button {
  display: inline-block;
    padding: 0;
    font-weight: 400;
    color: #fff;
    text-align: left;
    vertical-align: middle;
}

.media-button-1 .menu-item.media-button > .icon.media-button {
  display: inline-flex;
    width: 42px;
    height: 42px;
    vertical-align: middle;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
}

.media-button-1 .menu-item.selected.media-button .icon.media-button {
  background-color: #333;
    border-radius: 1rem 0 0 1rem;
}

.media-button-1 .icon.media-button .fill-color.media-button {
  fill: #999;
}

.media-button-1 .icon.active.media-button .fill-color.media-button {
  fill: #fff;
}

.media-button-1 .donate.media-button .fill-color.media-button {
  fill: #f00;
}

@media (min-width: 890px) {
.media-button-1 .menu-item.media-button {
  width: auto;
      height: 5rem;
      color: #999;
}

.media-button-1 .menu-item.media-button:hover,.media-button-1 .menu-item.media-button:active,.media-button-1 .menu-item.media-button:focus {
  color: #fff;
}

.media-button-1 .menu-item.media-button:hover .fill-color.media-button,.media-button-1 .menu-item.media-button:active .fill-color.media-button,.media-button-1 .menu-item.media-button:focus .fill-color.media-button {
  fill: #fff;
}

.media-button-1 .label.media-button {
  display: none;
}

.media-button-1 .label.media-button,.media-button-1 .web.media-button:after {
  padding-right: 1rem;
      font-size: 1.3rem;
      text-transform: uppercase;
      color: inherit;
}

.media-button-1 .web.media-button:after {
  display: none;
      content: "web";
}

.media-button-1 .donate.media-button,.media-button-1 .more.media-button {
  display: none;
}

.media-button-1 .menu-item.selected.media-button {
  background: #474747;
}

.media-button-1 .menu-item.selected.media-button .label.media-button,.media-button-1 .menu-item.selected.web.media-button:after {
  color: #fff;
}

.media-button-1 .menu-item.selected.media-button .icon.media-button {
  background: transparent;
}

.media-button-1 .web.selected.media-button .fill-color.media-button {
  fill: #ffcd27;
}

.media-button-1 .texts.selected.media-button .fill-color.media-button {
  fill: #faab3c;
}

.media-button-1 .video.selected.media-button .fill-color.media-button {
  fill: #f1644b;
}

.media-button-1 .audio.selected.media-button .fill-color.media-button {
  fill: #00adef;
}

.media-button-1 .software.selected.media-button .fill-color.media-button {
  fill: #9ecc4f;
}

.media-button-1 .images.selected.media-button .fill-color.media-button {
  fill: #aa99c9;
}

}

@media (min-width: 1300px) {
.media-button-1 .label.media-button,.media-button-1 .web.media-button:after {
  display: inline;
}

.media-button-1 .web.media-button .label.media-button {
  display: none;
}

}</style><!-- Shady DOM styles for media-menu --><style scope="media-menu-1">.media-menu-1 {
  outline: none;
}

.media-menu-1 .media-menu-inner.media-menu {
  z-index: -1;
    top: -40rem;
    background-color: #222;
    margin: 0;
    overflow: hidden;
    transition-duration: 0.2s;
    transition-property: top;
    transition-timing-function: ease;
}

.media-menu-1 .menu-group.media-menu {
  position: relative;
    line-height: normal;
}

@media (max-width: 889px) {
.media-menu-1 .media-menu-container.media-menu {
  position: relative;
}

.media-menu-1 .media-menu-inner.media-menu {
  position: absolute;
      width: 100%;
}

.media-menu-1 .open.media-menu .media-menu-inner.media-menu {
  top: 0;
}

.media-menu-1 .overflow-clip.media-menu {
  position: absolute;
      z-index: -1; 
      top: 0;
      left: 0;
      height: 0;
      width: 100%;
      overflow: hidden;
      transition-duration: 0.2s;
      transition-property: height;
}

.media-menu-1 .open.media-menu .overflow-clip.media-menu {
  height: 40rem;
}

}

@media (min-width: 890px) {
.media-menu-1 .media-menu-inner.media-menu {
  display: inline-block;
      position: static;
      width: auto;
      height: 5rem;
      transition-property: none;
}

.media-menu-1 .menu-group.media-menu {
  font-size: 0;
}

}</style><!-- Shady DOM styles for primary-nav --><style scope="primary-nav-1">.primary-nav-1 button.primary-nav:focus,.primary-nav-1 a.primary-nav:focus,.primary-nav-1 input.primary-nav:focus {
  outline: none;
}

.primary-nav-1 nav.primary-nav {
  position: relative;
    display: -ms-grid;
    display: grid;
    height: 4rem;
    grid-template-areas: 'hamburger empty search user';
    -ms-grid-columns: 4rem minmax(1rem, 100%) 4.3rem 4rem;
    grid-template-columns: 4rem auto 4.3rem 4rem;
    -ms-grid-rows: 100%;
    grid-template-rows: 100%;
    background: #222;
    border-bottom: 1px solid #333;
}

.primary-nav-1 button.primary-nav {
  background: none;
    color: inherit;
    border: none;
    font: inherit;
    cursor: pointer;
}

.primary-nav-1 .branding.primary-nav {
  position: static;
    float: left;
    padding: 0 5px 0 10px;
    -webkit-transform: translate(0, 0);
    -ms-transform: translate(0, 0);
    transform: translate(0, 0);
}

.primary-nav-1 slot.primary-nav,.primary-nav-1 .branding.primary-nav {
  display: flex;
    justify-content: left;
    align-items: center;
}

.primary-nav-1 media-menu.primary-nav {
  grid-column-start: hamburger-start;
    grid-column-end: user-end;
}

.primary-nav-1 .ia-logo.primary-nav,.primary-nav-1 .ia-wordmark.primary-nav {
  margin-right: 5px;
}

.primary-nav-1 .hamburger.primary-nav {
  -ms-grid-row: 1;
    -ms-grid-column: 1;
    grid-area: hamburger;
    padding: 0;
}

.primary-nav-1 .search-trigger.primary-nav {
  -ms-grid-row: 1;
    -ms-grid-column: 3;
    grid-area: search;
    position: relative;
    padding: 0;
    z-index: 1;
    width: 100%;
    text-align: right;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

.primary-nav-1 .search-trigger.primary-nav .fill-color.primary-nav {
  fill: #999;
}

.primary-nav-1 .search-activated.primary-nav {
  position: relative;
    z-index: 3;
}

.primary-nav-1 .upload.primary-nav {
  display: none;
}

.primary-nav-1 .upload.primary-nav span.primary-nav {
  display: none;
}

.primary-nav-1 .user-info.primary-nav {
  -ms-grid-row: 1;
    -ms-grid-column: 4;
    grid-area: user;
    -ms-grid-row-align: stretch;
    align-self: stretch;
    -ms-grid-column-align: end;
    justify-self: end;
}

.primary-nav-1 .username.primary-nav {
  display: none;
    font-size: 1.3rem;
    vertical-align: middle;
    text-transform: uppercase;
}

.primary-nav-1 .user-menu.primary-nav {
  height: 100%;
    padding: 0.5rem 1rem;
    color: #999;
}

.primary-nav-1 .user-menu.primary-nav:hover {
  color: #fff;
}

.primary-nav-1 .user-menu.active.primary-nav {
  border-radius: 1rem 1rem 0 0;
    background: #333;
}

.primary-nav-1 .user-menu.primary-nav img.primary-nav {
  display: block;
    width: 30px;
    height: 30px;
}

.primary-nav-1 .link-home.primary-nav {
  display: flex;
    text-decoration: none;
}

@media only screen and (min-width: 890px) and (max-device-width: 905px) {
.primary-nav-1 .branding.second-logo.primary-nav {
  padding-right: 0;
}

}

@media (min-width: 906px) {
.primary-nav-1 .branding.second-logo.primary-nav {
  padding-right: 20px;
}

}

@media (max-width: 889px) {
.primary-nav-1 slot.primary-nav[name='opt-sec-logo'] {
  display: none;
}

}

@media (min-width: 890px) {
.primary-nav-1 {
  ;
}

.primary-nav-1 nav.primary-nav {
  display: block;
      z-index: 2;
      height: 5rem;
      padding-right: 1.5rem;
}

.primary-nav-1 slot.primary-nav[name='opt-sec-logo-mobile'] {
  display: none;
}

.primary-nav-1 .branding.primary-nav {
  margin-top: 1rem;
}

.primary-nav-1 .ia-logo.primary-nav,.primary-nav-1 .ia-wordmark.primary-nav {
  margin-right: 10px;
}

.primary-nav-1 .hamburger.primary-nav,.primary-nav-1 .search-trigger.primary-nav {
  display: none;
}

.primary-nav-1 .user-info.primary-nav {
  float: right;
      padding-top: 1rem;
}

.primary-nav-1 .user-menu.primary-nav {
  padding-top: 0;
}

.primary-nav-1 .user-menu.active.primary-nav {
  background: transparent;
}

.primary-nav-1 .user-menu.primary-nav img.primary-nav {
  display: inline-block;
      vertical-align: middle;
}

.primary-nav-1 .upload.primary-nav {
  display: block;
      float: right;
      margin-top: 1rem;
      font-size: 1.4rem;
      text-transform: uppercase;
      text-decoration: none;
      color: #999;
}

.primary-nav-1 .upload.primary-nav:active,.primary-nav-1 .upload.primary-nav:focus,.primary-nav-1 .upload.primary-nav:hover {
  color: #fff;
}

.primary-nav-1 .upload.primary-nav svg.primary-nav {
  width: 32px;
      height: 32px;
      vertical-align: middle;
      fill: #999;
}

.primary-nav-1 .upload.primary-nav:hover svg.primary-nav,.primary-nav-1 .upload.primary-nav:focus svg.primary-nav,.primary-nav-1 .upload.primary-nav:active svg.primary-nav {
  fill: #fff;
}

.primary-nav-1 nav-search.primary-nav {
  float: right;
      margin-left: 1rem;
}

.primary-nav-1 login-button.primary-nav {
  display: block;
      margin-right: 1rem;
}

}

@media (min-width: 990px) {
.primary-nav-1 .username.primary-nav {
  display: inline-block;
}

.primary-nav-1 .upload.primary-nav span.primary-nav {
  display: inline;
}

}</style><!-- Shady DOM styles for user-menu --><style scope="user-menu-1">.user-menu-1 {
  ;
}

.user-menu-1 .nav-container.user-menu {
  position: relative;
}

.user-menu-1 nav.user-menu {
  position: absolute;
    right: 0;
    z-index: 2;
    overflow: hidden;
    font-size: 1.6rem;
    background-color: #333;
    transition-property: top;
    transition-duration: 0.2s;
    transition-timing-function: ease;
}

.user-menu-1 .initial.user-menu,.user-menu-1 .closed.user-menu {
  top: -1500px;
}

.user-menu-1 .closed.user-menu {
  transition-duration: 0.5s;
}

.user-menu-1 .open.user-menu {
  max-width: 100vw;
    overflow: auto;
}

.user-menu-1 h3.user-menu {
  padding: 0.6rem 2rem;
    margin: 0;
    font-size: inherit;
    overflow: hidden;
    text-overflow: ellipsis;
}

.user-menu-1 ul.user-menu {
  padding: 0.4rem 0 0.7rem 0;
    margin: 0;
    list-style: none;
    
    max-height: calc(100vh - 7.2rem + 1px);
    overflow: auto;
    box-sizing: border-box;
}

.user-menu-1 .divider.user-menu {
  margin: 0.5rem 0;
    border-bottom: 1px solid #666;
}

.user-menu-1 a.user-menu,.user-menu-1 .info-item.user-menu {
  display: block;
    color: #fff;
    text-decoration: none;
    padding: 1rem 2rem;
}

.user-menu-1 .info-item.user-menu {
  font-size: 0.8em;
    color: #999;
}

@media (min-width: 890px) {
.user-menu-1 nav.user-menu {
  overflow: visible;
      top: 0;
      left: auto;
      z-index: 5;
      transition: opacity 0.2s ease-in-out;
      font-size: 1.4rem;
      border-radius: 2px;
      background: #fff;
      box-shadow: 0 1px 2px 1px rgba(0, 0, 0, 0.15);
}

.user-menu-1 nav.user-menu:after {
  position: absolute;
      right: 7px;
      top: -7px;
      width: 12px;
      height: 7px;
      box-sizing: border-box;
      color: #fff;
      content: '';
      border-bottom: 7px solid currentColor;
      border-left: 6px solid transparent;
      border-right: 6px solid transparent;
}

.user-menu-1 h3.user-menu {
  display: none;
}

.user-menu-1 ul.user-menu {
  max-height: calc(100vh - 8.5rem + 1px);
}

.user-menu-1 .divider.user-menu {
  border-bottom-color: #666;
}

.user-menu-1 a.user-menu {
  padding: 0.5rem 2rem;
      color: #333;
      transition: background 0.1s ease-out, color 0.1s ease-out;
}

.user-menu-1 .info-item.user-menu {
  padding: 0.5rem 2rem;
      font-size: 0.8em;
}

.user-menu-1 a.user-menu:hover,.user-menu-1 a.user-menu:active,.user-menu-1 a.user-menu:focus {
  color: #fff;
      background: #428bca;
}

.user-menu-1 .initial.user-menu,.user-menu-1 .closed.user-menu {
  opacity: 0;
      transition-duration: 0.2s;
}

.user-menu-1 .open.user-menu {
  opacity: 1;
      overflow: visible;
}

}

@media (min-width: 890px) {
.user-menu-1 .initial.user-menu,.user-menu-1 .closed.user-menu,.user-menu-1 .open.user-menu {
  right: 21.3rem;
}

.user-menu-1 .search-hidden.initial.user-menu,.user-menu-1 .search-hidden.closed.user-menu,.user-menu-1 .search-hidden.open.user-menu {
  right: 5.8rem;
}

}

@media (min-width: 990px) {
.user-menu-1 .initial.user-menu,.user-menu-1 .closed.user-menu,.user-menu-1 .open.user-menu {
  right: 27.5rem;
}

.user-menu-1 .search-hidden.initial.user-menu,.user-menu-1 .search-hidden.closed.user-menu,.user-menu-1 .search-hidden.open.user-menu {
  right: 12rem;
}

}</style><!-- Shady DOM styles for search-menu --><style scope="search-menu-1">.search-menu-1 {
  ;
}

.search-menu-1 .menu-wrapper.search-menu {
  position: relative;
}

.search-menu-1 button.search-menu:focus,.search-menu-1 input.search-menu:focus {
  outline-color: #428bca;
    outline-width: 0.16rem;
    outline-style: auto;
}

.search-menu-1 .search-menu-inner.search-menu {
  position: absolute;
    right: 0;
    left: 0;
    z-index: 2;
    padding: 0 4.5rem;
    font-size: 1.6rem;
    background-color: #333;
}

.search-menu-1 .tx-slide.search-menu {
  overflow: hidden;
    transition-property: top;
    transition-duration: 0.2s;
    transition-timing-function: ease;
}

.search-menu-1 .initial.search-menu,.search-menu-1 .closed.search-menu {
  top: -800px;
}

.search-menu-1 .closed.search-menu {
  transition-duration: 0.2s;
}

.search-menu-1 label.search-menu,.search-menu-1 a.search-menu {
  padding: 1rem;
    display: block;
}

.search-menu-1 .advanced-search.search-menu {
  text-decoration: none;
    color: #428bca;
}

@media (min-width: 890px) {
.search-menu-1 .search-menu-inner.search-menu {
  overflow: visible;
      right: 2rem;
      left: auto;
      z-index: 5;
      padding: 1rem 2rem;
      transition: opacity 0.2s ease-in-out;
      font-size: 1.4rem;
      color: #333;
      border-radius: 2px;
      background: #fff;
      box-shadow: 0 1px 2px 1px rgba(0, 0, 0, 0.15);
}

.search-menu-1 .search-menu-inner.search-menu:after {
  position: absolute;
      right: 7px;
      top: -7px;
      width: 12px;
      height: 7px;
      box-sizing: border-box;
      color: #fff;
      content: '';
      border-bottom: 7px solid currentColor;
      border-left: 6px solid transparent;
      border-right: 6px solid transparent;
}

.search-menu-1 .initial.search-menu,.search-menu-1 .closed.search-menu {
  opacity: 0;
      transition-duration: 0.2s;
}

.search-menu-1 .open.search-menu {
  opacity: 1;
}

.search-menu-1 label.search-menu {
  padding: 0;
}

.search-menu-1 label.search-menu + label.search-menu {
  padding-top: 7px;
}

.search-menu-1 a.search-menu {
  padding: 1rem 0 0 0;
}

}</style><!-- Shady DOM styles for ia-wayback-search --><!-- Shady DOM styles for wayback-search --><style scope="wayback-search-1">.wayback-search-1 {
  font: normal 1.2rem/1.5 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

.wayback-search-1 form.wayback-search {
  max-width: 600px;
}

.wayback-search-1 p.wayback-search {
  margin-top: 0;
    font-weight: 200;
}

.wayback-search-1 a.wayback-search {
  font-weight: 500;
    text-decoration: none;
    color: #fff;
}

.wayback-search-1 fieldset.wayback-search {
  padding: 0.7rem 2rem;
    margin: 1.5rem 0;
    box-sizing: border-box;
    text-align: center;
    border: none;
    border-radius: 7px;
    background-color: #fcf5e6;
    box-shadow: 3px 3px 0 0 #c3ad97;
}

.wayback-search-1 label.wayback-search {
  display: none;
}

.wayback-search-1 img.wayback-search {
  width: 100%;
    max-width: 215px;
    max-height: 60px;
    margin-bottom: 1.3rem;
    vertical-align: middle;
}

.wayback-search-1 input.wayback-search {
  display: block;
    width: 100%;
    height: 3rem;
    padding: 0.5rem 1rem 0.5rem 2.5rem;
    font: normal 1.2rem/1.5 'Helvetica Neue', Helvetica, Arial, sans-serif;
    color: #858585;
    box-sizing: border-box;
    border: 1px solid #ccc;
    border-radius: 2rem;
    background: #eee;
}

.wayback-search-1 input.wayback-search:focus {
  border-color: #66afe9;
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.075), 0 0 8px rgba(102, 175, 233, 0.6);
    outline: none;
}

.wayback-search-1 .search-field.wayback-search {
  position: relative;
    overflow: hidden;
}

.wayback-search-1 .search-field.wayback-search svg.wayback-search {
  position: absolute;
    top: 2px;
    left: 3px;
    width: 24px;
    height: 24px;
}

.wayback-search-1 .search-field.wayback-search .fill-color.wayback-search {
  fill: #999;
}

.wayback-search-1 input.wayback-search:focus + svg.wayback-search {
  display: none;
}

@media (min-width: 890px) {
.wayback-search-1 form.wayback-search {
  margin: 0 auto;
}

.wayback-search-1 p.wayback-search {
  margin-bottom: 3rem;
      font-size: 1.6rem;
      text-align: center;
}

.wayback-search-1 img.wayback-search {
  margin: 0;
}

.wayback-search-1 fieldset.wayback-search {
  margin: 0 auto;
      font-size: 0;
}

.wayback-search-1 fieldset.wayback-search a.wayback-search,.wayback-search-1 .search-field.wayback-search {
  display: inline-block;
      width: 50%;
      vertical-align: middle;
}

.wayback-search-1 fieldset.wayback-search a.wayback-search {
  text-align: center;
}

.wayback-search-1 .search-field.wayback-search svg.wayback-search {
  width: 28px;
      height: 28px;
}

.wayback-search-1 .search-field.wayback-search .fill-color.wayback-search {
  fill: #333;
}

}

.wayback-search-1 p.wayback-search {
  margin-bottom: 1rem;
    font-size: 1.6rem;
    text-align: center;
}

.wayback-search-1 fieldset.wayback-search {
  padding: .5rem;
    border-radius: 5px;
    box-shadow: none;
}

.wayback-search-1 input.wayback-search {
  padding-left: 3rem;
    margin-top: .3rem;
    font-size: 1.4rem;
    border-color: #bca38e;
    background: #fff;
}

.wayback-search-1 input.wayback-search::placeholder,.wayback-search-1 input.wayback-search::-webkit-input-placeholder {
  color: #8e8e8e;
}

.wayback-search-1 .search-field.wayback-search svg.wayback-search {
  top: 50%;
    transform: translateY(-50%);
}

@media (min-width: 890px) {
.wayback-search-1 fieldset.wayback-search a.wayback-search,.wayback-search-1 .search-field.wayback-search {
  display: block;
      width: auto;
}

.wayback-search-1 fieldset.wayback-search a.wayback-search {
  margin: 0 1.5rem;
}

}</style><!-- Shady DOM styles for save-page-form --><style scope="save-page-form-1">.save-page-form-1 div.save-page-form {
  display: grid;
    grid-template-columns: 1fr auto;
    grid-column-gap: .8rem;
    margin: 0;
    padding: 0;
    border: none;
}

.save-page-form-1 input.save-page-form[type="text"] {
  width: 100%;
    height: 30px;
    box-sizing: border-box;
    border: 1px solid #999;
    border-radius: .5rem;
    color: #222;
}

.save-page-form-1 input.save-page-form[type="submit"] {
  -webkit-appearance: none;
    -moz-appearance: none;
    appearance: none;
    padding: .4rem .8rem;
    font: normal 1.3rem 'Helvetica Neue', Helvetica, Arial, sans-serif;
    text-transform: uppercase;
    color: #fff;
    border: none;
    border-radius: 16px;
    background: #222;
    cursor: pointer;
}

.save-page-form-1 .error.save-page-form {
  display: none;
    margin-top: .5rem;
    font-weight: bold;
    color: #ffcd27;
}

.save-page-form-1 .visible.save-page-form {
  display: block;
}

@media (min-width: 890px) {
.save-page-form-1 h3.save-page-form {
  margin-top: 0;
      font: normal 100 1.6rem 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

}</style><!-- Shady DOM styles for wayback-slider --><style scope="wayback-slider-1">.wayback-slider-1 h4.wayback-slider {
  font-size: 1.6rem;
}

.wayback-slider-1 a.wayback-slider {
  text-decoration: none;
    color: #fff;
}

.wayback-slider-1 ul.wayback-slider {
  padding: 0;
    margin: 0;
    list-style: none;
}

.wayback-slider-1 li.wayback-slider + li.wayback-slider {
  padding-top: 1.5rem;
}

@media (min-width: 890px) {
.wayback-slider-1 h4.wayback-slider {
  margin: 0 0 1rem 0;
      font-weight: 100;
}

.wayback-slider-1 ul.wayback-slider {
  font-size: 1.3rem;
}

.wayback-slider-1 li.wayback-slider {
  padding-bottom: .5rem;
}

.wayback-slider-1 li.wayback-slider + li.wayback-slider {
  padding-top: 0;
}

.wayback-slider-1 li.wayback-slider a.wayback-slider {
  display: block;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
}

}

@media (min-width: 890px) {
.wayback-slider-1 {
  display: block;
      grid-column: 1 / 4;
      padding: 0 1.5rem;
}

.wayback-slider-1 h4.wayback-slider {
  margin-top: 0;
      font: normal 100 1.6rem 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

.wayback-slider-1 .grid.wayback-slider {
  display: grid;
      grid-template-columns: minmax(auto, 260px) 1fr minmax(auto, 260px);
      
      grid-column-gap: 2.5rem;
}

.wayback-slider-1 .link-lists.wayback-slider {
  display: grid;
      grid-template-columns: calc(50% - 1.25rem) calc(50% - 1.25rem);
      grid-column-gap: 2.5rem;
}

}</style><!-- Shady DOM styles for more-slider --><style scope="more-slider-1">.more-slider-1 ul.more-slider {
  padding: 0;
    margin: -1rem 0 0 0;
    list-style: none;
}

.more-slider-1 a.more-slider {
  display: block;
    padding: 1rem 0;
    text-decoration: none;
    color: #fff;
}</style><!-- Shady DOM styles for media-subnav --><style scope="media-subnav-1">.media-subnav-1 h4.media-subnav {
  font-size: 1.6rem;
}

.media-subnav-1 a.media-subnav {
  text-decoration: none;
    color: #fff;
}

.media-subnav-1 ul.media-subnav {
  padding: 0;
    margin: 0;
    list-style: none;
}

.media-subnav-1 li.media-subnav + li.media-subnav {
  padding-top: 1.5rem;
}

@media (min-width: 890px) {
.media-subnav-1 h4.media-subnav {
  margin: 0 0 1rem 0;
      font-weight: 100;
}

.media-subnav-1 ul.media-subnav {
  font-size: 1.3rem;
}

.media-subnav-1 li.media-subnav {
  padding-bottom: .5rem;
}

.media-subnav-1 li.media-subnav + li.media-subnav {
  padding-top: 0;
}

.media-subnav-1 li.media-subnav a.media-subnav {
  display: block;
      overflow: hidden;
      white-space: nowrap;
      text-overflow: ellipsis;
}

}

.media-subnav-1 img.media-subnav {
  display: block;
    width: 90px;
    height: 90px;
    margin: 0 auto 1rem auto;
    border-radius: 45px;
}

.media-subnav-1 h3.media-subnav {
  margin-top: 0;
    font-size: 1.8rem;
}

.media-subnav-1 .icon-links.media-subnav {
  display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: space-evenly;
    -ms-flex-pack: space-evenly;
    justify-content: space-evenly;
    text-align: center;
}

.media-subnav-1 .icon-links.media-subnav a.media-subnav {
  display: inline-block;
    width: 120px;
    margin-bottom: 1.5rem;
    overflow: hidden;
    white-space: nowrap;
    text-align: center;
    text-overflow: ellipsis;
}

.media-subnav-1 .icon-links.media-subnav a.media-subnav + a.media-subnav {
  margin-left: 2rem;
}

.media-subnav-1 .featured.media-subnav h4.media-subnav {
  display: none;
}

@media (min-width: 890px) {
.media-subnav-1 {
  display: -ms-grid;
      display: grid;
      -ms-grid-columns: 40% 20% 40%;
      grid-template-columns: 40% 20% 40%;
}

.media-subnav-1 .wayback-search.media-subnav {
  -ms-grid-column: 1;
      -ms-grid-column-span: 3;
      grid-column: 1 / 4;
}

.media-subnav-1 h3.media-subnav {
  display: none;
}

.media-subnav-1 .icon-links.media-subnav {
  -ms-grid-column: 1;
}

.media-subnav-1 .icon-links.media-subnav a.media-subnav {
  padding-top: 3.5rem;
      max-width: 160px;
}

.media-subnav-1 .links.media-subnav {
  padding: 0 1.5rem;
}

.media-subnav-1 .featured.media-subnav {
  -ms-grid-column: 2;
}

.media-subnav-1 .featured.media-subnav h4.media-subnav {
  display: block;
}

.media-subnav-1 .top.media-subnav {
  -ms-grid-column: 3;
}

.media-subnav-1 .top.media-subnav ul.media-subnav {
  display: -ms-grid;
      display: grid;
      -ms-grid-columns: 50% 3rem 50%;
      grid-template-columns: 50% 50%;
      -ms-grid-rows: (auto)[7];
      grid-template-rows: repeat(7, auto);
      grid-column-gap: 3rem;
      grid-auto-flow: column;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(1) {
  -ms-grid-row: 1;
      -ms-grid-column: 1;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(2) {
  -ms-grid-row: 2;
      -ms-grid-column: 1;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(3) {
  -ms-grid-row: 3;
      -ms-grid-column: 1;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(4) {
  -ms-grid-row: 4;
      -ms-grid-column: 1;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(5) {
  -ms-grid-row: 5;
      -ms-grid-column: 1;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(6) {
  -ms-grid-row: 6;
      -ms-grid-column: 1;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(7) {
  -ms-grid-row: 7;
      -ms-grid-column: 1;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(8) {
  -ms-grid-row: 1;
      -ms-grid-column: 3;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(9) {
  -ms-grid-row: 2;
      -ms-grid-column: 3;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(10) {
  -ms-grid-row: 3;
      -ms-grid-column: 3;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(11) {
  -ms-grid-row: 4;
      -ms-grid-column: 3;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(12) {
  -ms-grid-row: 5;
      -ms-grid-column: 3;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(13) {
  -ms-grid-row: 6;
      -ms-grid-column: 3;
}

.media-subnav-1 .top.media-subnav ul.media-subnav > *.media-subnav:nth-child(14) {
  -ms-grid-row: 7;
      -ms-grid-column: 3;
}

}</style><!-- Shady DOM styles for media-slider --><style scope="media-slider-1">.media-slider-1 .media-slider-container.media-slider {
  position: relative;
}

.media-slider-1 .overflow-clip.media-slider {
  display: none;
    position: absolute;
    top: 3rem;
    right: 0;
    left: 0;
    height: 0;
    overflow: hidden;
    transition: height 0.2s ease;
}

.media-slider-1 .information-menu.media-slider {
  position: absolute;
    top: 0;
    right: 0;
    left: 0;
    padding: 0;
    height: 368px;
    overflow-x: hidden;
    font-size: 1.4rem;
    background: #333;
}

.media-slider-1 .open.media-slider {
  display: block;
}

.media-slider-1 .hidden.media-slider {
  display: none;
}

.media-slider-1 .info-box.media-slider {
  padding: 1rem;
}

@media (max-width: 889px) {
.media-slider-1 .overflow-clip.open.media-slider {
  display: block;
      height: 367px;
      left: 4rem;
      top: 0;
}

}

@media (min-width: 890px) {
.media-slider-1 .overflow-clip.media-slider {
  display: block;
}

.media-slider-1 .information-menu.media-slider {
  left: 0;
      z-index: 2;
      height: auto;
      min-height: 21rem;
      background: #474747;
      transform: translate(0, -100%);
      transition: transform 0.2s ease;
}

.media-slider-1 .overflow-clip.open.media-slider {
  height: 22rem;
}

.media-slider-1 .information-menu.open.media-slider {
  transform: translate(0, 0);
}

.media-slider-1 .info-box.media-slider {
  max-width: 1000px;
      padding: 1.5rem 0;
      margin: 0 auto;
}

}</style><!-- Shady DOM styles for desktop-subnav --><style scope="desktop-subnav-1">.desktop-subnav-1 ul.desktop-subnav {
  position: relative;
    z-index: 3;
    padding: .8rem 0;
    margin: 0;
    font-size: 1.2rem;
    text-transform: uppercase;
    text-align: center;
    background: #333;
}

.desktop-subnav-1 li.desktop-subnav {
  display: inline-block;
    padding: 0 15px;
}

.desktop-subnav-1 a.desktop-subnav {
  text-decoration: none;
    color: #aaa;
}

.desktop-subnav-1 a.desktop-subnav:hover,.desktop-subnav-1 a.desktop-subnav:active,.desktop-subnav-1 a.desktop-subnav:focus {
  color: #fff;
}

.desktop-subnav-1 .donate.desktop-subnav svg.desktop-subnav {
  width: 16px;
    height: 16px;
    vertical-align: -4px;
    fill: #f00;
}</style><!-- Shady DOM styles for signed-out-dropdown --><!-- Shady DOM styles for ia-topnav --><style scope="ia-topnav-1">.ia-topnav-1 {
  ;

    color: #fff;
    font-size: 2rem;
    font-family: 'Helvetica Neue', Helvetica, Arial, sans-serif;
}

.ia-topnav-1 primary-nav.ia-topnav:focus {
  outline: none !important;
}

.ia-topnav-1 #close-layer.ia-topnav {
  display: none;
    position: fixed;
    top: 0;
    right: 0;
    bottom: 0;
    left: 0;
    z-index: 0;
}

.ia-topnav-1 #close-layer.visible.ia-topnav {
  display: block;
}

.ia-topnav-1 .topnav.ia-topnav {
  position: relative;
    z-index: 3;
}

@media (max-width: 889px) {
.ia-topnav-1 desktop-subnav.ia-topnav {
  display: none;
}

}</style><style>body {transition: opacity ease-in 0.2s; } 
body[unresolved] {opacity: 0; display: block; overflow: hidden; position: relative; } 
</style>
    

    
    
    

  
  
    <ia-topnav locallinks="true" waybackpagesarchived="760 billion" username="m4rc3l_cy8er_m30n_" screenname="m4rc3l cy…" userprofilelastmodified="" class="x-scope ia-topnav-1"><!---->
      <div class="topnav style-scope ia-topnav">
        <primary-nav class="style-scope ia-topnav x-scope primary-nav-1"><!---->
      <nav class="style-scope primary-nav">
        <div class="branding  style-scope primary-nav">
          <a title="Go home" class="link-home style-scope primary-nav" href="https://archive.org/" data-event-click-tracking="TopNav|NavHome"><!--?lit$0199747717$-->
  <svg class="ia-logo style-scope primary-nav" width="27" height="30" viewBox="0 0 27 30" xmlns="http://www.w3.org/2000/svg" aria-labelledby="logoTitleID logoDescID">
    <title id="logoTitleID" class="style-scope primary-nav">Internet Archive logo</title>
    <desc id="logoDescID" class="style-scope primary-nav">A line drawing of the Internet Archive headquarters building façade.</desc>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" class="style-scope primary-nav">
      <mask id="mask-2" fill="white" class="style-scope primary-nav">
        <path d="M26.6666667,28.6046512 L26.6666667,30 L0,30 L0.000283687943,28.6046512 L26.6666667,28.6046512 Z M25.6140351,26.5116279 L25.6140351,28.255814 L1.05263158,28.255814 L1.05263158,26.5116279 L25.6140351,26.5116279 Z M3.62469203,7.6744186 L3.91746909,7.82153285 L4.0639977,10.1739544 L4.21052632,13.9963932 L4.21052632,17.6725617 L4.0639977,22.255044 L4.03962296,25.3421929 L3.62469203,25.4651163 L2.16024641,25.4651163 L1.72094074,25.3421929 L1.55031755,22.255044 L1.40350877,17.6970339 L1.40350877,14.0211467 L1.55031755,10.1739544 L1.68423854,7.80887484 L1.98962322,7.6744186 L3.62469203,7.6744186 Z M24.6774869,7.6744186 L24.9706026,7.82153285 L25.1168803,10.1739544 L25.2631579,13.9963932 L25.2631579,17.6725617 L25.1168803,22.255044 L25.0927809,25.3421929 L24.6774869,25.4651163 L23.2130291,25.4651163 L22.7736357,25.3421929 L22.602418,22.255044 L22.4561404,17.6970339 L22.4561404,14.0211467 L22.602418,10.1739544 L22.7369262,7.80887484 L23.0420916,7.6744186 L24.6774869,7.6744186 Z M9.94042303,7.6744186 L10.2332293,7.82153285 L10.3797725,10.1739544 L10.5263158,13.9963932 L10.5263158,17.6725617 L10.3797725,22.255044 L10.3556756,25.3421929 L9.94042303,25.4651163 L8.47583122,25.4651163 L8.0362015,25.3421929 L7.86556129,22.255044 L7.71929825,17.6970339 L7.71929825,14.0211467 L7.86556129,10.1739544 L8.00005604,7.80887484 L8.30491081,7.6744186 L9.94042303,7.6744186 Z M18.0105985,7.6744186 L18.3034047,7.82153285 L18.449948,10.1739544 L18.5964912,13.9963932 L18.5964912,17.6725617 L18.449948,22.255044 L18.425851,25.3421929 L18.0105985,25.4651163 L16.5460067,25.4651163 L16.1066571,25.3421929 L15.9357367,22.255044 L15.7894737,17.6970339 L15.7894737,14.0211467 L15.9357367,10.1739544 L16.0702315,7.80887484 L16.3753664,7.6744186 L18.0105985,7.6744186 Z M25.6140351,4.53488372 L25.6140351,6.97674419 L1.05263158,6.97674419 L1.05263158,4.53488372 L25.6140351,4.53488372 Z M13.0806755,0 L25.9649123,2.93331338 L25.4484139,3.8372093 L0.771925248,3.8372093 L0,3.1041615 L13.0806755,0 Z" id="path-1" class="style-scope primary-nav"></path>
      </mask>
      <use fill="#FFFFFF" xlink:href="#path-1" class="style-scope primary-nav"></use>
      <g mask="url(#mask-2)" fill="#FFFFFF" class="style-scope primary-nav">
        <path d="M0,0 L26.6666667,0 L26.6666667,30 L0,30 L0,0 Z" id="swatch" class="style-scope primary-nav"></path>
      </g>
    </g>
  </svg>
<!--?lit$0199747717$-->
  <svg class="ia-wordmark stacked style-scope primary-nav" height="30" viewBox="0 0 95 30" width="95" xmlns="http://www.w3.org/2000/svg">
    <g fill="#fff" fill-rule="evenodd" class="style-scope primary-nav">
      <g transform="translate(0 17)" class="style-scope primary-nav">
        <path d="m3.07645967 2.60391777c.09263226-.31901841.26275495-.97477846.26275495-1.10630359 0-.74950669-.57227138-.76816274-1.19041353-.88009902v-.41183224h2.90678232l3.77209227 12.60682378h-1.60725868l-1.16012991-3.8963154h-3.94266032l-1.15968456 3.8963154h-.95794221zm-.69607795 5.4317081h3.41670507l-1.76223957-5.469953z" class="style-scope primary-nav"></path><path d="m13.2661876 2.75363255c0-1.85487748-.0316196-1.85487748-1.469201-2.13611739v-.41183224h3.8032666c1.1601299 0 4.3599508 0 4.3599508 3.35342446 0 2.13518459-1.143652 2.84737918-2.3652399 3.0903742l2.8448791 6.16302512h-1.7773814l-2.7366596-5.82581707h-.9588329v5.82581707h-1.7007817zm1.7007817 3.35295806h.8817878c1.0042583 0 2.411556-.33674165 2.411556-2.43508055 0-2.0237147-.9588329-2.58572812-2.2579112-2.58572812-1.0354326 0-1.0354326.33720805-1.0354326 1.68650665z" class="style-scope primary-nav"></path><path d="m30.9386422 12.2878054c-.5250645.2817063-1.3761234.7121946-2.9682403.7121946-3.3552471 0-4.5612478-2.4537366-4.5612478-6.66860403 0-3.4089262.86531-6.18214759 4.3136347-6.18214759 1.3761234 0 2.3812724.28077351 3.0920468.56201342l.0930776 3.12908549h-.4484648c-.0619033-.95612241-.9125167-2.79187744-2.5821241-2.79187744-2.2726076 0-2.6440273 2.94065941-2.6440273 5.28292612 0 2.95931547.8510588 5.61966783 2.9994146 5.61966783 1.4692009 0 2.2267368-.5620135 2.7059306-.9551897z" class="style-scope primary-nav"></path><path d="m35.4546446 2.67900836c0-1.48129014-.0926322-1.64966096-1.5466914-1.83622143v-.41276504l3.2470277-.43002189v5.80669465h4.2049699v-5.60101173h1.7007816v12.60682378h-1.7007816v-6.12571303h-4.2049699v6.12571303h-1.7003363z" class="style-scope primary-nav"></path><path d="m46.0300434 12.3447063c1.0973359 0 1.3137748-.2807735 1.3137748-1.7420083v-8.05568117c0-1.46123489-.2164389-1.741542-1.3137748-1.741542v-.46919958h4.3287765v.46919958c-1.0826395 0-1.3137748.28030711-1.3137748 1.741542v8.05568117c0 1.4612348.2311353 1.7420083 1.3137748 1.7420083v.4678004h-4.3287765z" class="style-scope primary-nav"></path><path d="m55.1990352 2.60391777c-.494781-1.7051627-.6341747-1.7051627-1.8709043-1.98640261v-.41183224h2.9994145l3.0301436 10.26548988h.0307289l2.9535438-10.26548988h1.0042584l-3.771647 12.60682378h-1.344949z" class="style-scope primary-nav"></path><path d="m67.7842867 2.75363255c0-1.85487748-.0463161-1.85487748-1.4687557-2.13611739v-.41183224h7.4061269l.0463161 2.77228859h-.433323c0-1.49854698-.6488711-1.89218957-1.6696073-1.89218957h-1.2060007c-.7726777 0-.9735293.07462419-.9735293.97431206v3.7279446h1.8709043c1.0657162 0 1.174381-.82366447 1.2674586-1.44164603h.4324323v3.93316112h-.4324323c0-1.01162415-.3402454-1.61141607-1.2674586-1.61141607h-1.8709043v4.17755538c0 1.0489362.2008516 1.0867147.9735293 1.0867147h1.7168141c.8804518 0 1.2977423-.3749865 1.3908199-1.835755h.433323l-.0472068 2.715854h-6.1685065z" class="style-scope primary-nav"></path>
      </g>
      <path d="m1.55575146 9.89647882v-7.6678574c0-1.39053729-.25677019-1.65867172-1.55575146-1.65867172v-.44528687h5.12561364v.44528687c-1.28118091 0-1.55575146.26813443-1.55575146 1.65867172v7.6678574c0 1.39097468.27457055 1.65735948 1.55575146 1.65735948v.4461617h-5.12561364v-.4461617c1.29898127 0 1.55575146-.2663848 1.55575146-1.65735948z" class="style-scope primary-nav"></path><path d="m9.92299051 2.28198586c0-1.65823431-.25588017-1.58649851-1.83032201-1.88962601v-.39235985h3.8626781l5.7664266 9.70008019h.0364907v-9.70008019h1.1534634v12h-1.7577856l-6.0405521-10.14492965h-.0369358v10.14492965h-1.15346329z" class="style-scope primary-nav"></path><path d="m25.631543.83808413h-1.2633805c-1.4458343 0-1.8668128.44572428-1.977175 1.74834147h-.5122054l.0729815-2.5864256h9.3727795l.0734265 2.63935263h-.5126504c0-1.37304075-.5860768-1.8012685-1.9954203-1.8012685h-1.2442452v11.16191587h-2.0141107z" class="style-scope primary-nav"></path><path d="m36.1050097 2.42502005c0-1.7654006-.0556262-1.7654006-1.7399852-2.0326602v-.39235985h8.7684573l.0551811 2.63935263h-.5126504c0-1.42684261-.7685305-1.8012685-1.9762849-1.8012685h-1.4284789c-.9153835 0-1.1534633.0717358-1.1534633.92775388v3.54829773h2.2152547c1.2629356 0 1.3906532-.7851571 1.5010154-1.37391558h.5130954v3.74513378h-.5130954c0-.96274696-.4022881-1.53313407-1.5010154-1.53313407h-2.2152547v3.97608803c0 .9986149.2380798 1.033608 1.1534633 1.033608h2.0319111c1.0439911 0 1.5375061-.356492 1.6469783-1.74702926h.5135404l-.0551812 2.58511336h-7.3034876z" class="style-scope primary-nav"></path><path d="m48.1689385 2.42502005c0-1.7654006-.0364908-1.7654006-1.7382052-2.0326602v-.39235985h4.5026011c1.3732977 0 5.1621043 0 5.1621043 3.19180579 0 2.03309761-1.3537173 2.71065102-2.8004416 2.94248013l3.3682731 5.86571408h-2.1053376l-3.2396655-5.54552745h-1.1352179v5.54552745h-2.0141107zm2.0141107 3.19136837h1.0439911c1.189064 0 2.8556227-.32018663 2.8556227-2.31697893 0-1.92680615-1.1352179-2.46132536-2.673169-2.46132536-1.2264448 0-1.2264448.32062404-1.2264448 1.6057447z" class="style-scope primary-nav"></path><path d="m61.4610921 2.28198586c0-1.65823431-.2567702-1.58649851-1.830767-1.88962601v-.39235985h3.8622331l5.7659816 9.70008019h.0369357v-9.70008019h1.1534633v12h-1.7568955l-6.0414421-10.14492965h-.0364908v10.14492965h-1.1530183z" class="style-scope primary-nav"></path><path d="m75.1550889 2.42502005c0-1.7654006-.0547361-1.7654006-1.7390952-2.0326602v-.39235985h8.7684573l.0551811 2.63935263h-.5126504c0-1.42684261-.7694205-1.8012685-1.9771749-1.8012685h-1.4280339c-.9149385 0-1.1530183.0717358-1.1530183.92775388v3.54829773h2.2148098c1.2633805 0 1.3906531-.7851571 1.5010153-1.37391558h.5130954v3.74513378h-.5130954c0-.96274696-.4022881-1.53313407-1.5010153-1.53313407h-2.2148098v3.97608803c0 .9986149.2380798 1.033608 1.1530183 1.033608h2.0319111c1.0439911 0 1.5379511-.356492 1.6478683-1.74702926h.5126504l-.0551811 2.58511336h-7.3039327z" class="style-scope primary-nav"></path><path d="m89.2335734.83808413h-1.2624905c-1.4462793 0-1.8672578.44572428-1.97762 1.74834147h-.5122054l.0734265-2.5864256h9.3718895l.0734265 2.63935263h-.5122054c0-1.37304075-.5856318-1.8012685-1.9958653-1.8012685h-1.2446902v11.16191587h-2.0136657z" class="style-scope primary-nav"></path>
    </g>
  </svg>

</a>
          <!--?lit$0199747717$-->
        </div>
        <!--?lit$0199747717$-->
      <button class="search-trigger style-scope primary-nav" data-event-click-tracking="TopNav|NavSearchOpen">
        <!--?lit$0199747717$-->
  <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg" aria-labelledby="searchTitleID searchDescID" class="style-scope primary-nav">
    <title id="searchTitleID" class="style-scope primary-nav">Search icon</title>
    <desc id="searchDescID" class="style-scope primary-nav">An illustration of a magnifying glass.</desc>
    <path class="fill-color style-scope primary-nav" d="m32.4526364 29.8875889-8.1719472-7.9751279c1.1046135-1.4876138 1.7652549-3.3102407 1.7652549-5.2846451 0-.101185-.0142895-.1981539-.030573-.2944743.0166158-.0976175.0309053-.196208.0309053-.2990145 0-4.9814145-4.152935-9.0343271-9.2572866-9.0343271-.0907218 0-.1781206.01394537-.2655193.02594487-.0880633-.0119995-.1747974-.02594487-.2655193-.02594487-5.1046839 0-9.25761889 4.0529126-9.25761889 9.0343271 0 .1011849.01395722.1981539.03057294.2947985-.01694804.0976176-.03090525.1958838-.03090525.2986903 0 4.9814145 4.1526027 9.0346514 9.2572866 9.0346514.0907218 0 .1777882-.0139454.2658516-.0262692.0873987.0123238.1741328.0262692.265187.0262692 1.7306942 0 3.3467399-.4747911 4.7338208-1.2852439l8.2882574 8.0886366c.3652137.3564177.843082.53414 1.3212826.53414.4782007 0 .9567336-.1780467 1.3212827-.53414.7294304-.7118622.7294304-1.8660845-.0003323-2.5782711zm-15.9526364-7.8875889c-.0832667-.0118703-.1652765-.0253024-.2513711-.0253024-2.8781993 0-5.2197212-2.3278242-5.2197212-5.1891862 0-.0974612-.013197-.1908615-.0289077-.2836371.0160249-.0940251.0292219-.1889874.0292219-.2880105 0-2.861362 2.3418361-5.1891861 5.2200354-5.1891861.0854662 0 .1677902-.0131198.2510569-.0246777.0826383.0115579.1649623.0246777.2510569.0246777 2.8781993 0 5.2197212 2.3278241 5.2197212 5.1891861 0 .0974612.0135112.1908616.0289077.2839496-.0157107.0940251-.0295361.1886749-.0295361.287698 0 2.861362-2.3415219 5.1891862-5.2197212 5.1891862-.0860946 0-.1684187.0134321-.2507427.0253024z" fill-rule="evenodd"></path>
  </svg>

      </button>
      <nav-search class="style-scope primary-nav x-scope nav-search-1"><!---->
      <div class="search-activated fade-in search-inactive style-scope nav-search">
        <form id="nav-search" class="highlight style-scope nav-search" method="get" action="https://archive.org/search.php" data-event-submit-tracking="TopNav|NavSearchSubmit">
          <input type="text" name="query" class="search-field style-scope nav-search" placeholder="Search" autocomplete="off" value="">
          <!--?lit$0199747717$-->
          <button type="submit" class="search style-scope nav-search" data-event-click-tracking="TopNav|NavSearchClose">
            <!--?lit$0199747717$-->
  <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg" aria-labelledby="searchTitleID searchDescID" class="style-scope nav-search">
    <title id="searchTitleID" class="style-scope nav-search">Search icon</title>
    <desc id="searchDescID" class="style-scope nav-search">An illustration of a magnifying glass.</desc>
    <path class="fill-color style-scope nav-search" d="m32.4526364 29.8875889-8.1719472-7.9751279c1.1046135-1.4876138 1.7652549-3.3102407 1.7652549-5.2846451 0-.101185-.0142895-.1981539-.030573-.2944743.0166158-.0976175.0309053-.196208.0309053-.2990145 0-4.9814145-4.152935-9.0343271-9.2572866-9.0343271-.0907218 0-.1781206.01394537-.2655193.02594487-.0880633-.0119995-.1747974-.02594487-.2655193-.02594487-5.1046839 0-9.25761889 4.0529126-9.25761889 9.0343271 0 .1011849.01395722.1981539.03057294.2947985-.01694804.0976176-.03090525.1958838-.03090525.2986903 0 4.9814145 4.1526027 9.0346514 9.2572866 9.0346514.0907218 0 .1777882-.0139454.2658516-.0262692.0873987.0123238.1741328.0262692.265187.0262692 1.7306942 0 3.3467399-.4747911 4.7338208-1.2852439l8.2882574 8.0886366c.3652137.3564177.843082.53414 1.3212826.53414.4782007 0 .9567336-.1780467 1.3212827-.53414.7294304-.7118622.7294304-1.8660845-.0003323-2.5782711zm-15.9526364-7.8875889c-.0832667-.0118703-.1652765-.0253024-.2513711-.0253024-2.8781993 0-5.2197212-2.3278242-5.2197212-5.1891862 0-.0974612-.013197-.1908615-.0289077-.2836371.0160249-.0940251.0292219-.1889874.0292219-.2880105 0-2.861362 2.3418361-5.1891861 5.2200354-5.1891861.0854662 0 .1677902-.0131198.2510569-.0246777.0826383.0115579.1649623.0246777.2510569.0246777 2.8781993 0 5.2197212 2.3278241 5.2197212 5.1891861 0 .0974612.0135112.1908616.0289077.2839496-.0157107.0940251-.0295361.1886749-.0295361.287698 0 2.861362-2.3415219 5.1891862-5.2197212 5.1891862-.0860946 0-.1684187.0134321-.2507427.0253024z" fill-rule="evenodd"></path>
  </svg>

          </button>
        </form>
      </div>
    </nav-search>
    
        <a class="upload style-scope primary-nav" href="https://archive.org/create">
          <!--?lit$0199747717$-->
  <svg width="40" height="41" viewBox="0 0 40 41" xmlns="http://www.w3.org/2000/svg" aria-labelledby="uploadTitleID uploadDescID" class="style-scope primary-nav">
    <title id="uploadTitleID" class="style-scope primary-nav">Upload icon</title>
    <desc id="uploadDescID" class="style-scope primary-nav">An illustration of a horizontal line over an up pointing arrow.</desc>
    <path class="fill-color style-scope primary-nav" d="m20 12.8 8 10.4h-4.8v8.8h-6.4v-8.8h-4.8zm12-4.8v3.2h-24v-3.2z" fill-rule="evenodd"></path>
  </svg>

          <span class="style-scope primary-nav">Upload</span>
        </a>
        <div class="user-info style-scope primary-nav">
          <!--?lit$0199747717$-->
      <button class="user-menu  style-scope primary-nav" title="Expand user menu" data-event-click-tracking="TopNav|NavUserMenu">
        <img class="style-scope primary-nav" src="https://archive.org/services/img/user/profile?" alt="m4rc3l_cy8er_m30n_">
        <span class="username style-scope primary-nav"><!--?lit$0199747717$-->m4rc3l cy…</span>
      </button>
    
        </div>
        <media-menu class="style-scope primary-nav x-scope media-menu-1" tabindex="-1"><!---->
      <div class="media-menu-container closed style-scope media-menu">
        <div class="overflow-clip style-scope media-menu">
          <nav class="media-menu-inner style-scope media-menu" aria-hidden="true" aria-expanded="false">
            <div class="menu-group style-scope media-menu">
              <!--?lit$0199747717$--><!---->
        <media-button class="style-scope media-menu x-scope media-button-1" data-mediatype="web"><!---->
      <a class="menu-item web  style-scope media-button" href="https://archive.org/web/" data-event-click-tracking="TopNav|NavMenuWeb" title="Expand web menu">
        <!--?lit$0199747717$-->
      <span class="icon  style-scope media-button">
        <!--?lit$0199747717$-->
  <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg" aria-labelledby="webTitleID webDescID" class="style-scope media-button">
    <title id="webTitleID" class="style-scope media-button">Web icon</title>
    <desc id="webDescID" class="style-scope media-button">An illustration of a computer application window</desc>
    <path class="fill-color style-scope media-button" d="m8 28.7585405v-8.1608108-9.3577297h24v9.3577297 8.1608108zm14.2702703-15.8863783h-12.43243246v2.6114594h12.43243246zm7.7837838 14.0365946v-7.0727027-1.8497838h-20.21621626v1.8497838 7.0727027zm-3.7837838-14.0365946h-2.7027027v2.6114594h2.7027027zm4 0h-2.7027027v2.6114594h2.7027027z" fill-rule="evenodd"></path>
  </svg>

      </span>
      <span class="label style-scope media-button"><!--?lit$0199747717$-->Wayback Machine</span>
    
      </a>
    </media-button>
      <!----><!---->
        <media-button class="style-scope media-menu x-scope media-button-1" data-mediatype="texts"><!---->
      <a class="menu-item texts  style-scope media-button" href="https://archive.org/details/texts" data-event-click-tracking="TopNav|NavMenuTexts" title="Expand texts menu">
        <!--?lit$0199747717$-->
      <span class="icon  style-scope media-button">
        <!--?lit$0199747717$-->
  <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg" aria-labelledby="textsTitleID textsDescID" class="style-scope media-button">
    <title id="textsTitleID" class="style-scope media-button">Texts icon</title>
    <desc id="textsDescID" class="style-scope media-button">An illustration of an open book.</desc>
    <path class="fill-color style-scope media-button" d="m10.3323235 11.0007023h6.9060825c.8851083 0 1.5847122.3064258 2.0988114.9192774v14.4324451h-.6460032c-.1435563-.120323-.3528315-.2434552-.6278257-.3693964-.2749942-.1259413-.5201585-.2191097-.7354929-.2795053l-.3048241-.1081503h-5.7042647c-.3108832 0-.5621067-.0601615-.7536705-.1804846-.0717781-.0599274-.1256117-.1439663-.1615008-.2521166-.0358891-.1081502-.0598928-.2043619-.0720112-.2886348v-13.8741368zm19.1752505 0v13.603761c-.0717781.3361555-.2211606.5943584-.4481473.7746089-.0717781.0599274-.1733862.1079162-.304824.1439663-.1314379.0360501-.2451643.0601615-.3411793.0723343h-5.5965975c-.9568865.2640552-1.5068748.5164059-1.649965.757052h-.6634817v-14.4324451c.5140992-.6128516 1.2076439-.9192774 2.0806339-.9192774h6.92426zm1.3814961.6489017-.1796783 15.2976474c-.0955489 0-1.0342578.0119386-2.8161268.035816-1.7818691.0238773-3.3006293.0898911-4.5562806.1980414-1.2556514.1081503-1.9613144.2884008-2.1169891.5407514-.0955488.1924233-.5439291.273419-1.345141.2429871-.8012118-.0304319-1.3155441-.1776755-1.5429969-.4417308-.334654-.3843783-3.4558378-.5765674-9.36355164-.5765674v-15.3875385l-.96830576.3960828v16.2702977c6.4096947-.2041278 9.7760429-.0840388 10.0990445.3602669.2391051.276228.9864833.414342 2.2421347.414342.1915638 0 .4187835-.0210682.6816593-.0632047s.4810068-.0870821.6543929-.1348367c.1733862-.0477547.2719646-.0838048.2957353-.1081503.0838965-.1563732.9599161-.2675666 2.6280587-.3335805 1.6681426-.0660138 3.3213703-.0931684 4.9596831-.0814638l2.4392915.0182591v-16.2344816z"></path>
  </svg>

      </span>
      <span class="label style-scope media-button"><!--?lit$0199747717$-->Books</span>
    
      </a>
    </media-button>
      <!----><!---->
        <media-button class="style-scope media-menu x-scope media-button-1" data-mediatype="video"><!---->
      <a class="menu-item video  style-scope media-button" href="https://archive.org/details/movies" data-event-click-tracking="TopNav|NavMenuVideo" title="Expand video menu">
        <!--?lit$0199747717$-->
      <span class="icon  style-scope media-button">
        <!--?lit$0199747717$-->
  <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg" aria-labelledby="videoTitleID videoDescID" class="style-scope media-button">
    <title id="videoTitleID" class="style-scope media-button">Video icon</title>
    <desc id="videoDescID" class="style-scope media-button">An illustration of two cells of a film strip.</desc>
    <path class="fill-color style-scope media-button" d="m31.0117647 12.0677966c0 .4067797-.2823529.6779661-.7058823.6779661h-1.2705883c-.4235294 0-.7058823-.2711864-.7058823-.6779661v-.6779661c0-.4067797.2823529-.6779661.7058823-.6779661h1.2705883c.4235294 0 .7058823.2711864.7058823.6779661zm0 3.2542373c0 .4067797-.2823529.6779661-.7058823.6779661h-1.2705883c-.4235294 0-.7058823-.2711864-.7058823-.6779661v-.6779661c0-.4067797.2823529-.6779661.7058823-.6779661h1.2705883c.4235294 0 .7058823.2711864.7058823.6779661zm0 3.2542373c0 .4067796-.2823529.6779661-.7058823.6779661h-1.2705883c-.4235294 0-.7058823-.2711865-.7058823-.6779661v-.6779661c0-.4067797.2823529-.6779661.7058823-.6779661h1.2705883c.4235294 0 .7058823.2711864.7058823.6779661zm0 3.3898305c0 .4067797-.2823529.6779661-.7058823.6779661h-1.2705883c-.4235294 0-.7058823-.2711864-.7058823-.6779661v-.6779661c0-.4067797.2823529-.6779661.7058823-.6779661h1.2705883c.4235294 0 .7058823.2711864.7058823.6779661zm0 3.2542373c0 .4067796-.2823529.6779661-.7058823.6779661h-1.2705883c-.4235294 0-.7058823-.2711865-.7058823-.6779661v-.6779661c0-.4067797.2823529-.6779661.7058823-.6779661h1.2705883c.4235294 0 .7058823.2711864.7058823.6779661zm0 3.2542373c0 .4067796-.2823529.6779661-.7058823.6779661h-1.2705883c-.4235294 0-.7058823-.2711865-.7058823-.6779661v-.6779661c0-.4067797.2823529-.6779661.7058823-.6779661h1.2705883c.4235294 0 .7058823.2711864.7058823.6779661zm-4.0941176-10.440678c0 .5423729-.4235295.9491525-.9882353.9491525h-11.5764706c-.5647059 0-.9882353-.4067796-.9882353-.9491525v-6.9152542c0-.5423729.4235294-.9491526.9882353-.9491526h11.5764706c.5647058 0 .9882353.4067797.9882353.9491526zm-.1411765 11.2542373c0 .5423729-.4235294.9491525-.9882353.9491525h-11.5764706c-.5647059 0-.9882353-.4067796-.9882353-.9491525v-6.9152542c0-.5423729.4235294-.9491526.9882353-.9491526h11.5764706c.5647059 0 .9882353.4067797.9882353.9491526zm-14.9647059-17.220339c0 .4067797-.2823529.6779661-.7058823.6779661h-1.27058828c-.42352941 0-.70588236-.2711864-.70588236-.6779661v-.6779661c0-.4067797.28235295-.6779661.70588236-.6779661h1.27058828c.4235294 0 .7058823.2711864.7058823.6779661zm0 3.2542373c0 .4067797-.2823529.6779661-.7058823.6779661h-1.27058828c-.42352941 0-.70588236-.2711864-.70588236-.6779661v-.6779661c0-.4067797.28235295-.6779661.70588236-.6779661h1.27058828c.4235294 0 .7058823.2711864.7058823.6779661zm0 3.2542373c0 .4067796-.2823529.6779661-.7058823.6779661h-1.27058828c-.42352941 0-.70588236-.2711865-.70588236-.6779661v-.6779661c0-.4067797.28235295-.6779661.70588236-.6779661h1.27058828c.4235294 0 .7058823.2711864.7058823.6779661zm0 3.3898305c0 .4067797-.2823529.6779661-.7058823.6779661h-1.27058828c-.42352941 0-.70588236-.2711864-.70588236-.6779661v-.6779661c0-.4067797.28235295-.6779661.70588236-.6779661h1.27058828c.4235294 0 .7058823.2711864.7058823.6779661zm0 3.2542373c0 .4067796-.2823529.6779661-.7058823.6779661h-1.27058828c-.42352941 0-.70588236-.2711865-.70588236-.6779661v-.6779661c0-.4067797.28235295-.6779661.70588236-.6779661h1.27058828c.4235294 0 .7058823.2711864.7058823.6779661zm0 3.2542373c0 .4067796-.2823529.6779661-.7058823.6779661h-1.27058828c-.42352941 0-.70588236-.2711865-.70588236-.6779661v-.6779661c0-.4067797.28235295-.6779661.70588236-.6779661h1.27058828c.4235294 0 .7058823.2711864.7058823.6779661zm20.0470588-20.4745763h-.8470588v.27118644.6779661c0 .40677966-.2823529.6779661-.7058823.6779661h-1.2705883c-.4235294 0-.7058823-.27118644-.7058823-.6779661v-.6779661-.27118644h-16.5176471v.27118644.6779661c0 .40677966-.2823529.6779661-.7058823.6779661h-1.27058828c-.42352941 0-.70588236-.27118644-.70588236-.6779661v-.6779661-.27118644h-1.12941176v24h1.12941176v-.2711864-.6779661c0-.4067797.28235295-.6779661.70588236-.6779661h1.27058828c.4235294 0 .7058823.2711864.7058823.6779661v.6779661.2711864h16.6588235v-.2711864-.6779661c0-.4067797.282353-.6779661.7058824-.6779661h1.2705882c.4235294 0 .7058824.2711864.7058824.6779661v.6779661.2711864h.8470588v-24z" fill-rule="evenodd"></path>
  </svg>

      </span>
      <span class="label style-scope media-button"><!--?lit$0199747717$-->Video</span>
    
      </a>
    </media-button>
      <!----><!---->
        <media-button class="style-scope media-menu x-scope media-button-1" data-mediatype="audio"><!---->
      <a class="menu-item audio  style-scope media-button" href="https://archive.org/details/audio" data-event-click-tracking="TopNav|NavMenuAudio" title="Expand audio menu">
        <!--?lit$0199747717$-->
      <span class="icon  style-scope media-button">
        <!--?lit$0199747717$-->
  <svg width="40px" height="40px" viewBox="0 0 40 40" version="1.1" xmlns="http://www.w3.org/2000/svg" aria-labelledby="audioTitleID audioDescID" class="style-scope media-button">
    <title id="audioTitleID" class="style-scope media-button">Audio icon</title>
    <desc id="audioDescID" class="style-scope media-button">An illustration of an audio speaker.</desc>
    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd" class="style-scope media-button">
      <g transform="translate(10, 8)" class="fill-color style-scope media-button">
        <path d="M19.4264564,11.8585048 L19.4264564,20.7200433 C19.4264564,22.3657576 18.8838179,23.2519114 16.8489237,23.2519114 C12.2364969,23.125318 7.75972977,23.125318 3.14730298,23.2519114 C1.24806842,23.2519114 0.569770368,22.492351 0.569770368,20.7200433 L0.569770368,2.74377955 C0.569770368,1.09806526 1.11240881,0.211911416 3.14730298,0.211911416 C7.75972977,0.338504822 12.2364969,0.338504822 16.8489237,0.211911416 C18.7481583,0.211911416 19.4264564,0.971471855 19.4264564,2.74377955 C19.2907967,5.78202131 19.4264564,8.82026306 19.4264564,11.8585048 L19.4264564,11.8585048 Z M10.0659432,2.74377955 C8.16670861,2.74377955 6.67445288,4.13630702 6.67445288,5.90861471 C6.67445288,7.6809224 8.16670861,9.07344988 10.0659432,9.07344988 C11.9651777,9.07344988 13.4574335,7.6809224 13.4574335,5.90861471 C13.4574335,4.13630702 11.8295181,2.74377955 10.0659432,2.74377955 L10.0659432,2.74377955 Z M10.0659432,11.4787246 C7.21709133,11.4787246 5.04653754,13.6308125 5.04653754,16.1626806 C5.04653754,18.8211422 7.35275094,20.8466367 10.0659432,20.8466367 C12.914795,20.8466367 15.0853488,18.6945488 15.0853488,16.1626806 C15.0853488,13.6308125 12.7791354,11.4787246 10.0659432,11.4787246 L10.0659432,11.4787246 Z" class="style-scope media-button"></path>
        <ellipse cx="10.2016028" cy="16.5690777" rx="1.35659611" ry="1.34075134" class="style-scope media-button"></ellipse>
      </g>
    </g>
  </svg>

      </span>
      <span class="label style-scope media-button"><!--?lit$0199747717$-->Audio</span>
    
      </a>
    </media-button>
      <!----><!---->
        <media-button class="style-scope media-menu x-scope media-button-1" data-mediatype="software"><!---->
      <a class="menu-item software  style-scope media-button" href="https://archive.org/details/software" data-event-click-tracking="TopNav|NavMenuSoftware" title="Expand software menu">
        <!--?lit$0199747717$-->
      <span class="icon  style-scope media-button">
        <!--?lit$0199747717$-->
  <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" aria-labelledby="softwareTitleID softwareDescID" class="style-scope media-button">
    <title id="softwareTitleID" class="style-scope media-button">Software icon</title>
    <desc id="softwareDescID" class="style-scope media-button">An illustration of a 3.5" floppy disk.</desc>
    <path class="fill-color style-scope media-button" d="m32 30.6900373v-21.44521088c0-.82988428-.4156786-1.24482642-1.2470357-1.24482642h-21.50592858c-.83135715 0-1.24703572.4221795-1.24703572 1.26653851v21.44521089c0 .8588337.41567857 1.2882506 1.24703572 1.2882506h21.48327168c.8458575 0 1.2687863-.4366542 1.2687863-1.3099627zm-5.9950155-20.4410268v6.114667c0 .6694561-.3428744 1.0041841-1.0286232 1.0041841h-10.1294464c-.2622159 0-.4773054-.0802141-.6452685-.2406423s-.2519447-.3642806-.2519447-.6115572v-6.1363791l.0217506-.1311772h12.0326259zm-4.9437353.8295827v5.0010178h3.0405558v-5.0010178zm-9.7134658 18.8035735v-7.753025c0-.5241057.1604108-.9025595.4812325-1.1353613.1897138-.1453504.4011782-.2180256.6343932-.2180256h14.7451099c.3208217 0 .5905898.1091636.8093044.3274907s.3280719.5023936.3280719.8521995v7.8181612l-.0217506.1094652h-16.9772676z"></path>
  </svg>

      </span>
      <span class="label style-scope media-button"><!--?lit$0199747717$-->Software</span>
    
      </a>
    </media-button>
      <!----><!---->
        <media-button class="style-scope media-menu x-scope media-button-1" data-mediatype="images"><!---->
      <a class="menu-item images  style-scope media-button" href="https://archive.org/details/image" data-event-click-tracking="TopNav|NavMenuImages" title="Expand images menu">
        <!--?lit$0199747717$-->
      <span class="icon  style-scope media-button">
        <!--?lit$0199747717$-->
  <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg" aria-labelledby="imagesTitleID imagesDescID" class="style-scope media-button">
    <title id="imagesTitleID" class="style-scope media-button">Images icon</title>
    <desc id="imagesDescID" class="style-scope media-button">An illustration of two photographs.</desc>
    <path class="fill-color style-scope media-button" d="m20.8219178 15.3769871c0 1.1136708-.8767123 1.8932404-1.8630137 1.8932404s-1.9726027-.8909367-1.9726027-1.8932404c0-1.0023038.8767123-1.8932404 1.9726027-1.8932404.9863014 0 1.8630137.8909366 1.8630137 1.8932404zm-5.9178082-3.7864808h15.4520548v6.0138225l-1.9726028-3.3410125-2.6301369 6.3479237-2.1917809-2.67281-6.1369863 5.1228859h-2.5205479zm-1.7534247-1.6705063v14.9231892h18.8493151v-14.9231892zm-2.9589041 7.2388604c.2191781 0 1.9726028-.3341012 1.9726028-.3341012v-2.0046075l-4.1643836.5568354c.43835616 4.7887846.87671233 9.9116704 1.31506849 14.700455 6.02739731-.5568354 13.26027401-1.5591391 19.39726031-2.1159746-.1095891-.5568354-.1095891-2.0046075-.2191781-2.67281-.4383562.1113671-1.4246575 0-1.8630137.1113671v.8909367c-5.1506849.4454683-10.3013699 1.1136708-15.4520548 1.6705062.109589-.111367-.5479452-7.0161262-.9863014-10.8026071z" fill-rule="evenodd"></path>
  </svg>

      </span>
      <span class="label style-scope media-button"><!--?lit$0199747717$-->Images</span>
    
      </a>
    </media-button>
      <!----><!---->
        <media-button class="style-scope media-menu x-scope media-button-1" data-mediatype="donate"><!---->
      <a class="menu-item donate  style-scope media-button" href="https://archive.org/donate/" data-event-click-tracking="TopNav|NavMenuDonate" title="Expand donate menu">
        <!--?lit$0199747717$-->
      <span class="icon  style-scope media-button">
        <!--?lit$0199747717$-->
  <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" aria-labelledby="donateTitleID donateDescID" class="style-scope media-button">
    <title id="donateTitleID" class="style-scope media-button">Donate icon</title>
    <desc id="donateDescID" class="style-scope media-button">An illustration of a heart shape</desc>
    <path class="fill-color style-scope media-button" d="m30.0120362 11.0857287c-1.2990268-1.12627221-2.8599641-1.65258786-4.682812-1.57894699-.8253588.02475323-1.7674318.3849128-2.8262192 1.08047869-1.0587873.6955659-1.89622 1.5724492-2.512298 2.63065-.591311-1.0588196-1.4194561-1.9357029-2.4844351-2.63065-1.0649791-.69494706-2.0039563-1.05510663-2.8169316-1.08047869-1.2067699-.04950647-2.318187.17203498-3.3342513.66462439-1.0160643.4925893-1.82594378 1.2002224-2.42963831 2.1228992-.60369453.9226769-.91173353 1.9629315-.92411701 3.1207641-.03715043 1.9202322.70183359 3.7665141 2.21695202 5.5388457 1.2067699 1.4035084 2.912594 3.1606786 5.1174721 5.2715107 2.2048782 2.1108321 3.7565279 3.5356901 4.6549492 4.2745742.8253588-.6646243 2.355647-2.0647292 4.5908647-4.2003145s3.9747867-3.9171994 5.218707-5.3448422c1.502735-1.7723316 2.2355273-3.6186135 2.1983769-5.5388457-.0256957-1.7608832-.6875926-3.2039968-1.9866194-4.3302689z"></path>
  </svg>

      </span>
      <span class="label style-scope media-button"><!--?lit$0199747717$-->Donate</span>
    
      </a>
    </media-button>
      <!----><!---->
        <media-button class="style-scope media-menu x-scope media-button-1" data-mediatype="more"><!---->
      <a class="menu-item more  style-scope media-button" href="https://archive.org/about/" data-event-click-tracking="TopNav|NavMenuMore" title="Expand more menu">
        <!--?lit$0199747717$-->
      <span class="icon  style-scope media-button">
        <!--?lit$0199747717$-->
  <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg" aria-labelledby="ellipsesTitleID ellipsesDescID" class="style-scope media-button">
    <title id="ellipsesTitleID" class="style-scope media-button">Ellipses icon</title>
    <desc id="ellipsesDescID" class="style-scope media-button">An illustration of text ellipses.</desc>
    <path class="fill-color style-scope media-button" d="m10.5 17.5c1.3807119 0 2.5 1.1192881 2.5 2.5s-1.1192881 2.5-2.5 2.5c-1.38071187 0-2.5-1.1192881-2.5-2.5s1.11928813-2.5 2.5-2.5zm9.5 0c1.3807119 0 2.5 1.1192881 2.5 2.5s-1.1192881 2.5-2.5 2.5-2.5-1.1192881-2.5-2.5 1.1192881-2.5 2.5-2.5zm9.5 0c1.3807119 0 2.5 1.1192881 2.5 2.5s-1.1192881 2.5-2.5 2.5-2.5-1.1192881-2.5-2.5 1.1192881-2.5 2.5-2.5z" fill-rule="evenodd"></path>
  </svg>

      </span>
      <span class="label style-scope media-button"><!--?lit$0199747717$-->More</span>
    
      </a>
    </media-button>
      <!---->
            </div>
          </nav>
        </div>
      </div>
    </media-menu>
        <button class="hamburger style-scope primary-nav" tabindex="1" title="Open main menu" data-event-click-tracking="TopNav|NavHamburger">
          <icon-hamburger class="style-scope primary-nav x-scope icon-hamburger-1"><!---->
      <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg" aria-labelledby="hamburgerTitleID hamburgerDescID" class="style-scope icon-hamburger">
        <title id="hamburgerTitleID" class="style-scope icon-hamburger">Hamburger icon</title>
        <desc id="hamburgerDescID" class="style-scope icon-hamburger">An icon used to represent a menu that can be toggled by interacting with this icon.</desc>
        <path d="m30.5 26.5c.8284271 0 1.5.6715729 1.5 1.5s-.6715729 1.5-1.5 1.5h-21c-.82842712 0-1.5-.6715729-1.5-1.5s.67157288-1.5 1.5-1.5zm0-8c.8284271 0 1.5.6715729 1.5 1.5s-.6715729 1.5-1.5 1.5h-21c-.82842712 0-1.5-.6715729-1.5-1.5s.67157288-1.5 1.5-1.5zm0-8c.8284271 0 1.5.6715729 1.5 1.5s-.6715729 1.5-1.5 1.5h-21c-.82842712 0-1.5-.6715729-1.5-1.5s.67157288-1.5 1.5-1.5z" fill="#999" fill-rule="evenodd" class="style-scope icon-hamburger"></path>
      </svg>
    </icon-hamburger>
        </button>
      </nav>
    </primary-nav>
        <media-slider class="style-scope ia-topnav x-scope media-slider-1"><!---->
      <div class="media-slider-container style-scope media-slider">
        <div class="overflow-clip closed style-scope media-slider">
          <div class="information-menu closed style-scope media-slider">
            <div class="info-box style-scope media-slider">
              <media-subnav menu="audio" class="hidden style-scope media-slider x-scope media-subnav-1"><!---->
      <h3 class="style-scope media-subnav"><!--?lit$0199747717$-->Internet Archive Audio</h3>
      <div class="icon-links style-scope media-subnav">
        <!--?lit$0199747717$--><!---->
        <a class="style-scope media-subnav" href="https://archive.org/details/etree" data-event-click-tracking="TopNav|LiveMusicArchiveAudio"><img class="style-scope media-subnav" src="https://archive.org/services/img/etree"><!--?lit$0199747717$-->Live Music Archive</a>
      <!----><!---->
        <a class="style-scope media-subnav" href="https://archive.org/details/librivoxaudio" data-event-click-tracking="TopNav|LibrivoxFreeAudioAudio"><img class="style-scope media-subnav" src="https://archive.org/services/img/librivoxaudio"><!--?lit$0199747717$-->Librivox Free Audio</a>
      <!---->
      </div>
      <div class="links featured style-scope media-subnav">
        <h4 class="style-scope media-subnav">Featured</h4>
        <ul class="style-scope media-subnav">
          <!--?lit$0199747717$--><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/audio" data-event-click-tracking="TopNav|AllAudioAudio"><!--?lit$0199747717$-->All Audio</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/search.php?query=mediatype:audio&amp;sort=-publicdate" data-event-click-tracking="TopNav|ThisJustInAudio"><!--?lit$0199747717$-->This Just In</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/GratefulDead" data-event-click-tracking="TopNav|GratefulDeadAudio"><!--?lit$0199747717$-->Grateful Dead</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/netlabels" data-event-click-tracking="TopNav|NetlabelsAudio"><!--?lit$0199747717$-->Netlabels</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/oldtimeradio" data-event-click-tracking="TopNav|OldTimeRadioAudio"><!--?lit$0199747717$-->Old Time Radio</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/78rpm" data-event-click-tracking="TopNav|78RPMsAndCylinderRecordingsAudio"><!--?lit$0199747717$-->78 RPMs and Cylinder Recordings</a></li>
      <!---->
        </ul>
      </div>
      <div class="links top style-scope media-subnav">
        <h4 class="style-scope media-subnav">Top</h4>
        <ul class="style-scope media-subnav">
          <!--?lit$0199747717$--><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/audio_bookspoetry" data-event-click-tracking="TopNav|AudioBooks&amp;PoetryAudio"><!--?lit$0199747717$-->Audio Books &amp; Poetry</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/audio_tech" data-event-click-tracking="TopNav|Computers,TechnologyAndScienceAudio"><!--?lit$0199747717$-->Computers, Technology and Science</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/audio_music" data-event-click-tracking="TopNav|Music,Arts&amp;CultureAudio"><!--?lit$0199747717$-->Music, Arts &amp; Culture</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/audio_news" data-event-click-tracking="TopNav|News&amp;PublicAffairsAudio"><!--?lit$0199747717$-->News &amp; Public Affairs</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/audio_religion" data-event-click-tracking="TopNav|Spirituality&amp;ReligionAudio"><!--?lit$0199747717$-->Spirituality &amp; Religion</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/podcasts" data-event-click-tracking="TopNav|PodcastsAudio"><!--?lit$0199747717$-->Podcasts</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/radio" data-event-click-tracking="TopNav|RadioNewsArchiveAudio"><!--?lit$0199747717$-->Radio News Archive</a></li>
      <!---->
        </ul>
      </div>
    </media-subnav>
              <media-subnav menu="images" class="hidden style-scope media-slider x-scope media-subnav-1"><!---->
      <h3 class="style-scope media-subnav"><!--?lit$0199747717$-->Images</h3>
      <div class="icon-links style-scope media-subnav">
        <!--?lit$0199747717$--><!---->
        <a class="style-scope media-subnav" href="https://archive.org/details/metropolitanmuseumofart-gallery" data-event-click-tracking="TopNav|MetropolitanMuseumImages"><img class="style-scope media-subnav" src="https://archive.org/services/img/metropolitanmuseumofart-gallery"><!--?lit$0199747717$-->Metropolitan Museum</a>
      <!----><!---->
        <a class="style-scope media-subnav" href="https://archive.org/details/clevelandart" data-event-click-tracking="TopNav|ClevelandMuseumOfArtImages"><img class="style-scope media-subnav" src="https://archive.org/services/img/clevelandart"><!--?lit$0199747717$-->Cleveland Museum of Art</a>
      <!---->
      </div>
      <div class="links featured style-scope media-subnav">
        <h4 class="style-scope media-subnav">Featured</h4>
        <ul class="style-scope media-subnav">
          <!--?lit$0199747717$--><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/image" data-event-click-tracking="TopNav|AllImagesImages"><!--?lit$0199747717$-->All Images</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/search.php?query=mediatype:image&amp;sort=-publicdate" data-event-click-tracking="TopNav|ThisJustInImages"><!--?lit$0199747717$-->This Just In</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/flickrcommons" data-event-click-tracking="TopNav|FlickrCommonsImages"><!--?lit$0199747717$-->Flickr Commons</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/flickr-ows" data-event-click-tracking="TopNav|OccupyWallStreetFlickrImages"><!--?lit$0199747717$-->Occupy Wall Street Flickr</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/coverartarchive" data-event-click-tracking="TopNav|CoverArtImages"><!--?lit$0199747717$-->Cover Art</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/maps_usgs" data-event-click-tracking="TopNav|USGSMapsImages"><!--?lit$0199747717$-->USGS Maps</a></li>
      <!---->
        </ul>
      </div>
      <div class="links top style-scope media-subnav">
        <h4 class="style-scope media-subnav">Top</h4>
        <ul class="style-scope media-subnav">
          <!--?lit$0199747717$--><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/nasa" data-event-click-tracking="TopNav|NASAImagesImages"><!--?lit$0199747717$-->NASA Images</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/solarsystemcollection" data-event-click-tracking="TopNav|SolarSystemCollectionImages"><!--?lit$0199747717$-->Solar System Collection</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/amesresearchcenterimagelibrary" data-event-click-tracking="TopNav|AmesResearchCenterImages"><!--?lit$0199747717$-->Ames Research Center</a></li>
      <!---->
        </ul>
      </div>
    </media-subnav>
              <media-subnav menu="software" class="hidden style-scope media-slider x-scope media-subnav-1"><!---->
      <h3 class="style-scope media-subnav"><!--?lit$0199747717$-->Software</h3>
      <div class="icon-links style-scope media-subnav">
        <!--?lit$0199747717$--><!---->
        <a class="style-scope media-subnav" href="https://archive.org/details/internetarcade" data-event-click-tracking="TopNav|InternetArcadeSoftware"><img class="style-scope media-subnav" src="https://archive.org/services/img/internetarcade"><!--?lit$0199747717$-->Internet Arcade</a>
      <!----><!---->
        <a class="style-scope media-subnav" href="https://archive.org/details/consolelivingroom" data-event-click-tracking="TopNav|ConsoleLivingRoomSoftware"><img class="style-scope media-subnav" src="https://archive.org/services/img/consolelivingroom"><!--?lit$0199747717$-->Console Living Room</a>
      <!---->
      </div>
      <div class="links featured style-scope media-subnav">
        <h4 class="style-scope media-subnav">Featured</h4>
        <ul class="style-scope media-subnav">
          <!--?lit$0199747717$--><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/software" data-event-click-tracking="TopNav|AllSoftwareSoftware"><!--?lit$0199747717$-->All Software</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/search.php?query=mediatype:software&amp;sort=-publicdate" data-event-click-tracking="TopNav|ThisJustInSoftware"><!--?lit$0199747717$-->This Just In</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/tosec" data-event-click-tracking="TopNav|OldSchoolEmulationSoftware"><!--?lit$0199747717$-->Old School Emulation</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/softwarelibrary_msdos_games" data-event-click-tracking="TopNav|MS-DOSGamesSoftware"><!--?lit$0199747717$-->MS-DOS Games</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/historicalsoftware" data-event-click-tracking="TopNav|HistoricalSoftwareSoftware"><!--?lit$0199747717$-->Historical Software</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/classicpcgames" data-event-click-tracking="TopNav|ClassicPCGamesSoftware"><!--?lit$0199747717$-->Classic PC Games</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/softwarelibrary" data-event-click-tracking="TopNav|SoftwareLibrarySoftware"><!--?lit$0199747717$-->Software Library</a></li>
      <!---->
        </ul>
      </div>
      <div class="links top style-scope media-subnav">
        <h4 class="style-scope media-subnav">Top</h4>
        <ul class="style-scope media-subnav">
          <!--?lit$0199747717$--><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/kodi_archive" data-event-click-tracking="TopNav|KodiArchiveAndSupportFileSoftware"><!--?lit$0199747717$-->Kodi Archive and Support File</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/vintagesoftware" data-event-click-tracking="TopNav|VintageSoftwareSoftware"><!--?lit$0199747717$-->Vintage Software</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/apkarchive" data-event-click-tracking="TopNav|APKSoftware"><!--?lit$0199747717$-->APK</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/softwarelibrary_msdos" data-event-click-tracking="TopNav|MS-DOSSoftware"><!--?lit$0199747717$-->MS-DOS</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/cd-roms" data-event-click-tracking="TopNav|CD-ROMSoftwareSoftware"><!--?lit$0199747717$-->CD-ROM Software</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/cdromsoftware" data-event-click-tracking="TopNav|CD-ROMSoftwareLibrarySoftware"><!--?lit$0199747717$-->CD-ROM Software Library</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/softwaresites" data-event-click-tracking="TopNav|SoftwareSitesSoftware"><!--?lit$0199747717$-->Software Sites</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/tucows" data-event-click-tracking="TopNav|TucowsSoftwareLibrarySoftware"><!--?lit$0199747717$-->Tucows Software Library</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/cdbbsarchive" data-event-click-tracking="TopNav|SharewareCD-ROMsSoftware"><!--?lit$0199747717$-->Shareware CD-ROMs</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/softwarecapsules" data-event-click-tracking="TopNav|SoftwareCapsulesCompilationSoftware"><!--?lit$0199747717$-->Software Capsules Compilation</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/cdromimages" data-event-click-tracking="TopNav|CD-ROMImagesSoftware"><!--?lit$0199747717$-->CD-ROM Images</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/softwarelibrary_zx_spectrum" data-event-click-tracking="TopNav|ZXSpectrumSoftware"><!--?lit$0199747717$-->ZX Spectrum</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/doom-cds" data-event-click-tracking="TopNav|DOOMLevelCDSoftware"><!--?lit$0199747717$-->DOOM Level CD</a></li>
      <!---->
        </ul>
      </div>
    </media-subnav>
              <media-subnav menu="texts" class="hidden style-scope media-slider x-scope media-subnav-1"><!---->
      <h3 class="style-scope media-subnav"><!--?lit$0199747717$-->Books</h3>
      <div class="icon-links style-scope media-subnav">
        <!--?lit$0199747717$--><!---->
        <a class="style-scope media-subnav" href="https://archive.org/details/inlibrary" data-event-click-tracking="TopNav|BooksToBorrowTexts"><img class="style-scope media-subnav" src="https://archive.org/images/book-lend.png"><!--?lit$0199747717$-->Books to Borrow</a>
      <!----><!---->
        <a class="style-scope media-subnav" href="https://openlibrary.org/" data-event-click-tracking="TopNav|OpenLibraryTexts"><img class="style-scope media-subnav" src="https://archive.org/images/widgetOL.png"><!--?lit$0199747717$-->Open Library</a>
      <!---->
      </div>
      <div class="links featured style-scope media-subnav">
        <h4 class="style-scope media-subnav">Featured</h4>
        <ul class="style-scope media-subnav">
          <!--?lit$0199747717$--><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/books" data-event-click-tracking="TopNav|AllBooksTexts"><!--?lit$0199747717$-->All Books</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/texts" data-event-click-tracking="TopNav|AllTextsTexts"><!--?lit$0199747717$-->All Texts</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/search.php?query=mediatype:texts&amp;sort=-publicdate" data-event-click-tracking="TopNav|ThisJustInTexts"><!--?lit$0199747717$-->This Just In</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/smithsonian" data-event-click-tracking="TopNav|SmithsonianLibrariesTexts"><!--?lit$0199747717$-->Smithsonian Libraries</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/fedlink" data-event-click-tracking="TopNav|FEDLINK(US)Texts"><!--?lit$0199747717$-->FEDLINK (US)</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/genealogy" data-event-click-tracking="TopNav|GenealogyTexts"><!--?lit$0199747717$-->Genealogy</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/lincolncollection" data-event-click-tracking="TopNav|LincolnCollectionTexts"><!--?lit$0199747717$-->Lincoln Collection</a></li>
      <!---->
        </ul>
      </div>
      <div class="links top style-scope media-subnav">
        <h4 class="style-scope media-subnav">Top</h4>
        <ul class="style-scope media-subnav">
          <!--?lit$0199747717$--><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/americana" data-event-click-tracking="TopNav|AmericanLibrariesTexts"><!--?lit$0199747717$-->American Libraries</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/toronto" data-event-click-tracking="TopNav|CanadianLibrariesTexts"><!--?lit$0199747717$-->Canadian Libraries</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/universallibrary" data-event-click-tracking="TopNav|UniversalLibraryTexts"><!--?lit$0199747717$-->Universal Library</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/gutenberg" data-event-click-tracking="TopNav|ProjectGutenbergTexts"><!--?lit$0199747717$-->Project Gutenberg</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/iacl" data-event-click-tracking="TopNav|Children'sLibraryTexts"><!--?lit$0199747717$-->Children's Library</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/biodiversity" data-event-click-tracking="TopNav|BiodiversityHeritageLibraryTexts"><!--?lit$0199747717$-->Biodiversity Heritage Library</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/booksbylanguage" data-event-click-tracking="TopNav|BooksByLanguageTexts"><!--?lit$0199747717$-->Books by Language</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/additional_collections" data-event-click-tracking="TopNav|AdditionalCollectionsTexts"><!--?lit$0199747717$-->Additional Collections</a></li>
      <!---->
        </ul>
      </div>
    </media-subnav>
              <media-subnav menu="video" class="hidden style-scope media-slider x-scope media-subnav-1"><!---->
      <h3 class="style-scope media-subnav"><!--?lit$0199747717$-->Video</h3>
      <div class="icon-links style-scope media-subnav">
        <!--?lit$0199747717$--><!---->
        <a class="style-scope media-subnav" href="https://archive.org/details/tv" data-event-click-tracking="TopNav|TVNewsVideo"><img class="style-scope media-subnav" src="https://archive.org/services/img/tv"><!--?lit$0199747717$-->TV News</a>
      <!----><!---->
        <a class="style-scope media-subnav" href="https://archive.org/details/911" data-event-click-tracking="TopNav|Understanding9/11Video"><img class="style-scope media-subnav" src="https://archive.org/services/img/911"><!--?lit$0199747717$-->Understanding 9/11</a>
      <!---->
      </div>
      <div class="links featured style-scope media-subnav">
        <h4 class="style-scope media-subnav">Featured</h4>
        <ul class="style-scope media-subnav">
          <!--?lit$0199747717$--><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/movies" data-event-click-tracking="TopNav|AllVideoVideo"><!--?lit$0199747717$-->All Video</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/search.php?query=mediatype:movies&amp;sort=-publicdate" data-event-click-tracking="TopNav|ThisJustInVideo"><!--?lit$0199747717$-->This Just In</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/prelinger" data-event-click-tracking="TopNav|PrelingerArchivesVideo"><!--?lit$0199747717$-->Prelinger Archives</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/democracy_now_vid" data-event-click-tracking="TopNav|DemocracyNow!Video"><!--?lit$0199747717$-->Democracy Now!</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/occupywallstreet" data-event-click-tracking="TopNav|OccupyWallStreetVideo"><!--?lit$0199747717$-->Occupy Wall Street</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/nsa" data-event-click-tracking="TopNav|TVNSAClipLibraryVideo"><!--?lit$0199747717$-->TV NSA Clip Library</a></li>
      <!---->
        </ul>
      </div>
      <div class="links top style-scope media-subnav">
        <h4 class="style-scope media-subnav">Top</h4>
        <ul class="style-scope media-subnav">
          <!--?lit$0199747717$--><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/animationandcartoons" data-event-click-tracking="TopNav|Animation&amp;CartoonsVideo"><!--?lit$0199747717$-->Animation &amp; Cartoons</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/artsandmusicvideos" data-event-click-tracking="TopNav|Arts&amp;MusicVideo"><!--?lit$0199747717$-->Arts &amp; Music</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/computersandtechvideos" data-event-click-tracking="TopNav|Computers&amp;TechnologyVideo"><!--?lit$0199747717$-->Computers &amp; Technology</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/culturalandacademicfilms" data-event-click-tracking="TopNav|Cultural&amp;AcademicFilmsVideo"><!--?lit$0199747717$-->Cultural &amp; Academic Films</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/ephemera" data-event-click-tracking="TopNav|EphemeralFilmsVideo"><!--?lit$0199747717$-->Ephemeral Films</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/moviesandfilms" data-event-click-tracking="TopNav|MoviesVideo"><!--?lit$0199747717$-->Movies</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/newsandpublicaffairs" data-event-click-tracking="TopNav|News&amp;PublicAffairsVideo"><!--?lit$0199747717$-->News &amp; Public Affairs</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/spiritualityandreligion" data-event-click-tracking="TopNav|Spirituality&amp;ReligionVideo"><!--?lit$0199747717$-->Spirituality &amp; Religion</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/sports" data-event-click-tracking="TopNav|SportsVideosVideo"><!--?lit$0199747717$-->Sports Videos</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/television" data-event-click-tracking="TopNav|TelevisionVideo"><!--?lit$0199747717$-->Television</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/gamevideos" data-event-click-tracking="TopNav|VideogameVideosVideo"><!--?lit$0199747717$-->Videogame Videos</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/vlogs" data-event-click-tracking="TopNav|VlogsVideo"><!--?lit$0199747717$-->Vlogs</a></li>
      <!----><!---->
        <li class="style-scope media-subnav"><a class="style-scope media-subnav" href="https://archive.org/details/youth_media" data-event-click-tracking="TopNav|YouthMediaVideo"><!--?lit$0199747717$-->Youth Media</a></li>
      <!---->
        </ul>
      </div>
    </media-subnav>
              <media-subnav menu="web" class="hidden style-scope media-slider x-scope media-subnav-1"><!---->
        <wayback-slider class="style-scope media-subnav x-scope wayback-slider-1"><!---->
      <div class="grid style-scope wayback-slider">
        <wayback-search class="style-scope wayback-slider x-scope wayback-search-1" waybackpagesarchived="760 billion"><!---->
      <form action="" method="post" class="style-scope wayback-search">
        <p class="style-scope wayback-search">
          Search the history of over <!--?lit$0199747717$-->760 billion
          <a data-event-click-tracking="TopNav|WaybackMachineStatsLink" href="https://blog.archive.org/2016/10/23/defining-web-pages-web-sites-and-web-captures/" class="style-scope wayback-search">web pages</a>
          on the Internet.
        </p>
        <fieldset class="style-scope wayback-search">
          <a data-event-click-tracking="TopNav|WaybackMachineLogoLink" class="style-scope wayback-search" href="https://archive.org/web/"><!--?lit$0199747717$-->
<svg height="55" viewBox="0 0 205 55" width="205" xmlns="http://www.w3.org/2000/svg" class="style-scope wayback-search"><g fill="none" class="style-scope wayback-search"><path d="m41.5442526 5.47625158v36.05869762s-.0825635.8039669.6808836.8039669c.7634442 0 .5779563-.8039669.5779563-.8039669v-36.05869762h5.4674088l.0001982 44.76728562c.0070059.1547261.1602174 4.7191467-6.1484876 4.7191467-6.1999371 0-6.1018528-4.697561-6.0880787-5.0160398l.0008628-1.7899844h5.5092566l.0006247 1.8215446c.0064131.111431.0698016.5292973.6598981.5292973.6808836 0 .5564693-.5981684.5564693-.5981684v-4.3726361s-.9489378 1.6294184-3.4044061 1.2370455c-2.4554712-.39237-2.8060919-1.8148639-2.9712219-2.4967105-.1651328-.6795829-.2680542-1.174855-.2680542-2.0625 0-.8599178-.0383122-34.61864321-.0406109-36.64339281l-.0001077-.09488771zm30.6351382 1.09344342c6.9117365 0 6.7805382 5.4445918 6.7805382 5.4445918v39.5210721h-5.7365952v-1.1522413s-2.086754 2.4978424-5.1507198.8955592c-3.0650979-1.6011513-2.5436924-5.1879097-2.5436924-5.1879097l.0000351-8.8028589c.0025794-.2398669.0684122-2.0251881 1.4352444-3.3674745 1.4669498-1.4405832 3.4553051-1.2178245 3.4553051-1.2178245h2.5425603v-20.4327721s-.0656021-.8966882-.7170766-.8966882c-.6526037 0-.6854033.9566179-.6854033.9566179v16.080489h-6.030665l-.0005626-16.2852138c-.0087587-.3366877-.0366527-5.555347 6.6510318-5.555347zm28.5031432-6.569695v31.41468l.711418.0192211c.593792 0 .593792-.4941403.593792-.4941403v-24.86759869h5.897202v21.90049339s.079171 1.404399-.791723 2.512539c-.870895 1.1081429-1.820962 1.1477197-1.820962 1.1477197s.989654.3946337 1.860548 1.4439758c.870894 1.0482132.791724 2.4921889.791724 2.4921889v14.4024477h-5.936789l-.000309-13.3243353c-.002165-.043998-.019484-.2297601-.158037-.3860879-.158343-.1775284-.277102-.1775284-.277102-.1775284h-.890123v13.8879516h-5.8180296v-49.9715266zm-14.2340414 8.02384579c5.9675612 0 6.2060902 4.59291681 6.2148001 5.06804611l.0002664 15.2041578h-5.556805v-15.4269123s-.0531603-.5009227-.6062332-.5009227c-.5519582 0-.5790885.42064-.5790885.42064v32.2254321s.079173.4477782.6582614.4477782c.4900102 0 .5467595-.3205986.552623-.4192443l.00045-8.2163433h5.4775891l.000339 7.8754281c.0126595.1654646.3391417 5.1294029-6.0570166 5.1294029-6.504565 0-6.1358477-5.1867779-6.1358477-5.1867779l-.0006428-31.5032204c-.0096883-.3249184-.0495263-5.11746431 6.0313048-5.11746431zm-73.7580006-5.70016816v42.49270187h.5575988s.2081099.2374581.5010473-.0554082.1956685-.3901121.1956685-.3901121v-42.04605262l5.7004019.00115789.0007682 41.01721663c.015678.1470376.248026 2.5994908-1.4903372 4.3374305-1.792686 1.7922473-4.4053704 1.6101973-4.4053704 1.6101973h-7.83579091s-2.61381542.18205-4.40650134-1.6101973c-1.79268592-1.7922503-1.48843833-4.344369-1.48843833-4.344369v-41.01027813l5.69927118-.00115789v42.04605262s-.09726862.0972458.19566849.3901121c.29293741.2928663.50217829.0554082.50217829.0554082h.55646783v-42.49270187zm44.8442957-.59701342s2.8128759.11081342 4.2515488 1.54913579 1.3572386 4.52302632 1.3572386 4.52302632v20.17269738s.1085791 1.6825658-.8324397 2.4967105c-.9410187.8141447-1.5743967.9950658-1.5743967.9950658s1.0495978.5789474 1.6105898 1.3026316c.5609919.7236842.7419571 1.3930921.7419571 2.3881579l.0007115 7.6426204c.0126941.1435677.1783816 2.2493941-.8874408 3.6468533-1.1038873 1.4473684-2.4430294 2.1348684-5.2298927 2.1348684h-6.4604558v-46.85176739zm14.5337626 35.74095399s-.1673942-.0203558-.3777654.1843136c-.2092421.2069274-.1459043.3301795-.1459043.3301795v8.4524058s.1673942.4523026.7329089.4523026c.5643854 0 .648084-.4523026.648084-.4523026v-8.9465489zm-44.3104484-34.72101373c5.9643432 0 6.16707 4.5349604 6.1720848 5.00409423l-.0000412 36.6461958h-5.2231058v-1.0674342s-1.8990049 2.3135258-4.6881295.8299731c-2.7891246-1.4824208-2.3140925-4.8057147-2.3140925-4.8057147l.0000416-8.1558683c.0025667-.229176.064831-1.8776574 1.3051717-3.1166422 1.3357486-1.3354261 3.1454001-1.1273669 3.1454001-1.1273669h2.3140896v-18.92660288s-.0588122-.831105-.6526037-.831105-.6232005.88538132-.6232005.88538132v14.89545606h-5.4888988l-.0005553-15.08585244c-.0080458-.3266358-.0237133-5.14451389 6.0538395-5.14451389zm28.932117 33.13115253-.4776089-.0000064v8.3947599h.705764c.5067025 0 .560992-.7236842.560992-.7236842v-6.712171c0-.9769737-.7962466-.9589047-.7962466-.9589047zm-29.0339092-4.5105709s-.1526883-.0203529-.3438338.1707431c-.1900134.191099-.1323304.305305-.1323304.305305v7.8282282s.1515591.419511.6661776.419511c.5146186 0 .5915302-.419511.5915302-.419511v-8.2861842zm29.0087131-25.54039926c-.6808813 0-.5443092.01385177-.4995274.01731471l.0109215.0007774v25.52796055s1.3391421.1085526 1.3391421-1.3569079v-23.35690792s.1085791-.83223684-.8505362-.83223684z" fill="#ab2e33" class="style-scope wayback-search"></path><path d="m164.347608 2.25946661v7.4442539c.21729-.35229187 1.198489-1.67028746 3.735798-1.67028746 3.534354 0 3.281982 3.91684325 3.281982 3.91684325v39.9180342h-3.988173l-.000094-38.4191634c-.002249-.1296195-.058484-1.7498629-1.464346-1.7498629-1.087582 0-1.450864.5267465-1.565167 1.1683005v39.1020256h-4.190748v-49.71014369zm23.367699 5.4959617c3.58528 0 3.32838 3.94160559 3.32838 3.94160559v40.1712766h-4.045888l-.000761-38.6884533c-.008742-.2394578-.118025-1.7360686-1.484053-1.7360686-1.103423 0-1.471231.5301234-1.587799 1.1750516v39.3496435h-4.250729v-43.92154285h4.250729v1.38890288c.220685-.35566881 1.216596-1.68041542 3.790121-1.68041542zm11.392998-.52112204c6.124855 0 5.736674 5.39691513 5.736674 5.39691513v24.2844279h-7.17056l.000077 9.2728055c.001997 1.1852594.055922 2.3291557 1.511897 2.3291557 1.511974 0 1.588933-1.3483852 1.588933-1.3483852v-6.1679026h4.108134l-.00035 5.6892637c-.01289 1.7887967-.410235 4.8333128-5.736327 4.8333128-5.22451 0-5.490421-3.8596058-5.502952-4.1455025l-.000589-34.6706379s-.65866-5.47345253 5.465063-5.47345253zm-72.839588-6.23430627c4.55044 0 4.748706 4.49835393 4.756437 5.01739476l.000233 44.68489444h-4.246265l-.000015-45.39546442c-.001065-.11122824-.038841-1.27912478-1.155468-1.27912478-.689016 0-1.239407-.0003988-1.575847-.00072723l-.366181-.00042531v46.67574174h-4.288077v-46.69262361h-1.942025c-1.0608 0-1.147931 1.05402663-1.154906 1.2547936l-.00058 45.43783001h-4.296023l.000269-45.03840883c.008379-.46638804.223774-4.66388037 5.263374-4.66388037zm12.746531 4.73059864c5.939252 0 5.529572 4.80151166 5.529572 4.80151166v39.1864407h-3.791254v-1.7040541s-.748065 1.776088-2.920962 1.8481219-4.418224-.1913422-4.418224-3.9371049l.000537-10.0356421c.009666-.3007246.1911-3.4583326 3.548528-3.4583326h3.5253l-.000596-22.2422593c-.009853-.1121552-.157986-1.45801702-1.592862-1.45801702-1.497271 0-1.484813 1.94491522-1.484813 1.94491522v17.4051907h-3.99949l-.000952-17.7112484c-.014831-.304231-.125641-4.63952176 5.605216-4.63952176zm12.457944.74622797c5.704988 0 5.452616 4.56852529 5.452616 4.56852529v16.2188817h-3.836522v-16.7703934s-.202578-1.40578478-1.51537-1.40578478c-1.193447 0-1.427274 1.16180558-1.459925 1.37304298l-.004518.0327418v32.5368129c0 .9038006.353096 1.9584201 1.565167 1.9584201 1.212068 0 1.363719-1.3551363 1.363719-1.3551363v-9.239474h3.786725l.000848 7.3579585c.013087 2.5821014.10472 5.9480539-5.301813 5.9480539-5.604264 0-5.201371-4.7699955-5.201371-4.7699955l-.000475-31.3866454c-.017056-.171763-.453979-5.06700779 5.150919-5.06700779zm26.215101 3.66584829v37.0051649h-3.533221v-37.0051649zm-37.199548 25.1702202h-1.714552s-.530775.0720339-.917823.4558391c-.385924.3838082-.409681.9848389-.409681.9848389v8.5236357s.096195 1.56111 1.568559 1.56111c1.473497 0 1.473497-1.6095052 1.473497-1.6095052zm58.697648-25.2264959c-1.433886 0-1.511974 1.7344408-1.511974 1.7344408v21.9725922h3.100907v-22.1256642s-.155047-1.5813688-1.588933-1.5813688zm-23.264712-5.31700073c1.129455 0 2.045015.68657238 2.045015 1.53184407 0 .84639831-.91556 1.53184695-2.045015 1.53184695s-2.045012-.68544864-2.045012-1.53184695c0-.84527169.915557-1.53184407 2.045012-1.53184407z" fill="#211e1e" class="style-scope wayback-search"></path></g></svg>
</a>
          <label for="url" class="style-scope wayback-search">Search the Wayback Machine</label>
          <div class="search-field style-scope wayback-search">
            <input type="text" name="url" id="url" placeholder="enter URL or keywords" class="style-scope wayback-search">
            <!--?lit$0199747717$-->
  <svg height="40" viewBox="0 0 40 40" width="40" xmlns="http://www.w3.org/2000/svg" aria-labelledby="searchTitleID searchDescID" class="style-scope wayback-search">
    <title id="searchTitleID" class="style-scope wayback-search">Search icon</title>
    <desc id="searchDescID" class="style-scope wayback-search">An illustration of a magnifying glass.</desc>
    <path class="fill-color style-scope wayback-search" d="m32.4526364 29.8875889-8.1719472-7.9751279c1.1046135-1.4876138 1.7652549-3.3102407 1.7652549-5.2846451 0-.101185-.0142895-.1981539-.030573-.2944743.0166158-.0976175.0309053-.196208.0309053-.2990145 0-4.9814145-4.152935-9.0343271-9.2572866-9.0343271-.0907218 0-.1781206.01394537-.2655193.02594487-.0880633-.0119995-.1747974-.02594487-.2655193-.02594487-5.1046839 0-9.25761889 4.0529126-9.25761889 9.0343271 0 .1011849.01395722.1981539.03057294.2947985-.01694804.0976176-.03090525.1958838-.03090525.2986903 0 4.9814145 4.1526027 9.0346514 9.2572866 9.0346514.0907218 0 .1777882-.0139454.2658516-.0262692.0873987.0123238.1741328.0262692.265187.0262692 1.7306942 0 3.3467399-.4747911 4.7338208-1.2852439l8.2882574 8.0886366c.3652137.3564177.843082.53414 1.3212826.53414.4782007 0 .9567336-.1780467 1.3212827-.53414.7294304-.7118622.7294304-1.8660845-.0003323-2.5782711zm-15.9526364-7.8875889c-.0832667-.0118703-.1652765-.0253024-.2513711-.0253024-2.8781993 0-5.2197212-2.3278242-5.2197212-5.1891862 0-.0974612-.013197-.1908615-.0289077-.2836371.0160249-.0940251.0292219-.1889874.0292219-.2880105 0-2.861362 2.3418361-5.1891861 5.2200354-5.1891861.0854662 0 .1677902-.0131198.2510569-.0246777.0826383.0115579.1649623.0246777.2510569.0246777 2.8781993 0 5.2197212 2.3278241 5.2197212 5.1891861 0 .0974612.0135112.1908616.0289077.2839496-.0157107.0940251-.0295361.1886749-.0295361.287698 0 2.861362-2.3415219 5.1891862-5.2197212 5.1891862-.0860946 0-.1684187.0134321-.2507427.0253024z" fill-rule="evenodd"></path>
  </svg>

          </div>
        </fieldset>
      </form>
    </wayback-search>
        <div class="link-lists style-scope wayback-slider">
          <div class="style-scope wayback-slider">
            <h4 class="style-scope wayback-slider">Mobile Apps</h4>
            <ul class="mobile-apps style-scope wayback-slider">
              <!--?lit$0199747717$--><!----><li class="style-scope wayback-slider">
      <a class="style-scope wayback-slider" href="https://apps.apple.com/us/app/wayback-machine/id1201888313" data-event-click-tracking="TopNav|WaybackWaybackMachine(iOS)" target="_blank" rel="noreferrer noopener"><!--?lit$0199747717$-->Wayback Machine (iOS)</a>
    </li><!----><!----><li class="style-scope wayback-slider">
      <a class="style-scope wayback-slider" href="https://play.google.com/store/apps/details?id=com.archive.waybackmachine&amp;hl=en_US" data-event-click-tracking="TopNav|WaybackWaybackMachine(Android)" target="_blank" rel="noreferrer noopener"><!--?lit$0199747717$-->Wayback Machine (Android)</a>
    </li><!---->
            </ul>
            <h4 class="style-scope wayback-slider">Browser Extensions</h4>
            <ul class="browser-extensions style-scope wayback-slider">
              <!--?lit$0199747717$--><!----><li class="style-scope wayback-slider">
      <a class="style-scope wayback-slider" href="https://chrome.google.com/webstore/detail/wayback-machine/fpnmgdkabkmnadcjpehmlllkndpkmiak" data-event-click-tracking="TopNav|WaybackChrome" target="_blank" rel="noreferrer noopener"><!--?lit$0199747717$-->Chrome</a>
    </li><!----><!----><li class="style-scope wayback-slider">
      <a class="style-scope wayback-slider" href="https://addons.mozilla.org/en-US/firefox/addon/wayback-machine_new/" data-event-click-tracking="TopNav|WaybackFirefox" target="_blank" rel="noreferrer noopener"><!--?lit$0199747717$-->Firefox</a>
    </li><!----><!----><li class="style-scope wayback-slider">
      <a class="style-scope wayback-slider" href="https://apps.apple.com/us/app/wayback-machine/id1472432422?mt=12" data-event-click-tracking="TopNav|WaybackSafari" target="_blank" rel="noreferrer noopener"><!--?lit$0199747717$-->Safari</a>
    </li><!----><!----><li class="style-scope wayback-slider">
      <a class="style-scope wayback-slider" href="https://microsoftedge.microsoft.com/addons/detail/wayback-machine/kjmickeoogghaimmomagaghnogelpcpn?hl=en-US" data-event-click-tracking="TopNav|WaybackEdge" target="_blank" rel="noreferrer noopener"><!--?lit$0199747717$-->Edge</a>
    </li><!---->
            </ul>
          </div>
          <div class="style-scope wayback-slider">
            <h4 class="style-scope wayback-slider">Archive-It Subscription</h4>
            <ul class="archive-it style-scope wayback-slider">
              <!--?lit$0199747717$--><!----><li class="style-scope wayback-slider">
      <a class="style-scope wayback-slider" href="https://www.archive-it.org/explore" data-event-click-tracking="TopNav|ArchiveItExploreTheCollections" target="_blank" rel="noreferrer noopener"><!--?lit$0199747717$-->Explore the Collections</a>
    </li><!----><!----><li class="style-scope wayback-slider">
      <a class="style-scope wayback-slider" href="https://www.archive-it.org/blog/learn-more/" data-event-click-tracking="TopNav|ArchiveItLearnMore" target="_blank" rel="noreferrer noopener"><!--?lit$0199747717$-->Learn More</a>
    </li><!----><!----><li class="style-scope wayback-slider">
      <a class="style-scope wayback-slider" href="https://www.archive-it.org/contact-us" data-event-click-tracking="TopNav|ArchiveItBuildCollections" target="_blank" rel="noreferrer noopener"><!--?lit$0199747717$-->Build Collections</a>
    </li><!---->
            </ul>
          </div>
        </div>
        <save-page-form class="style-scope wayback-slider x-scope save-page-form-1"><!---->
      <form action="//web.archive.org/save" method="post" class="style-scope save-page-form" data-event-submit-tracking="TopNav|SavePageSubmit">
        <h3 class="style-scope save-page-form">Save Page Now</h3>
        <p class="style-scope save-page-form">Capture a web page as it appears now for use as a trusted citation in the future.</p>
        <div class="style-scope save-page-form">
          <input type="text" name="url_preload" placeholder="https://" class="style-scope save-page-form">
          <input type="submit" value="Save" class="style-scope save-page-form">
        </div>
        <p class="error style-scope save-page-form">Please enter a valid web address</p>
      </form>
    </save-page-form>
      </div>
    </wayback-slider></media-subnav>
              <media-subnav menu="more" class="hidden style-scope media-slider x-scope media-subnav-1"><!---->
        <more-slider class="style-scope media-subnav x-scope more-slider-1"><!---->
      <ul class="style-scope more-slider">
        <!--?lit$0199747717$--><!----><li class="style-scope more-slider"><a class="style-scope more-slider" href="https://archive.org/about/" data-event-click-tracking="TopNav|NavMoreAbout"><!--?lit$0199747717$-->About</a></li><!----><!----><li class="style-scope more-slider"><a class="style-scope more-slider" href="https://blog.archive.org" data-event-click-tracking="TopNav|NavMoreBlog"><!--?lit$0199747717$-->Blog</a></li><!----><!----><li class="style-scope more-slider"><a class="style-scope more-slider" href="https://archive.org/projects/" data-event-click-tracking="TopNav|NavMoreProjects"><!--?lit$0199747717$-->Projects</a></li><!----><!----><li class="style-scope more-slider"><a class="style-scope more-slider" href="https://archive.org/about/faqs.php" data-event-click-tracking="TopNav|NavMoreHelp"><!--?lit$0199747717$-->Help</a></li><!----><!----><li class="style-scope more-slider"><a class="style-scope more-slider" href="https://archive.org/donate?origin=iawww-TopNavDonateButton" data-event-click-tracking="TopNav|NavMoreDonate"><!--?lit$0199747717$-->Donate</a></li><!----><!----><li class="style-scope more-slider"><a class="style-scope more-slider" href="https://archive.org/about/contact.php" data-event-click-tracking="TopNav|NavMoreContact"><!--?lit$0199747717$-->Contact</a></li><!----><!----><li class="style-scope more-slider"><a class="style-scope more-slider" href="https://archive.org/about/jobs.php" data-event-click-tracking="TopNav|NavMoreJobs"><!--?lit$0199747717$-->Jobs</a></li><!----><!----><li class="style-scope more-slider"><a class="style-scope more-slider" href="https://archive.org/about/volunteerpositions.php" data-event-click-tracking="TopNav|NavMoreVolunteer"><!--?lit$0199747717$-->Volunteer</a></li><!----><!----><li class="style-scope more-slider"><a class="style-scope more-slider" href="https://archive.org/about/bios.php" data-event-click-tracking="TopNav|NavMorePeople"><!--?lit$0199747717$-->People</a></li><!---->
      </ul>
    </more-slider></media-subnav>
            </div>
          </div>
        </div>
      </div>
    </media-slider>
      </div>
      <!--?lit$0199747717$-->
      <user-menu class="style-scope ia-topnav x-scope user-menu-1" tabindex="-1"><!---->
      <div class="nav-container style-scope user-menu">
        <nav class="initial style-scope user-menu" aria-hidden="true" aria-expanded="false">
          <h3 class="style-scope user-menu"><!--?lit$0199747717$--></h3>
          <ul class="style-scope user-menu">
            <!--?lit$0199747717$--><!---->
        <li class="style-scope user-menu"><!--?lit$0199747717$--><a class="style-scope user-menu" href="https://archive.org/create" data-event-click-tracking="TopNav|NavUserUpload"><!--?lit$0199747717$-->Upload files</a></li>
      <!----><!---->
        <li class="style-scope user-menu"><!--?lit$0199747717$--><a class="style-scope user-menu" href="https://archive.org/details/@m4rc3l_cy8er_m30n_" data-event-click-tracking="TopNav|NavUserLibrary"><!--?lit$0199747717$-->My uploads</a></li>
      <!----><!---->
        <li class="style-scope user-menu"><!--?lit$0199747717$--><a class="style-scope user-menu" href="https://archive.org/details/@m4rc3l_cy8er_m30n_?tab=loans" data-event-click-tracking="TopNav|NavUserLoans"><!--?lit$0199747717$-->My loans</a></li>
      <!----><!---->
        <li class="style-scope user-menu"><!--?lit$0199747717$--><a class="style-scope user-menu" href="https://archive.org/details/fav-m4rc3l_cy8er_m30n_" data-event-click-tracking="TopNav|NavUserFavorites"><!--?lit$0199747717$-->My favorites</a></li>
      <!----><!---->
        <li class="style-scope user-menu"><!--?lit$0199747717$--><a class="style-scope user-menu" href="https://archive.org/details/@m4rc3l_cy8er_m30n_/web-archive" data-event-click-tracking="TopNav|NavUserWebArchive"><!--?lit$0199747717$-->My web archives</a></li>
      <!----><!---->
        <li class="style-scope user-menu"><!--?lit$0199747717$--><a class="style-scope user-menu" href="https://archive.org/account/index.php?settings=1" data-event-click-tracking="TopNav|NavUserSettings"><!--?lit$0199747717$-->Account settings</a></li>
      <!----><!---->
        <li class="style-scope user-menu"><!--?lit$0199747717$--><a class="style-scope user-menu" href="https://help.archive.org" data-event-click-tracking="TopNav|NavUserHelp"><!--?lit$0199747717$-->Get help</a></li>
      <!----><!---->
        <li class="style-scope user-menu"><!--?lit$0199747717$--><a class="style-scope user-menu" href="https://archive.org/account/logout" data-event-click-tracking="TopNav|NavUserLogOut"><!--?lit$0199747717$-->Log out</a></li>
      <!---->
          </ul>
        </nav>
      </div>
    </user-menu>
    
      <search-menu class="style-scope ia-topnav x-scope search-menu-1" tabindex="-1"><!---->
      <div class="menu-wrapper style-scope search-menu">
        <div class="search-menu-inner tx-slide closed style-scope search-menu" aria-hidden="true" aria-expanded="false">
          <!--?lit$0199747717$--><!---->
        <label class="style-scope search-menu">
          <input form="nav-search" type="radio" name="sin" class="style-scope search-menu" value="" checked="">
          Search <!--?lit$0199747717$-->metadata
        </label>
      <!----><!---->
        <label class="style-scope search-menu">
          <input form="nav-search" type="radio" name="sin" class="style-scope search-menu" value="TXT">
          Search <!--?lit$0199747717$-->text contents
        </label>
      <!----><!---->
        <label class="style-scope search-menu">
          <input form="nav-search" type="radio" name="sin" class="style-scope search-menu" value="TV">
          Search <!--?lit$0199747717$-->TV news captions
        </label>
      <!----><!---->
        <label class="style-scope search-menu">
          <input form="nav-search" type="radio" name="sin" class="style-scope search-menu" value="RADIO">
          Search <!--?lit$0199747717$-->radio transcripts
        </label>
      <!----><!---->
        <label class="style-scope search-menu">
          <input form="nav-search" type="radio" name="sin" class="style-scope search-menu" value="WEB">
          Search <!--?lit$0199747717$-->archived web sites
        </label>
      <!---->
          <a class="advanced-search style-scope search-menu" href="https://archive.org/advancedsearch.php" data-event-click-tracking="TopNav|NavAdvancedSearch">Advanced Search</a>
        </div>
      </div>
    </search-menu>
      <desktop-subnav class="style-scope ia-topnav x-scope desktop-subnav-1"><!---->
      <ul class="style-scope desktop-subnav">
        <!--?lit$0199747717$--><!---->
        <li class="style-scope desktop-subnav">
          <a class="about style-scope desktop-subnav" href="https://archive.org/about/"><!--?lit$0199747717$-->About<!--?lit$0199747717$--><!--?--></a>
        </li>
      <!----><!---->
        <li class="style-scope desktop-subnav">
          <a class="blog style-scope desktop-subnav" href="https://blog.archive.org"><!--?lit$0199747717$-->Blog<!--?lit$0199747717$--><!--?--></a>
        </li>
      <!----><!---->
        <li class="style-scope desktop-subnav">
          <a class="projects style-scope desktop-subnav" href="https://archive.org/projects/"><!--?lit$0199747717$-->Projects<!--?lit$0199747717$--><!--?--></a>
        </li>
      <!----><!---->
        <li class="style-scope desktop-subnav">
          <a class="help style-scope desktop-subnav" href="https://archive.org/about/faqs.php"><!--?lit$0199747717$-->Help<!--?lit$0199747717$--><!--?--></a>
        </li>
      <!----><!---->
        <li class="style-scope desktop-subnav">
          <a class="donate style-scope desktop-subnav" href="https://archive.org/donate?origin=iawww-TopNavDonateButton"><!--?lit$0199747717$-->Donate<!--?lit$0199747717$-->
  <svg width="40" height="40" viewBox="0 0 40 40" xmlns="http://www.w3.org/2000/svg" aria-labelledby="donateTitleID donateDescID" class="style-scope desktop-subnav">
    <title id="donateTitleID" class="style-scope desktop-subnav">Donate icon</title>
    <desc id="donateDescID" class="style-scope desktop-subnav">An illustration of a heart shape</desc>
    <path class="fill-color style-scope desktop-subnav" d="m30.0120362 11.0857287c-1.2990268-1.12627221-2.8599641-1.65258786-4.682812-1.57894699-.8253588.02475323-1.7674318.3849128-2.8262192 1.08047869-1.0587873.6955659-1.89622 1.5724492-2.512298 2.63065-.591311-1.0588196-1.4194561-1.9357029-2.4844351-2.63065-1.0649791-.69494706-2.0039563-1.05510663-2.8169316-1.08047869-1.2067699-.04950647-2.318187.17203498-3.3342513.66462439-1.0160643.4925893-1.82594378 1.2002224-2.42963831 2.1228992-.60369453.9226769-.91173353 1.9629315-.92411701 3.1207641-.03715043 1.9202322.70183359 3.7665141 2.21695202 5.5388457 1.2067699 1.4035084 2.912594 3.1606786 5.1174721 5.2715107 2.2048782 2.1108321 3.7565279 3.5356901 4.6549492 4.2745742.8253588-.6646243 2.355647-2.0647292 4.5908647-4.2003145s3.9747867-3.9171994 5.218707-5.3448422c1.502735-1.7723316 2.2355273-3.6186135 2.1983769-5.5388457-.0256957-1.7608832-.6875926-3.2039968-1.9866194-4.3302689z"></path>
  </svg>
</a>
        </li>
      <!----><!---->
        <li class="style-scope desktop-subnav">
          <a class="contact style-scope desktop-subnav" href="https://archive.org/about/contact.php"><!--?lit$0199747717$-->Contact<!--?lit$0199747717$--><!--?--></a>
        </li>
      <!----><!---->
        <li class="style-scope desktop-subnav">
          <a class="jobs style-scope desktop-subnav" href="https://archive.org/about/jobs.php"><!--?lit$0199747717$-->Jobs<!--?lit$0199747717$--><!--?--></a>
        </li>
      <!----><!---->
        <li class="style-scope desktop-subnav">
          <a class="volunteer style-scope desktop-subnav" href="https://archive.org/about/volunteerpositions.php"><!--?lit$0199747717$-->Volunteer<!--?lit$0199747717$--><!--?--></a>
        </li>
      <!----><!---->
        <li class="style-scope desktop-subnav">
          <a class="people style-scope desktop-subnav" href="https://archive.org/about/bios.php"><!--?lit$0199747717$-->People<!--?lit$0199747717$--><!--?--></a>
        </li>
      <!---->
      </ul>
    </desktop-subnav>
      <div id="close-layer" class="style-scope ia-topnav"></div>
    </ia-topnav>
      


                  </div>
            <input class="js-tvsearch" type="hidden" value='{"ands":[],"minday":"06/04/2009","maxday":"11/22/2022"}'/>
    
        
    <script>update_aoheader();</script>
    <div style="display: block; float: right; width: 28px; margin-top: 4px;">
        <a href="#" onclick="window.open('https://www.facebook.com/sharer/sharer.php?u=' + encodeURIComponent(window.location.href), '', 'height=400,width=600'); return false;"
            class="social_button" title="Share on Facebook"><span class="iconochive-facebook" style="color:#3b5998;font-size:160%;"></span></a>
        <a href="#" onclick="window.open('https://twitter.com/intent/tweet?text=' + encodeURIComponent(window.location.href) + '&via=internetarchive', '', 'height=400,width=600'); return false;"
            class="social_button" title="Share on Twitter"><span class="iconochive-twitter" style="color:#1dcaff;font-size:160%;"></span></a>
    </div>
    <script>
      var config = {"api_url_anchor": "/__wb/search/anchor?q={{query}}", "api_url_calendar_captures": "/__wb/calendarcaptures?url={{url}}\u0026selected_year={{year}}", "api_url_host": "/__wb/search/host?q={{query}}", "api_url_metadata": "/__wb/search/metadata?q={{query}}", "api_url_sitemap": "/web/timemap/json?url={{url}}/\u0026fl=timestamp:4,original,urlkey\u0026matchType=prefix\u0026filter=statuscode:200\u0026filter=mimetype:text/html\u0026collapse=urlkey\u0026collapse=timestamp:4\u0026limit=100000", "api_url_sparkline": "/__wb/sparkline?output=json\u0026url={{url}}\u0026collection=web", "bundling": {"public_path": "/static/bower_components/wayback-search-js/dist"}, "diff": {"cdxServer": "/web/timemap", "diffgraphPrefix": "/web/diffgraph/", "limit": 3000, "maxSunburstLevelLength": "70", "snapshotsPrefix": "/web/", "sparklineURL": "/__wb/sparkline", "urlPrefix": "/web/diff/", "waybackDiscoverDiff": "https://gext-api.archive.org/services/simhash", "webMonitoringProcessingURL": "https://gext-api.archive.org/services/diff"}, "features": {"beta_promo": false, "changes_calendar": true, "landing": "carousel", "landing_layout_with_trend": false, "search": "v1"}, "num_of_explored_web_pages": "766 billion", "search_v2": {"search_collections": {"defaultIntro": "Welcome to the Wayback Machine collection search service. This service is based on indexes of specific data from selected Collections.\n", "defaultMore": "Collections are groupings of Web archives related to a specific archiving method or source of URLs. For example the \u003ca href=\"https://archive.org/details/mediacloud\"\u003emediacloud\u003c/a\u003e Collection contains URLs sourced from \u003ca href=\"https://mediacloud.org\"\u003emediacloud.org\u003c/a\u003e.\u003cbr /\u003e\u003cbr /\u003e The specific Web page data we are indexing includes: anchor text, all URL parts (file names, hosts, domains), MIME Types, HTTP Status codes \u0026 Web Page Titles. In this way you can search for PDF files, from .mil websites that have the word \u201cnuclear\u201d in their file name.\n", "options": {"EndOfTerm2008WebCrawls": {"intro": "Search #count web pages using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, language, HTTP Status codes and the full text of the articles. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages", "type": "text"}]}, "title": "End Of Term (US Gov) 2008", "url": "https://archive.org/details/cdlweb"}, "EndOfTerm2012WebCrawls": {"intro": "Search #count web pages using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, language, HTTP Status codes and the full text of the articles. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "index_mapping": {"text": "search2:eot2012-search-text-202210"}, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages", "type": "text"}]}, "title": "End Of Term (US Gov) 2012", "url": "https://archive.org/details/EndOfTerm2012WebCrawls"}, "EndOfTerm2016WebCrawls": {"intro": "Search #count web pages using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, language, HTTP Status codes and the full text of the articles. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages", "type": "text"}]}, "title": "End Of Term (US Gov) 2016", "url": "https://archive.org/details/EndOfTerm2016WebCrawls"}, "EndOfTerm2020WebCrawls": {"intro": "Search #count web pages using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, language, HTTP Status codes and the full text of the articles. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages", "type": "text"}]}, "title": "End Of Term (US Gov) 2020", "url": "https://archive.org/details/EndOfTerm2020WebCrawls"}, "badoo.com": {"intro": "Search #count badoo.com articles using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, HTTP Status codes and the full text of the articles. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages", "type": "text"}]}, "title": "badoo.com"}, "gov": {"intro": "Search #count .gov web pages using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, HTTP Status codes, Web Page Titles and all the text from the first page of PDF documents. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages", "type": "text"}]}, "title": ".gov web pages"}, "gov-pdf": {"intro": "Search #count .gov PDF files using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, HTTP Status codes, Web Page Titles and all the text from the first page of PDF documents. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "pdf", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "pdf", "items": ["application/pdf"], "title": "PDFs", "type": "application/pdf"}]}, "title": ".gov PDFs"}, "hk.appledaily.com": {"intro": "Search #count hk.appledaily.com articles using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, HTTP Status codes and the full text of the articles. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages", "type": "text"}]}, "title": "hk.appledaily.com"}, "mediacloud": {"intro": "Search #count news articles using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, language, HTTP Status codes and the full text of the articles. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages", "type": "text"}]}, "title": "Media Cloud", "url": "https://archive.org/details/mediacloud"}, "pdf": {"intro": "Search #count PDF files using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, language, HTTP Status codes, Web Page Titles and all the text from the first page of PDF documents. Index last updated on 2021/10/12. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": "", "search_types": {"default": "pdf", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "pdf", "items": ["application/pdf"], "title": "PDFs", "type": "application/pdf"}]}, "title": "PDFs"}, "poetry.com": {"intro": "Search #count poetry.com articles using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, HTTP Status codes and the full text of the articles. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages", "type": "text"}]}, "title": "poetry.com"}, "presentations": {"intro": "Search #count Presentations (MS Powerpoint, Apple Keynote, OpenOffice Impress) using an index built with the full text, anchor text, all URL parts (file names, hosts, domains), MIME Types, language and HTTP status codes. Index last updated on 12/10/2021. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "application", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "application", "title": "Presentations", "type": "application"}]}, "title": "Presentations"}, "russian-independent-media": {"intro": "Search #count Russian independent media news articles using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, HTTP Status codes and the full text of the articles. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages"}]}, "title": "Russian Independent Media"}, "scmp.com": {"intro": "Search #count scmp.com news articles using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, HTTP Status codes and the full text of the articles. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages", "type": "text"}]}, "title": "South China Morning Post (scmp.com)"}, "thestandnews.com": {"intro": "Search #count thestandnews.com articles using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, HTTP Status codes and the full text of the articles. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages", "type": "text"}]}, "title": "thestandnews.com"}, "zaman.com.tr": {"intro": "Search #count zaman.com.tr news articles using an index built from anchor text, all URL parts (file names, hosts, domains), MIME Types, HTTP Status codes and the full text of the articles. \u003cbr /\u003e\u003cbr /\u003e Please send your questions, suggestions, bug reports, etc. to \u003ca href=\"mailto:info@archive.org\"\u003einfo@archive.org\u003c/a\u003e.\n", "more": " ", "search_types": {"default": "text", "horizontal_line_room": 1, "options": [{"icon": "iconochive-texts", "id": "text", "title": "Webpages", "type": "text"}]}, "title": "zaman.com.tr"}}}}, "url_playback": "/web/{{date}}/{{url}}", "url_playback_screenshot": "/web/", "url_save_page_now": "/save/{{query}}", "url_search_page": "/web/*/{{url}}*", "url_thumb": "https://web.archive.org/thumb/{{item}}?generate=1"};
      $(document).ready(function(){
	var e = $('#react-wayback-search'), c = e.attr('component');
	ReactDOM.render(
	  React.createElement(window[c], { config: config }),
	  e.get(0)
	);
      });
    </script>
    <div id="react-wayback-search" component="WaybackSearchComponent"></div>
    <noscript>
      <div class="no-script-message">
        The Wayback Machine requires your browser to support JavaScript, please email <a href="mailto:info@archive.org">info@archive.org</a><br/>if you have any questions about this.
      </div>
    </noscript>
    <footer>
      <div id="footerHome">
        <p>
          The Wayback Machine is an initiative of the
          <a href="//archive.org/">Internet Archive</a>,
          a 501(c)(3) non-profit, building a digital library of
          Internet sites and other cultural artifacts in digital form.
          <br/>Other <a href="//archive.org/projects/">projects</a> include
          <a href="https://openlibrary.org/">Open Library</a> &amp;
          <a href="https://archive-it.org">archive-it.org</a>.
        </p>
        <p>
          Your use of the Wayback Machine is subject to the Internet Archive's
          <a href="//archive.org/about/terms.php">Terms of Use</a>.
        </p>
      </div>
    </footer>
  </body>
</html>