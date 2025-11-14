# Backend-Experiment4: Displaying Dynamic Content

## Steps

### 1. Import Database
Use `user_registration_db` and create a new table `posts`:

CREATE TABLE posts (
    id INT AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(100) NOT NULL,
    content TEXT NOT NULL,
    author_id INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
    FOREIGN KEY (author_id) REFERENCES users(id)
);

Insert sample data as needed.

### 2. Place Files
Put all files in:
MAMP: /Applications/MAMP/htdocs/experiment4

Files:
db_connect.php
display_posts.php

### 3. Run
MAMP:
http://localhost:8888/experiment4/display_posts.php
