# dinlo 
* Contributors: bobbingwide
* Donate link: http://www.oik-plugins.com/oik/oik-donate/
* Tags: Hello World, worst, dinlo
* Requires at least: 4.3
* Tested up to: 4.5-RC1
* Stable tag: 0.0.1
* License: GPLv2 or later
* License URI: http://www.gnu.org/licenses/gpl-2.0.html

## Description 
The world's worst Hello World plugin.

This plugin was used in a video demonstrating the

[oik-bwtrace - debug trace for WordPress plugin](http://www.oik-plugins.com/wordpress-plugins-from-oik-plugins/free-oik-plugins/oik-trace-plugin/an-introduction-to-problem-determination-with-oik-bwtrace-debug-trace-for-wordpress/)

If you want to learn about oik-bwtrace then you might be tempted to download and install this plugin.

Every developer needs a play area.
Why not start with this one?
And mess around with it to your heart's content.

PS. If you're intent on using dinlo to test new solutions to problems
you might want to fix the dinlo_update_footer() filter function.

## Installation 

Before using dinlo you'll need to obtain and activate the oik-bwtrace plugin.
[oik-bwtrace](http://github.com/bobbingwide/oik-bwtrace)

1. Upload the contents of the dinlo plugin to the `/wp-content/plugins/dinlo' directory
1. Activate the dinlo plugin through the 'Plugins' menu in WordPress.
1. Have fun debugging.


## Frequently Asked Questions 
# What's dinlo? 

Dinlo is a word that was commonly used in Portsmouth, Hampshire, England.

You can read about it and other words regularly used in Pompey here
http://www.portsmouthsociety.org.uk/news2003/pompeyspeakcomments.htm#L004

PS. In the Bluebell Pub in Emsworth there's a map of Pompey where are the road names are replaced by Pompey speak.
Check it out.

# Why do I need oik-bwtrace? 

Because WordPress doesn't provide dormant trace functions. See TRAC #33740.

Try running dinlo without oik-bwtrace and see what I mean.
* At some point you'll get a Fatal error: Call to undefined function bw_trace2()


## Screenshots 
1. Output when dinlo_am() is hooked up to respond to the "admin_menu" action hook

## Upgrade Notice 
# 0.0.2 
Tested with WordPress 4.5

# 0.0.1 
First version to complement the video.

## Changelog 
# 0.0.2 
* Tested: With WordPress 4.5

# 0.0.1
* Added: New plugin



