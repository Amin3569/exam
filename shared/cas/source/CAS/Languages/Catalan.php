<?php


class CAS_Languages_Catalan implements CAS_Languages_LanguageInterface
{
    /**
    * Get the using server string
    *
    * @return string using server
    */
    public function getUsingServer()
    {
        return 'usant servidor';
    }

    /**
    * Get authentication wanted string
    *
    * @return string authentication wanted
    */
    public function getAuthenticationWanted()
    {
        return 'Autentificació CAS necessària!';
    }

    /**
    * Get logout string
    *
    * @return string logout
    */
    public function getLogout()
    {
        return 'Sortida de CAS necessària!';
    }

    /**
    * Get the should have been redirected string
    *
    * @return string should habe been redirected
    */
    public function getShouldHaveBeenRedirected()
    {
        return 'Ja hauria d\ haver estat redireccionat al servidor CAS. Feu click <a href="%s">aquí</a> per a continuar.';
    }

    /**
    * Get authentication failed string
    *
    * @return string authentication failed
    */
    public function getAuthenticationFailed()
    {
        return 'Autentificació CAS fallida!';
    }

    /**
    * Get the your were not authenticated string
    *
    * @return string not authenticated
    */
    public function getYouWereNotAuthenticated()
    {
        return '<p>No estàs autentificat.</p><p>Pots tornar a intentar-ho fent click <a href="%s">aquí</a>.</p><p>Si el problema persisteix hauría de contactar amb l\'<a href="mailto:%s">administrador d\'aquest llocc</a>.</p>';
    }

    /**
    * Get the service unavailable string
    *
    * @return string service unavailable
    */
    public function getServiceUnavailable()
    {
        return 'El servei `<b>%s</b>\' no està disponible (<b>%s</b>).';
    }
}
