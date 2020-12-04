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

