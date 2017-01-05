#Emergency Reporting - Static Front Page

Adds a static fron page for Emergency Reporting. 

The header bar is coded into the template (to ensure the login button always works).

The rest of the page is an iframe that loads from one of three sources:

* A local dev environment
* The staging site
* The production site

Ths source is determined by the static page's URL (is it .dev or .com, and does it contain .staging)