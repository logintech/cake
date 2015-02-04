CREATE TABLE comments (
	`id` int(10) unsigned NOT NULL,
	`post_id` int(11) DEFAULT NULL,
	`name` varchar(50) DEFAULT NULL,
	`comment` text,
	`created` datetime DEFAULT NULL,
	FOREIGN KEY (post_id) REFERENCES posts(id)
)

INSERT INTO comments (post_id, name, comment, created) VALUES ('1', 'John', 'Comment comment comment 1.', NOW());
INSERT INTO comments (post_id, name, comment, created) VALUES ('2', 'Alex', 'Comment comment comment 2.', NOW());
INSERT INTO comments (post_id, name, comment, created) VALUES ('3', 'Jess', 'Comment comment comment 3.', NOW());
INSERT INTO comments (post_id, name, comment, created) VALUES ('1', 'Jack', 'Comment comment comment 4.', NOW());
INSERT INTO comments (post_id, name, comment, created) VALUES ('2', 'Kostas', 'Comment comment comment 5.', NOW());
INSERT INTO comments (post_id, name, comment, created) VALUES ('3', 'Leo', 'Comment comment comment 6.', NOW());