<?php

class CAS_Languages_Spanish implements CAS_Languages_LanguageInterface
{

    /**
     * Get the using server string
     *
     * @return string using server
     */
    public function getUsingServer()
    {
        return 'usando servidor';
    }

    /**
     * Get authentication wanted string
     *
     * @return string authentication wanted
     */
    public function getAuthenticationWanted()
    {
        return '¡Autentificación CAS necesaria!';
    }

    /**
     * Get logout string
     *
     * @return string logout
     */
    public function getLogout()
    {
        return '¡Salida CAS necesaria!';
    }

    /**
     * Get the should have been redirected string
     *
     * @return string should habe been redirected
     */
    public function getShouldHaveBeenRedirected()
    {
        return 'Ya debería haber sido redireccionado al servidor CAS. Haga click <a href="%s">aquí</a> para continuar.';
    }

    /**
     * Get authentication failed string
     *
     * @return string authentication failed
     */
    public function getAuthenticationFailed()
    {
        return '¡Autentificación CAS fallida!';
    }

    /**
     * Get the your were not authenticated string
     *
     * @return string not authenticated
     */
    public function getYouWereNotAuthenticated()
    {
        return '<p>No estás autentificado.</p><p>Puedes volver a intentarlo haciendo click <a href="%s">aquí</a>.</p><p>Si el problema persiste debería contactar con el <a href="mailto:%s">administrador de este sitio</a>.</p>';
    }

    /**
     * Get the service unavailable string
     *
     * @return string service unavailable
     */
    public function getServiceUnavailable()
    {
        return 'El servicio `<b>%s</b>\' no está disponible (<b>%s</b>).';
    }
}
?>
