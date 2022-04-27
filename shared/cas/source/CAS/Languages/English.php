<?php

class CAS_Languages_English implements CAS_Languages_LanguageInterface
{
    /**
     * Get the using server string
     *
     * @return string using server
     */
    public function getUsingServer()
    {
        return 'using server';
    }

    /**
     * Get authentication wanted string
     *
     * @return string authentication wanted
     */
    public function getAuthenticationWanted()
    {
        return 'CAS Authentication wanted!';
    }

    /**
     * Get logout string
     *
     * @return string logout
     */
    public function getLogout()
    {
        return 'CAS logout wanted!';
    }

    /**
     * Get the should have been redirected string
     *
     * @return string should habe been redirected
     */
    public function getShouldHaveBeenRedirected()
    {
        return 'You should already have been redirected to the CAS server. Click <a href="%s">here</a> to continue.';
    }

    /**
    * Get authentication failed string
    *
    * @return string authentication failed
    */
    public function getAuthenticationFailed()
    {
        return 'CAS Authentication failed!';
    }

    /**
    * Get the your were not authenticated string
    *
    * @return string not authenticated
    */
    public function getYouWereNotAuthenticated()
    {
        return '<p>You were not authenticated.</p><p>You may submit your request again by clicking <a href="%s">here</a>.</p><p>If the problem persists, you may contact <a href="mailto:%s">the administrator of this site</a>.</p>';
    }

    /**
    * Get the service unavailable string
    *
    * @return string service unavailable
    */
    public function getServiceUnavailable()
    {
        return 'The service `<b>%s</b>\' is not available (<b>%s</b>).';
    }
}