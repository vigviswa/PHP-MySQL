# PHP-MySQL
Extracting data from a MySQL database using PHP

# Description of Files

<ol>
  <li> babynames.sql -> SQL Queries to add records to the Initialized Database Table </li>
  <li> babynames.php -> PHP Code to Filter Results of the Database Records based on Year and Gender </li>
</ol>
 
<h2> Decription </h2>

<p> In babynames.php, we connect to the database and fetch the top-five popular names for the selected year and gender.  The default option for the year and gender is “All years” and “Both”. On the form, we include years between 2005-2015 for year and ”male” and ”female” for gender. 
  </p>
  <p>
The Results are displayed in a table. Along with each baby name, we also list the popularity ranking, gender and the year. Order the names based on year, gender and ranking, respectively.

For database part, table has following schema:
<ol>
  <li>Database name: HW3</li>
  <li>BabyNames (name, year, ranking, gender) </li>
</ol>
</p>

# PHP-MYSQL using AJAX

The babynames.html and babynames_ajax.php files are used to access the same MYSQL data using AJAX and XMLHTTP calls. The event is triggered using a button click.

## Note

It is recommended to use MAMP/MAMP Pro on Windows/Mac for creating the MySQL Database. Login and Goto the phpMyAdmin Startup page. Download Mamp <a href="https://www.mamp.info/en/downloads/">Here</a>

For the database created, the credentials are:

`DB Name: HW3`

`Table Name: BabyNames`

# Implementing REST API using PHP

## PHP-MYSQL Encoding the Result as a JSON Object

In this update to the original code, under 'index.php', the results of the data in the MYSQL table are fetched and encoded as a Json Object.

For this Part, I created a new database under the name 'PW7' and the Table name for the data is 'Books'.

Books contains the ISBN, Author Name, Price, Title and Category of a certain book. The table has 198 records.

I have utilized json_encode() function in PHP for the same. First, we extract the data as an object using the mysqli_fetch_object() function.

I have attached the screenshots of the results. 

This is sa simple implementation of REST API Service using PHP.

For viewing the results on Chrome, I used the Json Viewer Extension on Chrome.

I updated the settings on the Options tab of Json Viewer Extension as:
<ol>
  <li> {
  "prependHeader": true,
  "maxJsonSize": 400,
  "alwaysFold": true,
  "alwaysRenderAllContent": false,
  "sortKeys": false,
  "clickableUrls": true,
  "wrapLinkWithAnchorTag": false,
  "openLinksInNewWindow": true,
  "autoHighlight": true
    } </li>
  <li> {
  "readOnly": true,
  "lineNumbers": true,
  "lineWrapping": true,
  "foldGutter": true,
  "tabSize": 2,
  "indentCStyle": false,
  "showArraySize": true
    } </li>  
</ol>

# REST API creating separate calls for id of the books

## The following changes explain how we can implement separate API calls for singular books using their ISBN number

This is very similar to PW7 except that I also implemented:

```
http://localhost/books/id
```

id will be Book ISBN and if you give ISBN number at the end of URL, index.php will return one single object that corresponds to the book with given ISBN.

The solution is under the name indexapi.php

I have also attached the screenshots for the various cases of the calls.

# Summary

All the files have implemented PHP MySQL calls, using functions, using AJAX calls. Also, in the latter part, I have also used this model to implement REST API's in PHP.

# Contact

Feel free to reach out for any help required regarding this project!
Visit my website [here](http://vigviswa.com/) and follow me on [LinkedIn](https://www.linkedin.com/in/vigviswa/)
