CREATE TABLE storage (
    id int(11) not null AUTO_INCREMENT,
    product_name varchar(255) NOT NULL,
    product_amount int(11),
    product_value decimal (8,2),
    date_create timestamp default current_timestamp() not null,
    PRIMARY KEY (id)
);

INSERT INTO `storage` (`id`, `product_name`, `product_amount`, `product_value`, `date_create`) VALUES
                                                                                                   (1, 'aaa', 50, '4.99', '2023-05-04 20:15:48'),
                                                                                                   (2, 'myszka', 5, '24.99', '2023-05-04 20:16:21'),
                                                                                                   (3, 'klawiatura', 50, '99.11', '2023-05-04 20:16:38');