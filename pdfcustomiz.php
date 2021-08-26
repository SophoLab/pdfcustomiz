<?php

class Pdfcustomiz extends Module
{
    public function __construct()
    {
        $this->name = 'pdfcustomiz';
        $this->version = '1.0.0';
        $this->author = 'Eliphaz';
        $this->need_instance = 0;

        $this->bootstrap = true;

        parent::__construct();

        $this->displayName = $this->getTranslator()->trans(
            'Pdf customiz',
            [],
            'Modules.Pdfcustomiz.Admin'
        );

        $this->description =
            $this->getTranslator()->trans(
                'Add new text on pdf invoice',
                [],
                'Modules.Pdfcustomiz.Admin'
            );

        $this->ps_versions_compliancy = [
            'min' => '1.7.7.0',
            'max' => _PS_VERSION_,
        ];
    }


    /**
     * This function is required in order to make module compatible with new translation system.
     *
     * @return bool
     */
    public function isUsingNewTranslationSystem()
    {
        return true;
    }


    public function install()
    {
        return parent::install();
    }


    public function uninstall()
    {
        return parent::uninstall();
    }
}