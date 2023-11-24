# Website Functionality Overview

## Built With
- HTML
- CSS
- JavaScript
- PHP
- MySQL

## Project Structure
- `Hr`, `Stakeholder`, `cmo`, `displays`, `staff`: Directories for different user roles, each containing role-specific webpages.
- `contents.html`: A template file for creating new webpages.
- `db.php`: The database configuration file. [not used]
- `form` and `from`: Directories for form handling and data processing.
- `home.php`, `home-n.php` `home-hr.php`, `home-cmo.php`,`home.php` : Homepages for different user roles.
- `home_style.css`, `style.css`,`style2.css`,`style3.css`: CSS files for styling the webpages.
- `img`: Directory containing image resources.
- `index.php`, `login.php`, `register.php`, `retrieve.php`, `logout.php`: PHP files for user authentication and session management.

## Database Structure
The database, named `Log_Reg`, is managed through **PhpMyAdmin** and consists of two main tables:
1. `TheTable` - Contains registration and login data.
2. `TheData` - Stores additional user information such as gender, skills, and position.

## Account Types and Directory Structure
There are five distinct account types, each with dedicated webpages and displays:
- **Doctor** - Pages located in `/project/displays`
- **Staff (Nurse)** - Pages located in `/project/staff/`
- **HR** - Pages located in `/project/HR/`
- **Stakeholder** - Pages located in `/project/stakeholder/`

## Login and Registration
The entry page for login and registration is `index.php`, located in `/project/`. It interacts with `login.php` for user logins and `register.php` for new user registrations. Additional scripts like `retrieve.php` fetch the logged-in username and display it on the top-right corner of the webpages.

## CSS Stylesheets
There are multiple CSS files for styling: `style.css`, `home_style.css`, `style2.css`, and `style3.css`. Each webpage uses a different stylesheet, and some have inline `<style>` tags for additional styling adjustments.

## Image Resources
All image files, including icons and profile pictures for different account types, are stored within the `/project/img/` folder.

## Development Tools
An auxiliary webpage named `content.html` is used to streamline the development process by providing a template for new pages. It can be removed if deemed unnecessary.

## Forms and Data Processing
The `/project/form/` directory includes:
- `Form.php` - A webpage that collects user data such as education, skills, department, email, name, gender, etc.
- `processForm.php` - Processes the data from `Form.php` and inserts it into the `TheData` table.
- `userData.php` - Retrieves data from the `TheData` table for use.


## To Run the Website
1- Install Xampp and start Apache and Mysql server
2- Put the `/project` folder inside XAMPP/htdocs/
3- In your browser visit localhost/phpmyadmin
4- create a database name it `Log_Reg`
5-Then create a table named `TheTable`
6-Inside `TheTable` create 5 columns
    -Id, username, email, password, occupation
7-Create another table name it `TheData`
8-Now 11 columns (add or remove based on your need)
    -id, employeetype,username,email,gender,department,ability,position,replacedby,certificate,educatin
**(Make sure the names of columns and table name match with php code in your project files)**
9-Configure the connection using db.php or login and register.php files
10- Go to your browser and run the website by typing `http://localhost/project/index.php`
11- Register and then log into the website. 
**(Make sure to register with password having 8 numbers, 1 small & 1 capital letter)**

## Troubleshooting
1-If you encounter any errors, check your Apache and MySQL logs in the XAMPP Control Panel.
2-Ensure that all file paths and database connections in your PHP scripts are correctly set up

## Things that need improvement
- Fix CRUD functionality
- put all Doctor account type pages inside a folder 
- Make sure about all pages linking such as going back or clicking button to visit another page
- Make sure to add necessary feilds in FORM.php and then modify changes in TheData table
- Add more front end pages such as Stakeholder, Quality manager, safety officer.



## Authors
- Developer:
    - **Saleh Ghulam**
    
- Designer:
    - **Eman Khaled**

