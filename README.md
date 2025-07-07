# 🛒 PHP Shopping Cart Using Sessions

This is a basic shopping cart web application built with PHP using sessions. It allows users to:

- View a list of products
- Add products to the cart
- Remove one item at a time
- Remove all quantities of a product
- View total price

## 📁 Folder Structure

```
shopping-cart/
│
├── index.php         # Product listing (entry point)
├── cart.php          # View and manage cart
├── remove.php        # Remove one or all items
├── products.php      # Product data array
└── session.php       # Starts session safely
```

## 🚀 How to Run

1. Copy this project folder into your XAMPP `htdocs` directory:
   ```
   C:/xampp/htdocs/shopping-cart/
   ```

2. Start Apache from the XAMPP Control Panel.

3. In your browser, visit:
   ```
   http://localhost/shopping-cart/index.php
   ```

4. Start shopping! 🛍

## 🧠 Features

- PHP sessions to track cart items
- Basic product list from an array (no database required)
- Quantity decreases by 1 per remove click
- Option to remove all of a product
- Total price calculation

## 🔧 Requirements

- PHP 7.x or 8.x
- Web server (XAMPP, WAMP, or similar)
- <img width="794" alt="image" src="https://github.com/user-attachments/assets/9dcfd490-4143-491c-8476-e0cb5feb57e5" />


## 📸 Demo Screenshot

<img width="387" alt="image" src="https://github.com/user-attachments/assets/94746391-ef16-49a9-a223-bf9d05517ce4" />


## 📄 License

MIT License - use freely for learning and modification.
