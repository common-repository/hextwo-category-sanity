=== HEXTWO Category Sanity ===
Contributors: danemorgan
Tags: categories, uncategorized, publishing
Requires at least: 3.0
Tested up to: 4.9
Requires PHP: 5.2
Stable tag: trunk
License: GPL v2.0 or Higher
License URI: https://www.gnu.org/licenses/old-licenses/gpl-2.0.en.html

Make sure you have set your category before you publish your posts.

== Description ==
# Hextwo Category Sanity
A simple plugin to prevent posting with no category, Uncategorized category, or more than one category selected.

##What it does.

1. If you forget to check a category box and try to publish your post, it will pop an alert telling you the you must select a category before you publish.
2. If you have previously selected the uncategorized category and try to publish, it will pop an alert telling you that you mus uncheck the Uncategorized category.
3. If you have two or more categories selected and try to publish it will pop an alert and tell you that you may only select one category.

If the current post type does not support the built-in WordPress category taxonomy, the script bails and does nothing. This will only affect posts with Category support.

In the future I might add a selection tool to allow specifying a number of categories that are allowable, but for now, I think one is a good starting point.

== Installation ==
1. Upload the plugin package to the plugins directory.
2. Login to the dashboard and activate the plugin.

== Screenshots ==
1. This screenshot shows an alert that you have not set a category.
2. This screenshot shows an alert that you have selected the Uncategorized category.
3. This screenshot shows an alert that you have selected more than one category.

== Changelog ==
1.0.0 Initial Release 2018/02/11git status
