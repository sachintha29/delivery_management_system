# Delivery Management System


---
## Installation Steps

### **1. Clone the Repository**
```sh
  git clone https://github.com/sachintha29/delivery_management_system.git
  cd delivery_management_system
```

### **2. Install Dependencies**
```sh
  composer install
  npm install && npm run dev
```

### **3. Configure Environment**
Copy the example environment file:
```sh
  cp .env.example .env
```

Update the `.env` file with your database credentials:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=delivery_management
DB_USERNAME=
DB_PASSWORD=
```

### **4. Run Migrations & Seeders**
```sh
```

### **5. Generate Application Key**
```sh
  php artisan key:generate
```

### **6. Serve the Application**
```sh
  php artisan serve
```


```


