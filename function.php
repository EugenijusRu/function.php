//Redirigir a todos los usuarios después del inicio de sesión

function custom_login_redirect($redirect_to, $request, $user) {
    // Verificar si el usuario está autenticado correctamente
    if ($user && !is_wp_error($user)) {
        // Comprobar si el usuario tiene el rol de Suscriptor ('subscriber')
        if (in_array('subscriber', $user->roles)) {
            // Definir la URL de la página de destino después del inicio de sesión
            $redirect_url = 'https://larradcomunicacion.com/pruebas3/3463-2/';

            // Devolver la URL de destino
            return $redirect_url;
        }
    }
    // Si no es suscriptor, o no se ha autenticado correctamente, devuelve la URL de redirección predeterminada
    return $redirect_to;
}
add_filter('login_redirect', 'custom_login_redirect', 10, 3);
