
<p align="center">
<img src="https://user-images.githubusercontent.com/94285514/141747267-0d3d8d3b-d835-4487-9523-4bc54b319ffb.png" />
</p>

Website to track **Personal Expenses** with user login support and **Data Visualization.**
_Project created for Database Management Systems Lab Course (CS309)._

<h3 align="center">Technology Stack</h3>

<p align=center>

<img src="https://img.shields.io/badge/Xampp-F37623?style=for-the-badge&logo=xampp&logoColor=white" />
<img src="https://img.shields.io/badge/PHP-v7.3.12-777BB4?&style=for-the-badge&logo=php&?labelColor=777BB4&logoColor=white" />
<img src="https://img.shields.io/badge/symfony-%23000000.svg?style=for-the-badge&logo=symfony&logoColor=white" />
<img src="https://img.shields.io/badge/MySQL-005C84?style=for-the-badge&logo=mysql&logoColor=white" />
<img src="https://img.shields.io/badge/apache-%23D42029.svg?style=for-the-badge&logo=apache&logoColor=white" />

</p>

<p align="center">

<img src="https://img.shields.io/badge/HTML5-E34F26?style=for-the-badge&logo=html5&logoColor=white" />
<img src="https://img.shields.io/badge/CSS3-1572B6?style=for-the-badge&logo=css3&logoColor=white" />
<img src="https://img.shields.io/badge/JavaScript-323330?style=for-the-badge&logo=javascript&logoColor=F7DF1E" />

</p>

<!-- https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white -->

**_Framework_**
- **Symfony** is an open-source PHP web application framework, designed for developers who need a simple and elegant toolkit to create full-featured web applications.

**_Packages_**

1. [**Doctrine - DBAL**](https://symfony.com/doc/current/doctrine.html): Powerful PHP Database Abstraction Layer with many for features for communication between a Computer Application and Relational Databases like MySQL, PostgreSQL, Oracle and SQLite.

2. [**PHPMailer**](https://github.com/infinitered/middleman-template/tree/master/source/libraries/vendor/phpmailer/phpmailer): A full-featured email creation and transfer class for PHP. Used for Registration Confirmation Mail (Removed).

**_JS Libraries_**

1. [**JQuery**](https://jquery.com/): For Event Handling and CSS Animation.
2. [**Popper**](https://github.com/popperjs/popper-core): Manages Tooltips.
3. [**Datepicker**](https://api.jqueryui.com/datepicker/): Select a date from a popup or inline calendar.
4. [**Smooth-Scroll**](https://github.com/cferdinandi/smooth-scroll): Handles smooth vertical and horizontal scrolling.
5. [**Dropdown**](https://getbootstrap.com/docs/4.0/components/dropdowns/): For Navigation Bar Dropdown Menu.
6. [**Tether**](http://tether.io/): For efficiently making an absolutely positioned element stay next to another element on the page.
7. [**FormStyler**](https://cdnjs.com/libraries/jQueryFormStyler): For styling HTML Form Elements.

**_Database_**

For this project, we will be using three tables.
 - Users: Stores registered users credentials.
 - Categories: Stores different types of Categories.
 - Expenses: Stores Expense Amount and Type of Expense for each user.

#### Entity Relationship Diagram
<p align="center">

<img src="https://user-images.githubusercontent.com/94285514/143078649-ca11abe6-7217-4614-9c33-350c6c34b651.jpg" width="500" height="">

</p>

#### Class Diagram
<p align="center">

<img src="https://user-images.githubusercontent.com/94285514/143071049-8af4925b-79fa-438c-a92e-efcbd2fd6ad0.jpg" width="500" height="">

</p>

**_Modules_**

1. Login Page
2. User Registration Page
3. Personal Expense dashboard
4. Add or Delete Expense.
5. Add or Delete Category.
6. Manage Expenses and Categories.
7. Data Visualization
    - Category wise - Pie Chart 
    - Date and Time wise - Line Graph

**_Requirements_**

Install XAMPP v7.3.12 from the below link. [Click here to Download](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.3.12/)

**_How to Run?_**

1. Clone this repository in the htdocs folder located under XAMPP Installation Folder. The default path is: ```C:\xampp\htdocs```.
2. Open XAMPP Control Panel and then start Apache Server and MySQL services.
3. Open PHPmyAdmin and the create a Database of name **expense_tracker** and import the .sql file provided in database folder in the repo.
4. Now use the address ```localhost/Expense-Tracker``` to open the project in browser.

**_License_**

This software is licenced under the MIT License. Please read LICENSE for information on the software availability and distribution.
