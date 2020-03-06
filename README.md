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

## Note

It is recommended to use MAMP/MAMP Pro on Windows/Mac for creating the MySQL Database. Login and Goto the phpMyAdmin Startup page. 

For the database created, the credentials are:

DB Name: HW3
Table Name: BabyNames
