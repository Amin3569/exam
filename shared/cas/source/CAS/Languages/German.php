<?php


class CAS_Languages_German implements CAS_Languages_LanguageInterface
{
    /**
     * Get the using server string
     *
     * @return string using server
     */
    public function getUsingServer()
    {
        return 'via Server';
    }

    /**
     * Get authentication wanted string
     *
     * @return string authentication wanted
     */
    public function getAuthenticationWanted()
    {
        return 'CAS Authentifizierung erforderlich!';
    }

    /**
     * Get logout string
     *
     * @return string logout
     */
    public function getLogout()
    {
        return 'CAS Abmeldung!';
    }

    /**
     * Get the should have been redirected string
     *
     * @return string should habe been redirected
     */
    public function getShouldHaveBeenRedirected()
    {
        return 'eigentlich h&auml;ten Sie zum CAS Server weitergeleitet werden sollen. Dr&uuml;cken Sie <a href="%s">hier</a> um fortzufahren.';
    }

    /**
     * Get authentication failed string
     *
     * @return string authentication failed
     */
    public function getAuthenticationFailed()
    {
        return 'CAS Anmeldung fehlgeschlagen!';
    }

    /**
     * Get the your were not authenticated string
     *
     * @return string not authenticated
     */
    public function getYouWereNotAuthenticated()
    {
        return '<p>Sie wurden nicht angemeldet.</p><p>Um es erneut zu versuchen klicken Sie <a href="%s">hier</a>.</p><p>Wenn das Problem bestehen bleibt, kontaktieren Sie den <a href="mailto:%s">Administrator</a> dieser Seite.</p>';
    }

    /**
     * Get the service unavailable string
     *
     * @return string service unavailable
     */
    public function getServiceUnavailable()
    {
        return 'Der Dienst `<b>%s</b>\' ist nicht verf&uuml;gbar (<b>%s</b>).';
    }
}

?>
