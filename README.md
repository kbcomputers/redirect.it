# Redirect.it
Ever need to quickly deploy a project and just have it redirect to another domain?

Just clone the project, setup your .env file with the `PERMA_REDIRECT` boolean and the `APP_URL` string.

Once those strings are set, (if `PERMA_REDIRECT` is set to true) it will 301 redirect the user to the `APP_URL`. Which means you will need your proper http/https schema on the url.

If `PERMA_REDIRECT` is set to false it will only 302 redirect the user.