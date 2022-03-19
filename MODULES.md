## Modules and Screenshots
The Screenshots of all the webpages are as follows:

### Login Page
<p align="center">
<img src="./Images/Screenshots/login_page.png">
</p>

### Register Page
<p align="center">
<img src="./Images/Screenshots/register_page.png">
</p>

### Update Profile Page
<p align="center">
<img src="./Images/Screenshots/password_update.png">
</p>

### Expense Dashboard
<p align="center">
<img src="./Images/Screenshots/dashboard.png">
</p>

### Add New Expense
<p align="center">
<img src="./Images/Screenshots/add_expense.png">
</p>

### Add New Category
<p align="center">
<img src="./Images/Screenshots/add_category.png">
</p>

### Manage Categories
<p align="center">
<img src="./Images/Screenshots/manage_categories.png">
</p>

### Manage Expenses
<p align="center">
<img src="./Images/Screenshots/manage_expenses.png">
</p>

**Query**
```sql
SELECT 
  E.*, 
  C.name as category_name 
FROM 
  expenses E 
  LEFT JOIN categories C ON E.category_id = C.id 
WHERE 
  user_id = $user_id;
```
  
### Category Wise - Pie Chart
<p align="center">
<img src="./Images/Screenshots/cat_chart.png">
</p>

**Query**
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

### Date and Time Wise - Line Chart
<p align="center">
<img src="./Images/Screenshots/date_chart.png">
</p>

**Query**
```sql
SELECT * 
FROM 
  expenses 
WHERE 
  datetime_added >= '$from_date' AND datetime_added <= '$to_date' 
  AND user_id = $user_id;
```