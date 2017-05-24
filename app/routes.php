<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/contact', 'Default#contact', 'default_contact'],
		['GET', '/cgv', 'Default#cgv', 'default_cgv'],
		['GET', '/gallery', 'Default#gallery', 'default_gallery'],
		['GET', '/admin', 'Admin#dashboard', 'admin_dashboard'],
		['GET|POST', '/admin/ajout-article', 'Blog#addArticle', 'blog_addArticle'],
		['GET', '/admin/articles', 'Blog#listArticles', 'blog_listArticles'],
		['GET', '/api/articles', 'API#ajaxGetArticles', 'api_getArticles'],
		['GET', '/api/delArticle', 'API#delArticle', 'api_delArticle'],
		//articles
		['GET', '/articles/[i:id]','Blog#voirArticle','blog_id_article'],
		['GET', '/articles/[a:slug]','Blog#voirArticle','blog_slug_article'],
		['GET|POST','/admin/edit-article/[:id]','Blog#editArticle', 'Blog_EditArticle'],
		//['GET','/admin/login','Admin#login','login'],
		//admin
		['GET|POST','/inscription','guillermo#inscription','admin_inscription'],
		['GET|POST','/connexion','guillermo#connexion','login'],
		['GET|POST','/deconnexion','guillermo#deconnexion','admin_deconnexion'],
		['GET','/confirmation','guillermo#confirmation','admin_confirmation'],
		['GET','/login','guillermo#login','guillermo_login'],
		['GET','/listUsers','UserManagement#listUsers','guillermo_userManagement_list'],
	);
