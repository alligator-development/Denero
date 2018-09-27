SELECT users.id as ID,
 		users.login as Login,
 		users.password as Password,
 		users.object_id, objects.id as Objects_id
 	FROM users INNER JOIN objects ON users.object_id = objects.id;