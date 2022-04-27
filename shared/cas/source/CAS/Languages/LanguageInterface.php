<?php


interface CAS_Languages_LanguageInterface
{
    /**
     * Get the using server string
     *
     * @return string using server
     */
    public function getUsingServer();

    /**
     * Get authentication wanted string
     *
     * @return string authentication wanted
     */
    public function getAuthenticationWanted();

    /**
     * Get logout string
     *
     * @return string logout
     */
    public function getLogout();

    /**
     * Get the should have been redirected string
     *
     * @return string should habe been redirected
     */
    public function getShouldHaveBeenRedirected();

    /**
     * Get authentication failed string
     *
     * @return string authentication failed
     */
    public function getAuthenticationFailed();

    /**
     * Get the your were not authenticated string
     *
     * @return string not authenticated
     */
    public function getYouWereNotAuthenticated();

    /**
     * Get the service unavailable string
     *
     * @return string service unavailable
     */
    public function getServiceUnavailable();

}
?>