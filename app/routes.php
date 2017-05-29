<?php

	$w_routes = array(
		// method | url | controller#methode | nom de la route (unique)
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/contact', 'Default#contact', 'default_contact'],
		['GET', '/cgv', 'Default#cgv', 'default_cgv'],
		['GET', '/gallery', 'Default#gallery', 'default_gallery'],
		['GET', '/events', 'Events#events', 'default_events'],
		['GET', '/admin', 'Admin#dashboard', 'admin_dashboard'],
		['GET|POST', '/admin/ajout-article', 'Blog#addArticle', 'blog_addArticle'],
		['GET', '/admin/articles', 'Blog#listArticles', 'blog_listArticles'],

		['GET', '/admin/documents', 'Admin#documents', 'admin_documents'],
		['GET', '/admin/ajout-documents', 'Admin#add_documents', 'admin_add_documents'],

		['GET', '/api/articles', 'API#ajaxGetArticles', 'api_getArticles'],
		['GET', '/api/delArticle', 'API#delArticle', 'api_delArticle'],
		//articles
		['GET', '/articles/[i:id]','Blog#voirArticle','blog_id_article'],
		['GET', '/articles/[a:slug]','Blog#voirArticle','blog_slug_article'],
		['GET|POST','/admin/edit-article/[:id]','Blog#editArticle', 'Blog_EditArticle'],
		//users admin
    ['GET|POST','/inscription','UserManagement#inscription','admin_inscription'],
		['GET|POST','/connexion','admin#connexion','login'],
		['GET|POST','/deconnexion','admin#deconnexion','admin_deconnexion'],
		['GET','/confirmation','admin#confirmation','admin_confirmation'],
		['GET|POST', '/admin/addParticipant', 'participant#addParticipant', 'participant_addParticipant'],
    ['POST','/login','UserManagement#loginUser','userManagement_login'],
		['GET','/listUsers','UserManagement#listUsers','userManagement_list'],
		['GET','/listAdmins','UserManagement#listAdmins','userManagement_list_admins'],
		['GET|POST','/deleteUser/[:id]','UserManagement#deleteUser','userManagement_delete_user'],
		['POST','/ajouterAdmin','UserManagement#addAdmin','userManagement_add_user_admin']
	);
