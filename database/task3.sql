ALTER TABLE comments ADD status VARCHAR(30);

CREATE TRIGGER `EnableComment` BEFORE UPDATE ON `comments`
 FOR EACH ROW BEGIN
        IF NEW.comment <> OLD.comment THEN  BEGIN
            SET NEW.`status` = 'enables';
  END; END IF;
END