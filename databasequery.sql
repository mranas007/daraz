-- Database creation
CREATE DATABASE IF NOT EXISTS daraz_store;

-- Use the database
USE daraz_store;

-- Table creation for products
CREATE TABLE IF NOT EXISTS products (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    description TEXT NOT NULL,
    image_url VARCHAR(255) NOT NULL,
    original_price DECIMAL(10, 2) NOT NULL,
    discounted_price DECIMAL(10, 2) NOT NULL
);

-- Table creation for Registeration 
CREATE TABLE IF NOT EXISTS users (
    user_id INT AUTO_INCREMENT PRIMARY KEY,
    username VARCHAR(50) NOT NULL UNIQUE,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    registration_date TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);

-- Admin users
CREATE TABLE admin_users (
    id INT AUTO_INCREMENT PRIMARY KEY,
    name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL UNIQUE,
    password VARCHAR(255) NOT NULL,
    role ENUM('admin', 'editor', 'viewer') DEFAULT 'admin',
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);


-- some product data query for demo
INSERT INTO `products`(`name`, `description`, `image_url`, `original_price`, `discounted_price`)
VALUES ('Wireless Headphones', 'Superior sound quality with comfortable design', 'https://plus.unsplash.com/premium_photo-1677158265072-5d15db9e23b2?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OXx8d2lyZWxlc3MlMjBoZWFkcGhuZXN8ZW58MHx8MHx8fDA%3D', 100.00, 80.00),
('Smartwatch', 'Track your fitness and stay connected', 'https://images.unsplash.com/photo-1553545204-4f7d339aa06a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fFNtYXJ0d2F0Y2h8ZW58MHx8MHx8fDA%3D', 150.00, 120.00),
('Gaming Laptop', 'Powerful performance for immersive gaming', 'https://images.unsplash.com/photo-1611078489935-0cb964de46d6?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8R2FtaW5nJTIwTGFwdG9wfGVufDB8fDB8fHww', 800.00, 750.00),
  ('Running Shoes', 'Lightweight and comfortable for your runs', 'https://images.unsplash.com/photo-1542291026-7eec264c27ff?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8UnVubmluZyUyMFNob2VzfGVufDB8fDB8fHww', 50.00, 40.00),
  ('Mechanical Keyboard', 'Enhance your typing experience', 'https://plus.unsplash.com/premium_photo-1664194583917-b0ba07c4ce2a?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MXx8TWVjaGFuaWNhbCUyMEtleWJvYXJkfGVufDB8fDB8fHww', 120.00, 100.00),
  ('Wireless Speaker', 'Fill your room with high-quality sound', 'https://images.unsplash.com/photo-1542193810-9007c21cd37e?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8V2lyZWxlc3MlMjBTcGVha2VyfGVufDB8fDB8fHww', 75.00, 60.00),
  ('Action Camera', 'Capture your adventures in stunning detail', 'https://images.unsplash.com/photo-1484506399805-c273b8e91dce?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8N3x8QWN0aW9uJTIwQ2FtZXJhfGVufDB8fDB8fHww', 200.00, 180.00),
  ('Air Purifier', 'Breathe clean air at home', 'https://images.unsplash.com/photo-1634585605949-8f1e029af923?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8QWlyJTIwUHVyaWZpZXJ8ZW58MHx8MHx8fDA%3D', 180.00, 150.00),
  ('Coffee Maker', 'Start your day with the perfect cup of coffee', 'https://images.unsplash.com/photo-1593369196682-6d8ec9ff3ae0?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Q29mZmVlJTIwTWFrZXJ8ZW58MHx8MHx8fDA%3D', 40.00, 35.00),
  ('VR Headset', 'Experience virtual reality like never before', 'https://images.unsplash.com/photo-1622979135225-d2ba269cf1ac?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8M3x8VlIlMjBIZWFkc2V0fGVufDB8fDB8fHww', 300.00, 250.00),
  ('Backpack', 'Carry your essentials in style', 'https://images.unsplash.com/photo-1553062407-98eeb64c6a62?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8QmFja3BhY2t8ZW58MHx8MHx8fDA%3D', 60.00, 50.00),
  ('Smart Home Speaker', 'Control your smart home with voice commands', 'https://images.unsplash.com/photo-1605648916361-9bc12ad6a569?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTB8fFNtYXJ0JTIwSG9tZSUyMFNwZWFrZXJ8ZW58MHx8MHx8fDA%3D', 100.00, 80.00),
  ('Noise Cancelling Headphones', 'Block out distractions and focus on your music', 'https://images.unsplash.com/photo-1656457537704-11f3bcaee2fd?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8Tm9pc2UlMjBDYW5jZWxsaW5nJTIwSGVhZHBob25lc3xlbnwwfHwwfHx8MA%3D%3D', 150.00, 120.00),
  ('Protein Powder', 'Fuel your workouts and build muscle', 'https://images.unsplash.com/photo-1584116831289-e53912463c35?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8MTF8fFByb3RlaW4lMjBQb3dkZXJ8ZW58MHx8MHx8fDA%3D', 30.00, 25.00),
  ('Wireless Earbuds', 'Enjoy your music on the go', 'https://images.unsplash.com/photo-1572569511254-d8f925fe2cbb?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8V2lyZWxlc3MlMjBFYXJidWRzfGVufDB8fDB8fHww', 40.00, 30.00),
  ('Laptop Stand', 'Improve your posture and comfort', 'https://images.unsplash.com/photo-1575399545768-5f1840c1312d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8OHx8TGFwdG9wJTIwU3RhbmR8ZW58MHx8MHx8fDA%3D', 20.00, 15.00),
  ('Gaming Mouse', 'Enhance your gaming precision', 'https://images.unsplash.com/photo-1629429408209-1f912961dbd8?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Mnx8R2FtaW5nJTIwTW91c2V8ZW58MHx8MHx8fDA%3D', 50.00, 40.00),
  ('Desk Lamp', 'Light up your workspace for better productivity', 'https://images.unsplash.com/photo-1601642964568-1917224f4e4d?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8NHx8RGVzayUyMExhbXB8ZW58MHx8MHx8fDA%3D', 30.00, 25.00),
  ('Fitness Tracker', 'Track your steps, calories, and sleep', 'https://images.unsplash.com/photo-1576243345690-4e4b79b63288?w=600&auto=format&fit=crop&q=60&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxzZWFyY2h8Nnx8Rml0bmVzcyUyMFRyYWNrZXJ8ZW58MHx8MHx8fDA%3D', 120.00, 100.00 )
  