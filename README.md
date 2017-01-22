#Emergency Reporting - Static Front Page

Adds a static front page for Emergency Reporting `www.emergencyreporting.com`.

The header bar is coded into the template (to ensure the login button always works).

The rest of the page is an iframe that loads from one of three sources:

* A local dev environment `explore.emergencyreporting.dev`
* The staging site `staging-explore.emergencyreporting.com`
* The production site `explore.emergencyreporting.com`

##Using the iframe

The iframe `src` url needs `src=embed` passed in as a query string parameter. This tells the WP site to forgo render the header as well as set a `base` tag to ensure any links open in the parent as opposed to within the iframe.

We also pass any additional query string parameters into the iframe `src` to ensure any tagged url's for the homepage persist.
