CREATE OR REPLACE VIEW  products1view AS
SELECT products.* , categories.* FROM products 
INNER JOIN  categories on  products.products_cat = categories.categories_id ; 



CREATE OR REPLACE VIEW myfavorite AS
SELECT favorite.* , products.* , users.users_id FROM favorite 
INNER JOIN users ON users.users_id  = favorite.favorite_usersid
INNER JOIN products ON products.products_id  = favorite.favorite_productsid


