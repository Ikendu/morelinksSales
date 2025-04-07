

CREATE TABLE seller_interest (
    id INT AUTO_INCREMENT PRIMARY KEY,
    full_name VARCHAR(100) NOT NULL,
    email VARCHAR(100) NOT NULL,
    phone VARCHAR(20) NOT NULL,
    business_name VARCHAR(100),
    furniture_type VARCHAR(100),
    city VARCHAR(100),
    message TEXT,
    consent BOOLEAN DEFAULT 0
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
