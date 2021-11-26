
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

<img src="https://user-images.githubusercontent.com/94285514/143078649-ca11abe6-7217-4614-9c33-350c6c34b651.jpg" width="700" height="">

</p>

#### Class Diagram
<p align="center">

<img src="https://user-images.githubusercontent.com/94285514/143071049-8af4925b-79fa-438c-a92e-efcbd2fd6ad0.jpg">

</p>

***Modules & Screenshots***


<p align="center">
<b><i>Login Page</i></b>
<img src="https://user-images.githubusercontent.com/94285514/143485149-3f251a62-1e4d-4f33-8e2c-c4b5d954d2f0.png">
</p>

<p align="center">
<b><i>User Registration Page</i></b>
<img src="https://user-images.githubusercontent.com/94285514/143485533-8ca75334-1264-400d-8685-e432a733576e.png">
</p>

<p align="center">
<b><i>Change Password</i></b>
<img src="https://user-images.githubusercontent.com/94285514/143530298-efecd690-b178-42d7-bbab-3d58cfe3aa33.png">
</p>

<p align="center">
<b><i>Personal Expense dashboard</i></b>
<img src="https://user-images.githubusercontent.com/94285514/143530231-13b76d18-b33e-4da7-9766-54bffa4d9df5.png">
</p>

<p align="center">
<b><i>Add Expense</i></b>
<img src="https://user-images.githubusercontent.com/94285514/143530667-cf87a892-a781-49ae-b943-2975b1ff32ca.png">
</p>

<p align="center">
<b><i>Add Category</i></b>
<img src="https://user-images.githubusercontent.com/94285514/143530664-b6607da8-9e42-46c0-90b1-d36285d17767.png">
</p>

<p align="center">
<b><i>Manage Expenses</i></b>
<img src="https://user-images.githubusercontent.com/94285514/143530037-4847fafc-c106-4eee-b2ba-20b55b25e5c8.png">

<br>
<b><i>Manage Categories</i></b>
<img src="https://user-images.githubusercontent.com/94285514/143530108-565e3caf-7e74-4b7e-b062-858059bd13cc.png">
</p>
  
<p align="center">
<b><i>Category Wise - Pie Chart</i></b>
<img src="https://user-images.githubusercontent.com/94285514/143529827-eef436b2-d270-4078-ac99-e717bb77cba3.png">
</p>

***SQL Query***
```sql
SELECT 
  sum(E.amount) as total_expenses, 
  C.name 
FROM 
  expenses E 
  LEFT JOIN categories C ON E.category_id = C.id 
WHERE 
  E.user_id = $user_id 
GROUP BY 
  E.category_id;
```

<p align="center">
<b><i>Date and Time Wise - Line Chart</i></b>
<img src="https://user-images.githubusercontent.com/94285514/143529871-2443dac1-0846-47a8-a107-d4d7f3b1133e.png">
</p>

***SQL Query***
```sql
SELECT * 
FROM 
  expenses 
WHERE 
  datetime_added >= '$from_date' 
  AND datetime_added <= '$to_date' 
  AND user_id = $user_id;
```

**_Requirements_**

Install XAMPP v7.3.12 from the below link. [Click here to Download](https://sourceforge.net/projects/xampp/files/XAMPP%20Windows/7.3.12/)

**_How to Run?_**

1. Clone this repository in the htdocs folder located under XAMPP Installation Folder. The default path is: ```C:\xampp\htdocs```.
2. Open XAMPP Control Panel and then start Apache Server and MySQL services.
3. Open PHPmyAdmin and the create a Database of name **expense_tracker** and import the .sql file provided in database folder in the repo.
4. Now use the address ```localhost/Expense-Tracker``` to open the project in browser.

**_License_**

This software is licenced under the MIT License. Please read LICENSE for information on the software availability and distribution.
