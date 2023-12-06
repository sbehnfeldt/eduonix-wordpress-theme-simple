# WordPress Theme "Simple"
Sing-along with Udemy Course __Learn to Create WordPress Theems by Buidling 10 Projects__
by Samy Eduonix of Eduonix Learning Solutions, Eduonix-Tech, Samy Eduonix  
_ref: https://www.udemy.com/course/learn-to-create-wordpress-themes-by-building-10-projects/_

## Lesson 4) Required Files & Head Code
In directory `wp-content/themes/`, make directory for the theme.
Must contain files `index.php` and `style.php`.
Should contain `screenshot.png` (or .jpg).

`header.php`: From `<html>` to the closing tag of the `<header>` element  
`footer.php`: From `<footer>` to the closing tag of the `<html>` element


## Lesson 5) Looping Through Posts
```php
<?php if ( have_posts() ): ?>
    <?php while ( have_posts() ): the_post(); ?>
    ...
    <?php endwhile; ?>
    
<?php else: ?>
   ...
<?php endif; ?>
```
Functions for echoing basic content to the page:
```php
the_title();
the_author();
the_date();
the_time();
the_post_thumbnail();
the_excerpt();
the_permalink();
```

## Lesson 6) Single Post & Thumbnails
File `single.php` is called (instead of `index.php`) to display a single post.  
File `functions.php`

functions:
add_action()
add_filter()
add_theme_support()

actions:
after_setup_theme

filters:
excerpt_length

## Lesson 7) Pages and Menus
Action `after_setup_theme` : `register_nav_menus()` to add support for menus to the theme.  

File `header.php` : `wp_nav_menu()` to display a menu.  

File `page.php` : Display page (without which, `single.php` is used)

## Lesson 8) Widget Locations & Comments
Add sidebar to each page (HTML). Display widgets in the sidebar. Display comments and comment form on Single Post page.
* `is_active_sidebar()`
* `dynamic_sidebar()`
* `comments_template()`
* `comments.php`
