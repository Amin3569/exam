<?php


class CAS_ProxiedService_Http_Get
extends CAS_ProxiedService_Http_Abstract
{

    /**
     * Add any other parts of the request needed by concrete classes
     *
     * @param CAS_Request_RequestInterface $request request interface
     *
     * @return void
     */
    protected function populateRequest (CAS_Request_RequestInterface $request)
    {
        // do nothing, since the URL has already been sent and that is our
        // only data.
    }
}
?>
