# SymfonyBlog
A blog built with Symfony 4

## Usage

#### Create a User with admin role :


+ modify defaults values in /src/DataFixtures/UserFixtures.php
+ run 'php bin/console doctrine:fixtures:load --append' in terminal


#### Routes for Posts :
##### Public

##### Admin
###### Basic
+ login : */login*
+ index : */admin*

###### Posts :
+ C : */admin/post/new*
+ R : */admin/post/* & */admin/post/{slug}-{id}* & */{slug}-{id}*
+ U : */admin/post/{id}/edit*
+ D : */admin/post/{id}*

###### Categories :
+ C : */admin/category/new*
+ R : */admin/category/* & */admin/category/{id}*
+ U : */admin/category/{id}/edit*
+ D : */admin/category/{id}*

### Journal
D1 ( 21/07 ) : Front end templates

D2 ( 23/07 ) : login / logout admin

D3 ( 26/07 ) : Posts CRUD + Categories CRUD & link to posts

D4 ( 27/07 ) : Admin index + Confirmation message for C_UD

D5 ( 28/07 ) : Post thumbnail + Front end-Back end integration