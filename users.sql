CREATE TABLE users (
    id INT(11) NOT NULL AUTO_INCREMENT,
    email VARCHAR(255) NOT NULL,
    password VARCHAR(255) NOT NULL,
    PRIMARY KEY (id),
    UNIQUE KEY (email)
);

-- Insert three users with MD5 hashed passwords
INSERT INTO user (email, password) VALUES
('user1@example.com', MD5('password1')),
('user2@example.com', MD5('password2')),
('user3@example.com', MD5('password3'));