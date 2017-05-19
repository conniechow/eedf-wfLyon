<?php

	$w_routes = array(
		// method | url | controller#methode | nom de la route (unique)
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/contact', 'Default#contact', 'default_contact'],
		['GET', '/cgv', 'Default#cgv', 'default_cgv'],
		['GET', '/gallery', 'Default#gallery', 'default_gallery'],
		['GET', '/documents', 'Default#documents', 'default_documents'],

		['GET', '/admin', 'Admin#dashboard', 'admin_dashboard'],
		['GET|POST', '/admin/ajout-article', 'Blog#addArticle', 'blog_addArticle'],
		['GET', '/admin/articles', 'Blog#listArticles', 'blog_listArticles'],

		['GET', '/admin/documents', 'Admin#documents', 'admin_documents'],
		['GET', '/admin/ajout-documents', 'Admin#add_documents', 'admin_add_documents'],

		['GET', '/api/articles', 'API#ajaxGetArticles', 'api_getArticles'],
		['GET', '/api/delArticle', 'API#delArticle', 'api_delArticle'],
	);
