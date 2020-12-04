# getjsondata
a wordpress plugin which get json data and display the formatted data on website.
Task description 

We ask you to write a WordPress plugin. 

When installed, the plugin has to make available a custom endpoint on the WordPress site. With “custom endpoint” we mean an arbitrary URL not recognized by WP as a standard URL, like a permalink or so. 

Note that this is not a REST endpoint. 

When a visitor navigates to that endpoint, the plugin has to send an HTTP request to a REST API endpoint. The API is available at https://jsonplaceholder.typicode.com and the endpoint to call is /users. 

The plugin will parse the JSON response and will use it to build and display an HTML table. 
If you want you can call this endpoint using AJAX, but that is optional. 

Each row in the HTML table will show the details for a user. The column's id, name, and username are mandatory, but you can show more details if you want. 

We don’t mind you to use any JavaScript, including 3rd party libraries, to improve the table look and feel. Things like client-side ordering and filtering, for example, are ok but not required. 

The content of three mandatory columns must be a link (<a> tag). When a visitor clicks any of these links, the details of that user must be shown. For that, the plugin will do another API request to the user-details endpoint. 

See https://jsonplaceholder.typicode.com/guide.html for documentation. 

These details fetching requests must be asynchronous (AJAX) and the user details will be shown without reloading the page. 
At any time, the page will show details for at max one user. In fact, at every link click, a new user detail will load, replacing the one currently shown. 

This feature requires JavaScript, of course. You have the choice of technology to use. To make some examples, the code could be written in vanilla ES5 code, using 3rd party libraries like jQuery or whatnot, or implemented with vanilla modern JS, or TypeScript, React, Svelte, etc... 

The styling (CSS) is also up to you, you could even add no style at all. Responsiveness is not required but appreciated. The technology choice for styling is once again up to you. Plain old CSS, SASS, Less, Stylus, PostCSS, etc... are all valid choices. 

We expect some kind of cache for HTTP requests. The rationale behind it is up to you, please make a decision and document it in the README. 

Error handling for the external HTTP requests is also required: navigation must not be disrupted if a request fails. 
Additionally, the following features are mandatory: 

Full Composer support 
A README, in English, in Markdown-Formatting, explaining plugin usage and decisions behind implementation 
Code to be compliant with Inpsyde code style ( https://github.com/inpsyde/php-coding-standards) 
Automated tests (more on this topic will follow below) 
A license, preferably in a LICENSE file in the repository root. We don't require any specific license, nor we will ever share your work without your permission. The license should at a very minimum allow us to access and store your work. If you want to use an OS license, feel free to do so. 
You can ship more if you desire. But we prefer if your extra effort, if any, will focus on the server-side, being the role back-end focused. 
Some ideas: make the endpoint customizable via options, make the plugin extensible/customizable via hooks, allow customization of the rendered page via template override in theme... etc. 
