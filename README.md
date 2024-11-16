##Basic PHP eCommerce Project

## Overview

This is a simple PHP-based eCommerce project designed to showcase a selection of products. It includes features such as product listing, product details, and a basic layout using Bootstrap for responsive design. The project is intended for educational purposes and can be further expanded with additional features like user authentication, shopping cart functionality, and payment integration.

## Features

- **Product Listing**: Display featured products with title, image, and price.
- **Product Details**: View detailed information about each product.
- **Responsive Design**: Built with Bootstrap for a mobile-friendly layout.
- **MySQL Database**: Utilizes a MySQL database to store product information.
- **Easy to Extend**: The code is structured in a way that allows for easy addition of new features.

## Technologies Used

- PHP
- MySQL
- HTML/CSS
- Bootstrap
- JavaScript (jQuery)

## Getting Started

### Prerequisites

To run this project locally, you need:

- A local server environment (e.g., XAMPP, MAMP, WAMP)
- PHP 7.0 or higher
- MySQL

### Installation

1. **Clone the Repository**:
   ```bash
   git clone https://github.com/Colyzo466/ecommerce.git
   cd ecommerce
   ```

2. **Set Up Local Server**:
   - Install a local server environment like XAMPP, MAMP, or WAMP.
   - Start the Apache and MySQL services.

3. **Create the Database**:
   - Open your web browser and go to `http://localhost/phpmyadmin`.
   - Create a new database named `ecommerce`.

4. **Create Tables**:
   - Execute the following SQL command to create the `products` table:
   ```sql
   CREATE TABLE products (
       id INT AUTO_INCREMENT PRIMARY KEY,
       title VARCHAR(255) NOT NULL,
       price DECIMAL(10, 2) NOT NULL,
       brandname VARCHAR(100) NOT NULL,
       image VARCHAR(255) NOT NULL,
       description TEXT,
       featured TINYINT(1) DEFAULT 0
   );
   ```

5. **Populate the Database**:
   - You can manually insert product data into the `products` table using SQL commands or phpMyAdmin.

6. **Update Configuration**:
   - Open `config.php` and ensure that the database connection settings are correct.

7. **Access the Application**:
   - Open your web browser and go to `http://localhost/ecommerce/index.php` to view the application.

## File Structure

```
ecommerce/
├── css/
│   └── styles.css
├── js/
│   └── scripts.js
├── images/
├── index.php
├── details.php
└── details-laptop.php


## Usage

- **Home Page**: The home page displays featured products.
- **Product Details**: Click on "More" to view detailed information about a product.

## Contributing

Contributions are welcome! If you have suggestions for improvements or new features, please feel free to fork the repository and submit a pull request.

## License

This project is licensed under the MIT License. See the [LICENSE](LICENSE) file for more details.

## Acknowledgments

- [Bootstrap](https://getbootstrap.com/) for the responsive design framework.
- [PHP](https://www.php.net/) for server-side scripting.
- [MySQL](https://www.mysql.com/) for the database management system.

## Contact

For questions or inquiries, please contact me at colyzo466@gmail.com.
