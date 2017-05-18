<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/contact', 'Default#contact', 'default_contact'],
		['GET', '/cgv', 'Default#cgv', 'default_cgv'],
		['GET', '/gallery', 'Default#gallery', 'default_gallery'],
		['GET', '/events', 'Default#events', 'default_events'],
		['GET', '/admin', 'Admin#dashboard', 'admin_dashboard'],
		['GET|POST', '/admin/ajout-article', 'Blog#addArticle', 'blog_addArticle'],
		['GET', '/admin/articles', 'Blog#listArticles', 'blog_listArticles'],
		['GET', '/api/articles', 'API#ajaxGetArticles', 'api_getArticles'],
		['GET', '/api/delArticle', 'API#delArticle', 'api_delArticle'],
	);
