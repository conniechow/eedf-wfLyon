<?php

	$w_routes = array(
		['GET', '/', 'Default#home', 'default_home'],
		['GET', '/contact', 'Default#contact', 'default_contact'],
		['GET', '/cgv', 'Default#cgv', 'default_cgv'],
		['GET', '/gallery', 'Default#gallery', 'default_gallery'],
		['GET', '/events', 'Events#events', 'default_events'],
		['GET', '/admin', 'Admin#dashboard', 'admin_dashboard'],
		['GET|POST', '/admin/ajout-article', 'Blog#addArticle', 'blog_addArticle'],
		['GET', '/admin/articles', 'Blog#listArticles', 'blog_listArticles'],
		['GET', '/api/articles', 'API#ajaxGetArticles', 'api_getArticles'],
		['GET', '/api/delArticle', 'API#delArticle', 'api_delArticle'],
		['GET', '/articles/[i:id]','Blog#voirArticle','blog_id_article'],
		['GET', '/articles/[a:slug]','Blog#voirArticle','blog_slug_article'],
		['GET|POST','/admin/edit-article/[:id]','Blog#editArticle', 'Blog_EditArticle'],
		
		//user management
		['GET|POST','/inscription','UserManagement#inscription','userManagement_inscription'],
		['GET','/listUsers','UserManagement#listUsers','userManagement_list_users'],
		['GET','/listAdmins','UserManagement#listAdmins','userManagement_list_admins'],
		['GET|POST','/deleteUser/[:id]','UserManagement#deleteUser','userManagement_delete_user'],
		['GET|POST','/detailsUser/[:id]','UserManagement#detailsUser','userManagement_details_user'],
		['GET','/detailsUserEditForm/[:id]','UserManagement#editDetailsUserForm','userManagement_edit_user_details_form'],
		['POST','/detailsUserEdit','UserManagement#editDetailsUser','userManagement_edit_user_details'],
		['GET','/ajouterAdmin','UserManagement#addAdminForm','userManagement_add_user_admin_form'],
		['POST','/ajouterAdmin','UserManagement#addAdmin','userManagement_add_user_admin'],
		['GET','/voirSession','UserManagement#getLoggedUser','userManagement_get_logged_user'],
  	['GET|POST','/inscription','userManagement#inscription','admin_inscription'],
		['GET|POST','/connexion','userManagement#connexion','login'],
		['GET|POST','/deconnexion','userManagement#deconnexion','admin_deconnexion'],
		['GET','/confirmation','userManagement#confirmation','admin_confirmation'],
    ['POST','/login','userManagement#loginUser','userManagement_login'],
		['GET','/listUsers','userManagement#listUsers','guillermo_userManagement_list'],
		//photos
		['GET|POST', '/admin/photos', 'photo#photos', 'photo_photos'],
		//documents
		['GET|POST', '/admin/documents', 'Document#documents', 'document_documents'],
		['GET|POST', '/admin/ajout-documents', 'Document#add_documents', 'document_add_documents'],
		['GET|POST', '/admin/modif-documents/[:id]', 'Document#edit_documents', 'document_edit_documents'],
		//members
		['GET|POST', '/admin/addMember', 'member#addMember', 'member_addMember'],
		['GET', '/admin/voir_members', 'Member#members', 'member_showMembers'],
	);
