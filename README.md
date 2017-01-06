#Emergency Reporting - Static Front Page

Adds a static fron page for Emergency Reporting. 

The header bar is coded into the template (to ensure the login button always works).

The rest of the page is an iframe that loads from one of three sources:

* A local dev environment
* The staging site
* The production site

Ths source is determined by the static page's URL (is it .dev or .com, and does it contain .staging)

All links in the iframe are given the attribute `target="_parent"`

##Issues

The bottom part of the header (the drop down) uses JavaScript for functionality, **SO** instead of loading the scripts into the page...

* The bottom part of the header bar is loaded in the iframe.
* The WordPress Site checks for the parameret `src='embed'`. If it is present, hide the top part of the header, add a `<base>` tag, and add padding to the dropdown (to account for no top header).