CREATE TABLE category (
    id INT AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(255),
    PRIMARY KEY (id)
);

CREATE TABLE difficulty (
    id INT AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(255),
    PRIMARY KEY (id)
);

CREATE TABLE status (
    id INT AUTO_INCREMENT,
    name VARCHAR(30) NOT NULL,
    description VARCHAR(255),
    PRIMARY KEY (id)
);

CREATE TABLE trick (
    id INT AUTO_INCREMENT,
    titel VARCHAR(30) NOT NULL,
    created_at DATETIME NOT NULL,
    description VARCHAR(255) NOT NULL,
    difficulty INT,
    category INT,
    PRIMARY KEY (id),
    FOREIGN KEY (difficulty) REFERENCES difficulty(id),
    FOREIGN KEY (category) REFERENCES category(id)
);

CREATE TABLE step (
    id INT AUTO_INCREMENT,
    step_number INT NOT NULL,
    text VARCHAR(255) NOT NULL,
    trick INT NOT NULL,
    PRIMARY KEY (id),
    FOREIGN KEY (trick) REFERENCES trick(id)
);

CREATE TABLE user (
    username VARCHAR(30) NOT NULL,
    email VARCHAR(100) NOT NULL,
    password VARCHAR(255) NOT NULL,
    created_at DATETIME NOT NULL,
    PRIMARY KEY (username)
);

CREATE TABLE user_trick (
    user VARCHAR(30) NOT NULL,
    trick INT NOT NULL,
    is_favorite CHAR(1) NOT NULL,
    status INT,
    PRIMARY KEY (user, trick),
    FOREIGN KEY (user) REFERENCES user(username),
    FOREIGN KEY (trick) REFERENCES trick(id),
    FOREIGN KEY (status) REFERENCES status(id)
);