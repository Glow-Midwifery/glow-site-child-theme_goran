=== Goran ===

Contributors: automattic
Tags: gray, red, white, light, two-columns, left-sidebar, right-sidebar, responsive-layout, custom-background, custom-colors, custom-header, custom-menu, editor-style, featured-images, flexible-header, full-width-template, post-formats, rtl-language-support, sticky-post, theme-options, translation-ready

Requires at least: 3.5
Tested up to: 3.9
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

A modern business theme.

== Description ==

Goran is a functional and responsive multi-purpose theme that is the perfect solution for your business’s online presence.

* Responsive layout.
* Front Page Template.
* Full Width Page Template
* Grid Page Template
* Alternate Sidebar Page Template
* Jetpack.me compatibility for Infinite Scroll, Testimonial Custom Post Type, Responsive Videos, Site Logo.
* The GPL v2.0 or later license. :) Use it to make something cool.

== Installation ==

1. In your admin panel, go to Appearance > Themes and click the Add New button.
2. Click Upload and Choose File, then select the theme's .zip file. Click Install Now.
3. Click Activate to use your new theme right away.

== Frequently Asked Questions ==

= I don't see the Testimonial menu in my admin, where can I find it? =

To make the Testimonial menu appear in your admin, you need to install the [Jetpack plugin](http://jetpack.me) because it has the required code needed to make [custom post types](http://codex.wordpress.org/Post_Types#Custom_Post_Types) work for the Goran theme.

Once Jetpack is active, the Testimonial menu will appear in your admin, in addition to standard blog posts. No special Jetpack module is needed and a WordPress.com connection is not required for the Testimonial feature to function. Testimonial will work on a localhost installation of WordPress if you add this line to `wp-config.php`:

`define( 'JETPACK_DEV_DEBUG', TRUE );`

= How to setup the front page like the demo site? =

The demo site URL: http://gorandemo.wordpress.com/?demo

When you first activate Goran, you’ll see your posts in a traditional blog format. If you’d like to use this template as the front page of your site, follow these instructions:

1. Create or edit a page, and then assign it to the Front Page Template from the Page Attributes module.
2. Add an introduction to your site. For best results, we recommend a few paragraphs.
3. Set your front page image — behind the text — as a Featured Image.
4. Go to Settings → Reading and set “Front page displays” to “A static page.”
5. Select the page to which you just assigned the Front Page Template as “Front page,” and then choose another page as “Posts page” to display your blog posts.

= What are the theme options? =

Goran comes packed with multiple Theme Options available via the Customizer:

* Sidebar Position: choose to display the sidebar on the left or right.
* Top Area Content: display some content above the header — perfect for a phone number or an email address.
* Thumbnail Aspect Ratio: choose the aspect ratio of the thumbnails used for the Grid Page Template or for the Featured Page Areas.
* Front Page: show title: display the Front Page Template’s title.
* Front Page: Featured Page One: select a page to feature on the Front Page Template.
* Front Page: Featured Page Two: select a page to feature on the Front Page Template.
* Front Page: Featured Page Three: select a page to feature on the Front Page Template.

= How to add the social links? =

Goran allows you to display links to your social media profiles — like Twitter and Facebook — as icons using a Custom Menu.

- Set up the menu -

To automatically apply icons to your links, simply create a new Custom Menu and give it a name that starts with “Social” (e.g. “Social Menu,” “Social Links”). This specific name is important – it must start with the word “Social” to work correctly.

Next, add each of your social links to this menu. Each menu item should be added as a custom link.

Once your menu is created and your social links are added, you can display it in your Footer Menu. You can also create a new Custom Menu Widget to display it in any of Goran‘s widget areas as seen on the demo site.

Goran will automatically display an icon for each service if it’s available.

- Available icons -

Linking to any of the following sites will automatically display its icon in your menu:

* Codepen
* Digg
* Dribbble
* Dropbox
* Facebook
* Flickr
* GitHub
* Google+
* Instagram
* LinkedIn
* Email (mailto: links)
* Pinterest
* Pocket
* PollDaddy
* Reddit
* RSS Feed (urls with /feed/)
* StumbleUpon
* Tumblr
* Twitter
* Vimeo
* WordPress
* YouTube

= Where are located the widget areas? =

Goran offers seven widget areas, which can be configured in Appearance → Widgets:

* An optional sidebar widget area, which appears on the right or left.
* Three optional footer widget areas.
* Three optional widget areas on the Front Page Template.

= Custom Header Image, how does it work? =

Pages without a Featured Image will display a Custom Header (if you’ve uploaded one). To set the Custom Header simply go to Appearance → Header and select your header image.

= What are the extra CSS classes? =

Goran comes with two special CSS styles, button and button-minimal. You can add these classes to your links in the Text Editor, to create “call to action” buttons.

For example:

<a href="http://gorandemo.wordpress.com/" class="button">Button</a>

<a href="http://gorandemo.wordpress.com/" class="button-minimal">Button Minimal</a>

== Quick Illustratr Specs (all measurements in pixels) ==

1. The main column width is 700 except in the full-width layout where it’s 1086.
2. A widget is 314.
3. Featured Images for posts are 772 wide by unlimited high.
4. Featured Images for pages are 1230 wide by 1230 high.

== Changelog ==

= 19 April 2016 =
* Correct text domain.
* Update negative margin on Featured Images when sidebar is set to the left. Makes sure sidebar and image don't touch.

= 5 April 2016 =
* Editor styles on audio embeds and .wp-audio-shortcode caused an infinite loop when audio players were inserted into the content. Removing these styles

= 9 March 2016 =
* Make sure child menu is left align even with a long parent menu.

= 20 January 2016 =
* Add margin-bottom to a PollDaddy
* Remove custom PollDaddy styles

= 6 November 2015 =
* Add support for missing Genericons and update to 3.4.1.

= 30 October 2015 =
* Updating changelog;
* Removing obsoloete ->get_setting hat was causing PHP warning in Customizer; See #3447;

= 10 September 2015 =
* Remove extra class to create textarea in customizer since it's now part of core.

= 20 August 2015 =
* Add text domain and/or remove domain path. (E-I)

= 31 July 2015 =
* Remove .`screen-reader-text:hover` and `.screen-reader-text:active` style rules.

= 16 July 2015 =
* Close all open submenus when a second submenu is opened.
* Always use https when loading Google Fonts. See #3221;

= 5 May 2015 =
* Add support for Testimonial Custom Post Type

= 3 March 2015 =
* Remove border around table element for Flickr widget;

= 21 January 2015 =
* Dequeue Edin's script and add directly to Goran the functions to toggle the menu.

= 25 November 2014 =
* Add support for upcoming Eventbrite services.

= 5 November 2014 =
* Make sure $top_area_content is sanitize with wp_kses_post()

= 12 September 2014 =
* Fade in header only when oage is 100% loaded to avoid default color to appear on dropdown menu arrows when using custom colors and to avoid the jump of the hero area. Fixes #2683, #2684

= 10 September 2014 =
* Add support for Jetpack Breadcrumbs

= 8 September 2014 =
* Add credits to readme.txt

= 5 September 2014 =
* Reduce custom header suggested height to 576px -- Height of the Hero Area when entry-title is on 1 line.

= 2 September 2014 =
* Clean up padding and borders in the Recent Comments widget.

= 1 September 2014 =
* Switch header background color from green to red.
* Remove Recent Comments Widget border around table.

= 28 August 2014 =
* Add margin bottom to select within a widget
* Fix Infinite Scroll spinner position and margin
* Add css3 transition to more-link after pseudo elements
* Hide meta-nav from more-link
* Add comment style for trackbacks
* new navigation to next/previous post
* New gallery style
* New reply links style --
* Update input[type="button"] padding so it respect vertical rhythm
* Improve page links style so it's not lose with sharedaddy and related posts
* Fix post format icons wrong line-height
* Remove link item extra padding when has submenu in footer-navigation --

= 27 August 2014 =
* Add readme

= 26 August 2014 =
* Multiple CSS changes:
* Update content width using parent theme function instead of action's priorities
* update tags -- theme is red and not green anymore

= 25 August 2014 =
* Remove useless styles
* Add screenshot
* Add editor style
* Fix content width on front page, full width and grid page template.
* Fix dropdown toggle color in footer widget area

= 22 August 2014 =
* Fix genericons line-height in site-top-content and entry-content
* Center more-link button in grid and featured-page sections
* Cleam main-navigation stylesheet
* New menu style on large screens

= 20 August 2014 =
* Increase footer padding top/bottom
* Remove outline on links
* Multiple changes:
* Switch mprimary color from green to red -- too many business themes are using green or blue :)
* Remove horizontal rules above entry-footer and simplify post-format-icon

= 19 August 2014 =
* Fix Social Navigation display
* New post-thumbnail style for grid and featured pages
* Fix wrong margin on 404 page between the search form and the widgets
* Add site-logo support

= 15 August 2014 =
* Fix akismet wrong color
* Increase social icons size and make sure you can't have submenus
* Tweak Hero Area entry-footer style
* Add language folder
* Multiple changes:
* New stylees for infinite footer and elements with a double border
* New footer and footer widget area background color

= 14 August 2014 =
* Initial import of the theme -- Edin child theme

== Credits ==

* Images: images by Daniel Friesenecker via Pixabay (http://pixabay.com/en/users/TheAngryTeddy/), licensed under [CC0](http://creativecommons.org/choose/zero/)