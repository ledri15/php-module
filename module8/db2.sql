CREATE TABLE categories(
    id INTEGER PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
)


CREATE TABLE products(
    id INTEGER PRIMARY KEY,
    name VARCHAR(255) NOT NULL,
    category_id INTEGER NOT NULL,
    FOREIGN KEY (category_id) REFERENCES categories(id)

);

INSERT INTO categories(id, name) VALUES
(1, 'fruit'),
(2, 'fruit'),
(3, 'fruit'),
(4, 'fruit'),

(1, 'Apple', 1)
(2, 'Bananas', 2)
(3, 'cookie', 3)
(4, 'bread', 4)
(5, 'rice', 5)
(6, 'pasta', 6)
(7, 'oranges', 7)