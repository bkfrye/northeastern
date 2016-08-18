#Northeastern Alumni WP Theme

This theme is to be used on the NEU Alumni multisite.

##Installation

Building this theme requires [node.js](http://nodejs.org/download/). Please update to the latest version of npm: `npm install -g npm@latest`.

From the command line:

1. Install [gulp](http://gulpjs.com) and globally with `npm install -g gulp`
2. Navigate to the theme directory, then run `npm install`
3. Run the environment by using `gulp`

You now have all the necessary dependencies to run the build process.

### Using BrowserSync

To use BrowserSync during `gulp` you need to update `proxy` in gulpfile.js to reflect your local development hostname.

For example, if your local development URL is `http://project-name.dev` you would update the file to read:

```
...

gulp.task('browserSync', function() {
  browserSync.init({
	proxy: "http://project-name.dev"
  })
});

...
```
