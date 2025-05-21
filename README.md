## 🧰 Laravel Version Used

- Laravel **10.x**

---

## ⚙️ How to Set Up the Project

Follow these steps to set up the project locally:

### 📁 Step 1: Clone the Repository

```bash
git clone https://github.com/your-username/portfolio-crud.git
cd portfolio-crud
```
📦 Step 2: Install Composer Dependencies
 
 composer install

 🛠️ Step 3: Create .env File

 cp .env.example .env

🧩 Step 4: Configure the .env File

DB_DATABASE=portfolio_crud
DB_USERNAME=root
DB_PASSWORD=your_password

🔑 Step 5: Generate Application Key

php artisan key:generate

🗃️ Step 6: Run Migrations to Create Tables

php artisan migrate

🏁 Step 7: Run the Laravel Development Server

php artisan serve

Now open your browser and go to:
http://127.0.0.1:8000/projects

## 📸 Screenshot

![Website Screenshot](https://github.com/AdilHasanShojib/Portfolio-CRUD/blob/main/portfolio-crud/screenshot/Screenshot.jpg)


🗄️ Database Name

portfolio_crud (I giving The database file also)

Make sure you manually place sample images in the folder:

public\images




