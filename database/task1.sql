CREATE TABLE posts (
    id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
    title VARCHAR(50),
    body TEXT,
    created DATETIME DEFAULT NULL,
);

INSERT INTO posts (title, body, created)
    VALUES ('Prwtos titlos', 'Keimeno keimeno keimeno 1.', NOW());
INSERT INTO posts (title, body, created)
    VALUES ('Deuteros titlos', 'Keimeno keimeno keimeno 2.', NOW());
INSERT INTO posts (title, body, created)
    VALUES ('Tritos titlos', 'Keimeno keimeno keimeno 3.', NOW());