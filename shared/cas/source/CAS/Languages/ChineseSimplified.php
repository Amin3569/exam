<?php

class CAS_Languages_ChineseSimplified implements CAS_Languages_LanguageInterface
{
    /**
     * Get the using server string
     *
     * @return string using server
     */
    public function getUsingServer()
    {
        return '连接的服务器';
    }

    /**
     * Get authentication wanted string
     *
     * @return string authentication wanted
     */
    public function getAuthenticationWanted()
    {
        return '请进行 CAS 认证！';
    }

    /**
     * Get logout string
     *
     * @return string logout
     */
    public function getLogout()
    {
        return '请进行 CAS 登出！';
    }

    /**
     * Get the should have been redirected string
     *
     * @return string should habe been redirected
     */
    public function getShouldHaveBeenRedirected()
    {
        return '你正被重定向到 CAS 服务器。<a href="%s">点击这里</a>继续。';
    }

    /**
    * Get authentication failed string
    *
    * @return string authentication failed
    */
    public function getAuthenticationFailed()
    {
        return 'CAS 认证失败！';
    }

    /**
    * Get the your were not authenticated string
    *
    * @return string not authenticated
    */
    public function getYouWereNotAuthenticated()
    {
        return '<p>你没有成功登录。</p><p>你可以<a href="%s">点击这里重新登录</a>。</p><p>如果问题依然存在，请<a href="mailto:%s">联系本站管理员</a>。</p>';
    }

    /**
    * Get the service unavailable string
    *
    * @return string service unavailable
    */
    public function getServiceUnavailable()
    {
        return '服务器 <b>%s</b> 不可用（<b>%s</b>）。';
    }
}