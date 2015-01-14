CREATE TABLE product (id INT AUTO_INCREMENT, category_id INT NOT NULL, name VARCHAR(255) NOT NULL, subname VARCHAR(255), description LONGTEXT, specifications LONGTEXT, capacity BIGINT, price DECIMAL(18, 2) NOT NULL, is_available TINYINT(1) DEFAULT '1' NOT NULL, is_featured TINYINT(1) DEFAULT '0' NOT NULL, slug VARCHAR(255), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, UNIQUE INDEX product_sluggable_idx (slug), INDEX category_id_idx (category_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE product_category (id INT AUTO_INCREMENT, name VARCHAR(255) NOT NULL, description LONGTEXT, lft INT, rgt INT, level SMALLINT, slug VARCHAR(255), UNIQUE INDEX product_category_sluggable_idx (slug), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE product_color (id BIGINT AUTO_INCREMENT, product_id INT NOT NULL, color VARCHAR(6) NOT NULL, INDEX product_id_idx (product_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE product_image (id INT AUTO_INCREMENT, product_id INT, position BIGINT, image_name VARCHAR(255), image_name_x1 BIGINT, image_name_y1 BIGINT, image_name_x2 BIGINT, image_name_y2 BIGINT, UNIQUE INDEX product_image_position_sortable_idx (position, product_id), INDEX product_id_idx (product_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE categorias (id BIGINT AUTO_INCREMENT, nombre VARCHAR(100), root_id BIGINT, lft INT, rgt INT, level SMALLINT, PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ENGINE = InnoDB;
CREATE TABLE ciudades (id BIGINT AUTO_INCREMENT, nombre CHAR(35) DEFAULT '' NOT NULL, paises_codigo CHAR(3) DEFAULT '' NOT NULL, provincia CHAR(20) DEFAULT '' NOT NULL, INDEX paises_codigo_idx (paises_codigo), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ENGINE = InnoDB;
CREATE TABLE clientes (id BIGINT AUTO_INCREMENT, empresa VARCHAR(100) DEFAULT '' NOT NULL, cuit VARCHAR(13) DEFAULT '' NOT NULL, direccion VARCHAR(255) DEFAULT '' NOT NULL, ciudades_id BIGINT NOT NULL, telefono VARCHAR(100) DEFAULT '' NOT NULL, mail VARCHAR(100) NOT NULL, web VARCHAR(100) DEFAULT NULL, referencias_comerciales MEDIUMTEXT, transportes_id BIGINT NOT NULL, tiposactividades_id BIGINT NOT NULL, referidos MEDIUMTEXT, usuarios_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX fk_clientes_transportes_idx (transportes_id), INDEX fk_clientes_tiposactividades1_idx (tiposactividades_id), INDEX fk_clientes_ciudades1_idx (ciudades_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ENGINE = InnoDB;
CREATE TABLE paises (codigo CHAR(3), nombre CHAR(52) DEFAULT '' NOT NULL, continente VARCHAR(15) DEFAULT 'Asia' NOT NULL, region CHAR(26) DEFAULT '' NOT NULL, nombrelocal CHAR(45) DEFAULT '' NOT NULL, capital BIGINT, codigo2 CHAR(2) DEFAULT '' NOT NULL, PRIMARY KEY(codigo)) DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ENGINE = InnoDB;
CREATE TABLE productos (id BIGINT AUTO_INCREMENT, nombre VARCHAR(150) NOT NULL, descripcion MEDIUMTEXT, codbarras_proveedor VARCHAR(250) NOT NULL, stock BIGINT DEFAULT 0 NOT NULL, stock_min BIGINT DEFAULT 0 NOT NULL, stock_reposicion BIGINT DEFAULT 0 NOT NULL, foto1 VARCHAR(255), foto2 VARCHAR(255), foto3 VARCHAR(255), foto4 VARCHAR(255), foto5 VARCHAR(255), foto6 VARCHAR(255), categorias_id BIGINT NOT NULL, precio FLOAT(18, 2) DEFAULT 0 NOT NULL, INDEX fk_productos_categorias1_idx (categorias_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ENGINE = InnoDB;
CREATE TABLE sf_guard_forgot_password (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, unique_key VARCHAR(255), expires_at DATETIME NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_group_permission (group_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(group_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_permission (id BIGINT AUTO_INCREMENT, name VARCHAR(255) UNIQUE, description TEXT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_remember_key (id BIGINT AUTO_INCREMENT, user_id BIGINT, remember_key VARCHAR(32), ip_address VARCHAR(50), created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX user_id_idx (user_id), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user (id BIGINT AUTO_INCREMENT, first_name VARCHAR(255), last_name VARCHAR(255), email_address VARCHAR(255) NOT NULL UNIQUE, username VARCHAR(128) NOT NULL UNIQUE, algorithm VARCHAR(128) DEFAULT 'sha1' NOT NULL, salt VARCHAR(128), password VARCHAR(128), is_active TINYINT(1) DEFAULT '1', is_super_admin TINYINT(1) DEFAULT '0', last_login DATETIME, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX is_active_idx_idx (is_active), PRIMARY KEY(id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_group (user_id BIGINT, group_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, group_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_permission (user_id BIGINT, permission_id BIGINT, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, PRIMARY KEY(user_id, permission_id)) ENGINE = INNODB;
CREATE TABLE sf_guard_user_profile (id BIGINT AUTO_INCREMENT, user_id BIGINT NOT NULL, first_name VARCHAR(200), last_name VARCHAR(200), token VARCHAR(32), empresa VARCHAR(100) DEFAULT '' NOT NULL, cuit VARCHAR(13) DEFAULT '' NOT NULL, direccion VARCHAR(255) DEFAULT '' NOT NULL, ciudades_id BIGINT NOT NULL, telefono VARCHAR(100) DEFAULT '' NOT NULL, mail VARCHAR(100) NOT NULL, web VARCHAR(100) DEFAULT NULL, referencias_comerciales MEDIUMTEXT, transportes_id BIGINT NOT NULL, tiposactividades_id BIGINT UNSIGNED NOT NULL, referidos MEDIUMTEXT, usuarios_id BIGINT NOT NULL, created_at DATETIME NOT NULL, updated_at DATETIME NOT NULL, INDEX fk_clientes_transportes_idx (transportes_id), INDEX fk_clientes_tiposactividades1_idx (tiposactividades_id), INDEX fk_clientes_ciudades1_idx (ciudades_id), INDEX user_id_idx (user_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ENGINE = InnoDB;
CREATE TABLE tiposactividades (id BIGINT UNSIGNED, nombre VARCHAR(100) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ENGINE = InnoDB;
CREATE TABLE tiposactividades (id BIGINT UNSIGNED, nombre VARCHAR(45) NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ENGINE = InnoDB;
CREATE TABLE transportes (id BIGINT AUTO_INCREMENT, nombre VARCHAR(100) DEFAULT '' NOT NULL, direccion VARCHAR(200) DEFAULT '' NOT NULL, ciudades_id BIGINT NOT NULL, telefono VARCHAR(100) NOT NULL, mail VARCHAR(100) NOT NULL, INDEX fk_transportes_ciudades1_idx (ciudades_id), PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ENGINE = InnoDB;
CREATE TABLE usuarios (id BIGINT UNSIGNED, nombre VARCHAR(150) NOT NULL, password VARCHAR(150) NOT NULL, tipo VARCHAR(10) DEFAULT 'cliente' NOT NULL, PRIMARY KEY(id)) DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci ENGINE = InnoDB;
ALTER TABLE product ADD CONSTRAINT product_category_id_product_category_id FOREIGN KEY (category_id) REFERENCES product_category(id) ON DELETE CASCADE;
ALTER TABLE product_color ADD CONSTRAINT product_color_product_id_product_id FOREIGN KEY (product_id) REFERENCES product(id) ON DELETE CASCADE;
ALTER TABLE product_image ADD CONSTRAINT product_image_product_id_product_id FOREIGN KEY (product_id) REFERENCES product(id) ON DELETE CASCADE;
ALTER TABLE ciudades ADD CONSTRAINT ciudades_paises_codigo_paises_codigo FOREIGN KEY (paises_codigo) REFERENCES paises(codigo);
ALTER TABLE clientes ADD CONSTRAINT clientes_transportes_id_transportes_id FOREIGN KEY (transportes_id) REFERENCES transportes(id);
ALTER TABLE clientes ADD CONSTRAINT clientes_tiposactividades_id_tiposactividades_id FOREIGN KEY (tiposactividades_id) REFERENCES tiposactividades(id);
ALTER TABLE clientes ADD CONSTRAINT clientes_ciudades_id_ciudades_id FOREIGN KEY (ciudades_id) REFERENCES ciudades(id);
ALTER TABLE productos ADD CONSTRAINT productos_categorias_id_categorias_id FOREIGN KEY (categorias_id) REFERENCES categorias(id);
ALTER TABLE sf_guard_forgot_password ADD CONSTRAINT sf_guard_forgot_password_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_group_permission ADD CONSTRAINT sf_guard_group_permission_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_remember_key ADD CONSTRAINT sf_guard_remember_key_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_group ADD CONSTRAINT sf_guard_user_group_group_id_sf_guard_group_id FOREIGN KEY (group_id) REFERENCES sf_guard_group(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_permission ADD CONSTRAINT sf_guard_user_permission_permission_id_sf_guard_permission_id FOREIGN KEY (permission_id) REFERENCES sf_guard_permission(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_profile ADD CONSTRAINT sf_guard_user_profile_user_id_sf_guard_user_id FOREIGN KEY (user_id) REFERENCES sf_guard_user(id) ON DELETE CASCADE;
ALTER TABLE sf_guard_user_profile ADD CONSTRAINT sf_guard_user_profile_transportes_id_transportes_id FOREIGN KEY (transportes_id) REFERENCES transportes(id);
ALTER TABLE sf_guard_user_profile ADD CONSTRAINT sf_guard_user_profile_tiposactividades_id_tiposactividades_id FOREIGN KEY (tiposactividades_id) REFERENCES tiposactividades(id);
ALTER TABLE sf_guard_user_profile ADD CONSTRAINT sf_guard_user_profile_ciudades_id_ciudades_id FOREIGN KEY (ciudades_id) REFERENCES ciudades(id);
ALTER TABLE transportes ADD CONSTRAINT transportes_ciudades_id_ciudades_id FOREIGN KEY (ciudades_id) REFERENCES ciudades(id);
