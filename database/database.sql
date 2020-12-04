CREATE DATABASE php_mysql_blog_basic;
USE php_mysql_blog_basic;

CREATE TABLE users(
    id INT (255) AUTO_INCREMENT NOT NULL,
    name VARCHAR(100) NULL,
    lastname VARCHAR(100) NULL,
    email VARCHAR(255) NOT NULL,
    password VARCHAR (255) NOT NULL,
    date DATE NULL,

    CONSTRAINT pk_users PRIMARY KEY (id),
    CONSTRAINT uq_email UNIQUE(email)
) ENGINE=InnoDb; -- por defecto, permite matener la integridad referencial

CREATE TABLE categories(
    id INT(255) AUTO_INCREMENT NOT NULL,
    name VARCHAR(100),

    CONSTRAINT pk_categories PRIMARY KEY (id)
)ENGINE=InnoDb; -- por defecto, permite matener la integridad referencial

-- cuando se elimine la categoria de esta entrada, que se elimine el registro donde este relacionado ON DELETE CASCADE
CREATE TABLE posts(
    id INT(255) AUTO_INCREMENT NOT NULL,
    user_id INT(255) NOT NULL,
    category_id INT(255) NOT NULL,
    title VARCHAR(255) NOT NULL,
    description MEDIUMTEXT,
    date DATE NOT NULL,

    CONSTRAINT pk_posts PRIMARY KEY(id),
    CONSTRAINT fk_post_user FOREIGN KEY (user_id) REFERENCES users(id),
    CONSTRAINT fk_post_category FOREIGN KEY(category_id) REFERENCES categories(id) ON DELETE CASCADE 
)ENGINE=InnoDb; -- por defecto, permite matener la integridad referencial



#INSERTS PARA USERS#

-- El id es null, por que es autoincrementable
INSERT INTO users VALUES(null, 'Alex', 'Ku Dzul', 'alex@email.com', '123', '2020-05-07');
INSERT INTO users VALUES(null, 'Manuel', 'Ku Dzul', 'manuel@email.com', '123', '2020-05-07');
INSERT INTO users VALUES(null, 'Fernando', 'Perez', 'fernando@email.com', '123', '2021-05-07');
INSERT INTO users VALUES(null, 'Luis', 'Gonzalez', 'luis@email.com', '123', '2021-05-07');


#INSERTAR FILAS SOLO CON CIERTAS COLUMNAS#

INSERT INTO users(email, password) VALUES('alex@alex.com', '123');


#INSERTS PARA CATEGORIAS#

INSERT INTO categories VALUES (null, 'Acción');
INSERT INTO categories VALUES (null, 'Rol');
INSERT INTO categories VALUES (null, 'Deportes');


#INSERTS PARA ENTRADAS#

INSERT INTO posts VALUES(null, 1, 1, 'GTA', 'Maecenas auctor, libero sit amet varius lacinia, ante orci tincidunt lorem, at posuere neque ligula eu sapien. Etiam pellentesque, leo a porta auctor, nisi magna pellentesque mauris, eu lacinia risus lectus at diam. In vel consequat orci. Integer quis tristique enim. Proin ut orci ut ex eleifend porttitor.', CURDATE());
INSERT INTO posts VALUES(null, 1, 2, 'Clash', 'Maecenas auctor, libero sit amet varius lacinia, ante orci tincidunt lorem, at posuere neque ligula eu sapien. Etiam pellentesque, leo a porta auctor, nisi magna pellentesque mauris, eu lacinia risus lectus at diam. In vel consequat orci. Integer quis tristique enim. Proin ut orci ut ex eleifend porttitor.', CURDATE());
INSERT INTO posts VALUES(null, 1, 3, 'Fifa', 'Maecenas auctor, libero sit amet varius lacinia, ante orci tincidunt lorem, at posuere neque ligula eu sapien. Etiam pellentesque, leo a porta auctor, nisi magna pellentesque mauris, eu lacinia risus lectus at diam. In vel consequat orci. Integer quis tristique enim. Proin ut orci ut ex eleifend porttitor.', CURDATE());

INSERT INTO posts VALUES(null, 2, 1, 'Assasins', 'Maecenas auctor, libero sit amet varius lacinia, ante orci tincidunt lorem, at posuere neque ligula eu sapien. Etiam pellentesque, leo a porta auctor, nisi magna pellentesque mauris, eu lacinia risus lectus at diam. In vel consequat orci. Integer quis tristique enim. Proin ut orci ut ex eleifend porttitor.', CURDATE());
INSERT INTO posts VALUES(null, 2, 2, 'Royale', 'Maecenas auctor, libero sit amet varius lacinia, ante orci tincidunt lorem, at posuere neque ligula eu sapien. Etiam pellentesque, leo a porta auctor, nisi magna pellentesque mauris, eu lacinia risus lectus at diam. In vel consequat orci. Integer quis tristique enim. Proin ut orci ut ex eleifend porttitor.', CURDATE());
INSERT INTO posts VALUES(null, 2, 3, 'PES', 'Maecenas auctor, libero sit amet varius lacinia, ante orci tincidunt lorem, at posuere neque ligula eu sapien. Etiam pellentesque, leo a porta auctor, nisi magna pellentesque mauris, eu lacinia risus lectus at diam. In vel consequat orci. Integer quis tristique enim. Proin ut orci ut ex eleifend porttitor.', CURDATE());

INSERT INTO posts VALUES(null, 3, 1, 'Call Of Duty', 'Maecenas auctor, libero sit amet varius lacinia, ante orci tincidunt lorem, at posuere neque ligula eu sapien. Etiam pellentesque, leo a porta auctor, nisi magna pellentesque mauris, eu lacinia risus lectus at diam. In vel consequat orci. Integer quis tristique enim. Proin ut orci ut ex eleifend porttitor.', CURDATE());
INSERT INTO posts VALUES(null, 3, 1, 'Fortnite', 'Maecenas auctor, libero sit amet varius lacinia, ante orci tincidunt lorem, at posuere neque ligula eu sapien. Etiam pellentesque, leo a porta auctor, nisi magna pellentesque mauris, eu lacinia risus lectus at diam. In vel consequat orci. Integer quis tristique enim. Proin ut orci ut ex eleifend porttitor.', CURDATE());
INSERT INTO posts VALUES(null, 3, 3, 'Formula 1', 'Maecenas auctor, libero sit amet varius lacinia, ante orci tincidunt lorem, at posuere neque ligula eu sapien. Etiam pellentesque, leo a porta auctor, nisi magna pellentesque mauris, eu lacinia risus lectus at diam. In vel consequat orci. Integer quis tristique enim. Proin ut orci ut ex eleifend porttitor.', CURDATE());