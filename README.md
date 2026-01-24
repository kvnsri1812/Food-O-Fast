# FOOD-O-FAST  
> **_Food-Order-Fast - Skip the line, not the meal_**

FOOD-O-FAST is a web-based online food ordering system built to reduce waiting time and manual effort in crowded environments (e.g., college canteens/bakeries). Customers can browse menu items, place orders, and check order status, while admins can manage items and approve/prepare/disapprove orders.

**Project Timeline**: Developed and completed between **March 5, 2022** and **April 30, 2022**.

## Why this project?
In traditional ordering, customers must stand in queues, check menu boards manually, and wait for order/payment processing. This becomes slow, error-prone, and difficult in crowded situations. FOOD-O-FAST replaces that workflow with a simple online interface so users can order quickly and pick up when ready.



## Core Features

### User (Customer)
- User registration & login
- **Domain email validation** during registration/login (non-domain emails show warning)
- Browse menu with categories/submenus:
  - Veg, Non-Veg, Starters, Pizza, etc.
- Select quantity and add items to **My Orders**
- Confirm order with pickup details
- Track order status:
  - **In Progress**, **Ready to Pick**, **Order Cancelled**
- Contact admin via “Contact Us” page

### Admin (Manager)
- Admin registration & login
- View incoming orders
- Update order outcome:
  - **Approved** (In Progress)
  - **Prepared** (Ready to pick)
  - **Disapprove** (Cancelled) 
- Maintain and update availability of food items 

 

## Tech Stack
- **Frontend:** HTML, CSS  
- **Backend:** PHP  
- **Database:** MySQL (phpMyAdmin via XAMPP)
- **Local Server:** XAMPP (Apache + MySQL)   
- **Recommended OS:** Windows 10   

**Suggested hardware:** i5 / 4GB RAM / 256GB storage

 

## Project Modules

### Admin Module
1. Admin Register
2. Admin Login
3. Order Approval (Approve, Prepared / Disapprove) 

### User Module
1. User Register
2. User Login
3. Home Page (navigation)
4. Menu Page + Category Pages (Veg/Non-Veg/etc.)
5. My Orders
6. Order Confirmation
7. Order Status
8. Contact Us

 

## Database Design (MySQL)

Database name used in the report: **`Project`** 

Tables/Relations:
1. **admin** — stores admin details (username, email, password, phone)
2. **register** — stores user/customer details (username, email, password, phone)
3. **items** — stores available items (includes item info and price)
4. **status** — stores order & tracking details (track/status, user details, items, quantity, cost, date/time) 

 

## Setup & Run Locally (XAMPP)

### 1) Install XAMPP
Download and install XAMPP (Apache Friends). During installation, ensure **Apache** and **MySQL** components are enabled.

### 2) Start Apache & MySQL
Open **XAMPP Control Panel** → click **Start** for:
- Apache
- MySQL 

### 3) Move the project into `htdocs`
Copy your project folder into:

- **Windows (default):**  
  `C:\xampp\htdocs\Food-O-Fast\`

XAMPP projects must be inside `htdocs` to run on localhost.

### 4) Create Database in phpMyAdmin
1. Open: `http://localhost/phpmyadmin`
2. Go to **Databases** tab
3. Create a database (example): `Project`
4. Create/import tables: `admin`, `register`, `items`, `status` 

> If you have a `.sql` file, import it in phpMyAdmin → Import.

### 5) Configure DB Connection (PHP)
In your PHP connection file (`connection.php`), update as needed:

- Host: `localhost`
- User: `root`
- Password: *(empty by default in XAMPP)*
- DB: `Project`

### 6) Run the website
Open in browser:

- `http://localhost/Food-O-Fast/`

 

## Functional Rules (Implemented)
- System must provide **admin & user registration/login**
- Users should register/login with **specific domain emails**
- System verifies email specification and shows warnings for invalid emails
- Menu browsing + quick status updates
- Admin can update order approval and status

 

## Testing (As documented)
Testing approach includes:
- Black-box, White-box, Grey-box testing concepts
- Unit, Integration, System, and User Acceptance testing levels

Example test cases:
- Registration/login using non-domain email → warning popup
- Domain email → successful login/register (for both admin and user)

 

## Project Outcome
This system helps customers avoid queues, reduces admin overload during rush hours, improves ordering speed, and helps manage orders with clear tracking statuses.

 

## UML / Design Artifacts
The project documentation includes:
- Use Case Diagram
- Class Diagram
- Sequence Diagrams
- Activity Diagram
- State Chart Diagram

 

## Team
- Komatlapalli Venkata Naga Sri (19B01A0576)  
- Kurapati Sri Ratna Manjusha (19B01A0582)  
- Mohammad Ahamadunnisa (19B01A0595)  
- Munaganuri Chandrika (19B01A05B5)  
- Namburi Greeshma Sarika (19B01A05C5) 

 

### Reference Document
Project report (Food-O-Fast Documentation)

