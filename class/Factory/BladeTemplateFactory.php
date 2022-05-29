<?php 

class BladeTemplateFactory implements TemplateFactory
{
    public function titleTemplate(): TitleTemplate
    {
        return new BladeTitleTemplate();
    }

    public function PageTemplate(): PageTemplate
    {
        return new BladePageTemplate($this->titleTemplate());
    }

    public function render(): Render
    {
        return new BladeRender();
    }
}