#Emergency Reporting - Static Front Page

Adds a static fron page for Emergency Reporting. 

The header bar is coded into the template (to ensure the login button always works).

The rest of the page is an iframe that loads from one of three sources:

* A local dev environment
* The staging site
* The production site

Ths source is determined by the static page's URL (is it .dev or .com, and does it contain .staging)

The WordPress site adds a base tag.

##Positioning Issues

To keep from having to rely on heights not changing, JavaScript is used to position the header / iframe. Here's how:

On the static page, JS gives the iframe height equal to the height of the window - the height of the static header bar (fill  the rest of the page).

In the WP site, **if** `src=embed` is present, **then** JS will set the padding of the page wrapper to be the height of the nav bar (drop down menu) - the top margin of the slider.

The reason for subtracting the top margin of the slider is because it has a negative top margin. It would naturally be positioned behind the navbar if the value were ignored. 