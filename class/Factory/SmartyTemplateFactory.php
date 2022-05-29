<?php 

class SmartyTemplateFactory implements TemplateFactory
{
    public function titleTemplate(): TitleTemplate
    {
        return new SmartyTitleTemplate();
    }

    public function pageTemplate(): PageTemplate
    {
        return new SmartyPageTemplate($this->titleTemplate());
    }

    public function render(): Render
    {
        return new SmartyRender();
    }
}