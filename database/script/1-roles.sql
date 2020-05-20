

	INSERT INTO `roles` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(3, 'CRM Ventas', '2020-05-07 01:54:21', NULL, NULL),
	(4, 'CRM Admin', '2020-05-07 01:54:21', NULL, NULL);

	INSERT INTO `permissions` (`id`, `title`, `created_at`, `updated_at`, `deleted_at`) VALUES
	(47, 'web_administrator', '2020-05-07 02:00:13', NULL, NULL),
	(48, 'admin_zoho', '2020-05-07 02:08:15', NULL, NULL),
	(49, 'user_zoho', '2020-05-07 02:08:54', '2020-05-07 02:08:54', NULL);

	INSERT INTO `permission_role` (`role_id`, `permission_id`) VALUES
	(3, 49),
	(4, 48),
	(4, 49),
	(4, 16),
	(4, 12),
	(4, 15),
	(4, 13),
	(4, 14),
	(4, 11);

	INSERT INTO `users` (`id`, `session_id`, `name`, `user_name`, `email`, `email_verified_at`, `last_login`, `ip`, `blocked_date`, `active`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES

	(3, 'fhxG2JkMwihKUcqnkqx2we7DK4Uqx42BzHWOOS8l', 'Aministrador ZOHO', NULL, 'admin_zoho@admin.com', NULL, '2020-05-06 22:59:58', '127.0.0.1', NULL, 1, '$2y$10$sF//c8BZgkHBrCEaARe5Zu8pWfisDDeYLeChdFK8rHFhmCu/evJLW', NULL, '2020-05-07 02:18:29', '2020-05-07 02:59:58', NULL);


	INSERT INTO `role_user` (`user_id`, `role_id`) VALUES (3, 4);
