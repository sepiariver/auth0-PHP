<?php

namespace Auth0\SDK\API\Management;

class Branding extends GenericResource
{
    /**
     *
     * @return mixed
     */
    public function get()
    {
        $request = $this->apiClient->method('get')
        ->addPath('branding');

        return $request->call();
    }

    /**
     *
     * @param  array $data
     * @return mixed
     */
    public function update($data)
    {
        return $this->apiClient->method('patch')
        ->addPath('branding')
        ->withBody(json_encode($data))
        ->call();
    }

    /**
     * @TODO Break this out into BrandingTemplates similar to EmailTemplates
     * when the API follows suit. Until then, YAGNI
     * @return mixed
     */
    public function getTemplate()
    {
        $request = $this->apiClient->method('get')
        ->addPath('branding', 'templates', 'universal-login');

        return $request->call();
    }

    /**
     * @TODO Break this out into BrandingTemplates similar to EmailTemplates
     * when the API follows suit. Until then, YAGNI
     * @param  array $data
     * @return mixed
     */
    public function updateTemplate($data)
    {
        return $this->apiClient->method('put')
        ->addPath('branding', 'templates', 'universal-login')
        ->withBody(json_encode($data))
        ->call();
    }

    /**
     * @TODO Break this out into BrandingTemplates similar to EmailTemplates
     * when the API follows suit. Until then, YAGNI
     * @return mixed
     */
    public function deleteTemplate()
    {
        return $this->apiClient->method('delete')
        ->addPath('branding', 'templates', 'universal-login')
        ->call();
    }
}
