<?php

class CAS_Languages_French implements CAS_Languages_LanguageInterface
{
    /**
     * Get the using server string
     *
     * @return string using server
     */
    public function getUsingServer()
    {
        return 'utilisant le serveur';
    }

    /**
     * Get authentication wanted string
     *
     * @return string authentication wanted
     */
    public function getAuthenticationWanted()
    {
        return 'Authentication CAS nécessaire&nbsp;!';
    }

    /**
     * Get logout string
     *
     * @return string logout
     */
    public function getLogout()
    {
        return 'Déconnexion demandée&nbsp;!';
    }

    /**
     * Get the should have been redirected string
     *
     * @return string should habe been redirected
     */
    public function getShouldHaveBeenRedirected()
    {
        return 'Vous auriez du etre redirigé(e) vers le serveur CAS. Cliquez <a href="%s">ici</a> pour continuer.';
    }

    /**
     * Get authentication failed string
     *
     * @return string authentication failed
     */
    public function getAuthenticationFailed()
    {
        return 'Authentification CAS infructueuse&nbsp;!';
    }

    /**
     * Get the your were not authenticated string
     *
     * @return string not authenticated
     */
    public function getYouWereNotAuthenticated()
    {
        return '<p>Vous n\'avez pas été authentifié(e).</p><p>Vous pouvez soumettre votre requete à nouveau en cliquant <a href="%s">ici</a>.</p><p>Si le problème persiste, vous pouvez contacter <a href="mailto:%s">l\'administrateur de ce site</a>.</p>';
    }

    /**
     * Get the service unavailable string
     *
     * @return string service unavailable
     */
    public function getServiceUnavailable()
    {
        return 'Le service `<b>%s</b>\' est indisponible (<b>%s</b>)';
    }
}

?>