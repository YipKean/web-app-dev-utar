CREATE TABLE announcement (
    id INT(11) AUTO_INCREMENT PRIMARY KEY,
    subject VARCHAR(255),
    message TEXT,
    type CHAR(1),
    posted DATETIME
);
