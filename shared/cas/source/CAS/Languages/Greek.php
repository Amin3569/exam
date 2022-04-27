<?php

class CAS_Languages_Greek implements CAS_Languages_LanguageInterface
{
    /**
     * Get the using server string
     *
     * @return string using server
     */
    public function getUsingServer()
    {
        return 'χρησιμοποιείται ο εξυπηρετητής';
    }

    /**
     * Get authentication wanted string
     *
     * @return string authentication wanted
     */
    public function getAuthenticationWanted()
    {
        return 'Απαιτείται η ταυτοποίηση CAS!';
    }

    /**
     * Get logout string
     *
     * @return string logout
     */
    public function getLogout()
    {
        return 'Απαιτείται η αποσύνδεση από CAS!';
    }

    /**
     * Get the should have been redirected string
     *
     * @return string should habe been redirected
     */
    public function getShouldHaveBeenRedirected()
    {
        return 'Θα έπρεπε να είχατε ανακατευθυνθεί στον εξυπηρετητή CAS. Κάντε κλίκ <a href="%s">εδώ</a> για να συνεχίσετε.';
    }

    /**
     * Get authentication failed string
     *
     * @return string authentication failed
     */
    public function getAuthenticationFailed()
    {
        return 'Η ταυτοποίηση CAS απέτυχε!';
    }

    /**
     * Get the your were not authenticated string
     *
     * @return string not authenticated
     */
    public function getYouWereNotAuthenticated()
    {
        return '<p>Δεν ταυτοποιηθήκατε.</p><p>Μπορείτε να ξαναπροσπαθήσετε, κάνοντας κλίκ <a href="%s">εδώ</a>.</p><p>Εαν το πρόβλημα επιμείνει, ελάτε σε επαφή με τον <a href="mailto:%s">διαχειριστή</a>.</p>';
    }

    /**
     * Get the service unavailable string
     *
     * @return string service unavailable
     */
    public function getServiceUnavailable()
    {
        return 'Η υπηρεσία `<b>%s</b>\' δεν είναι διαθέσιμη (<b>%s</b>).';
    }
}
?>
