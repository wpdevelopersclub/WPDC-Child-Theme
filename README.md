# WPDC Child Theme

This [Genesis-powered](http://www.studiopress.com/features/) child theme is for [WP Developers' Club](https://wpdevelopersclub.com).  It handles serving up the styling and HTML markup for the site.  It's modular, Sass-ified, and [gulp](https://knowthecode.io/labs/part-3a-automating-tasks-gulp) running.  It serves up a minified version of the stylesheet to keep the assets lean and mean.  And it uses Bourbon and Neat just for fun.  

Want to build your own Genesis starter theme? No problem.  We have a [hands-on lab](https://knowthecode.io/labs-guide/lets-build-custom-developers-genesis-starter-child-theme) that walks you through the process step-by-step.  Go build your own and save yourself a ton of time and money. 

## Dependencies

This child theme is dependent upon the following:

1. [Fulcrum](https://github.com/hellofromtonya/fulcrum) - The central custom repository for WordPress
2. The [Genesis](http://www.studiopress.com/features/) theming framework from [StudioPress](http://www.studiopress.com).

## Instructions to install:

1. Open up terminal and navigate to the `themes` folder.
2. Then type: `git clone https://github.com/wpdevelopersclub/WPDC-Child-Theme`
3. Change the folder name to `wpdc`
4. Navigate into the new folder `cd wpdc`
5. It will now run.

## Sass Files

To make styling changes, navigate to `assets/sass`.  There you will find each of the partial files which contain the CSS styling.

The variables are setup for our color scheme.  Therefore, you want to use the variables found in the `utilities/variables/_variables.scss` file.  For example, let's say that you want the background-color to be our branding green color.  You would use `$green` as the color.  This variable holds the hex color.

## Gulp

When you are actively making styling changes, you need to convert the Sass files into a compressed CSS file.  To do this, in terminal, type `gulp` at the root of the theme folder.  Let it run as you make styling changes.  Refresh your browser to see the live changes on your local sandbox site.

## Contributions

All feedback, bug reports, and pull requests are welcome.