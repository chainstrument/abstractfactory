<?php 

class SmartyPageTemplate extends BasePageTemplate
{
    public function getContentString(): string
    {
        $titleString = $this->titleTemplate->getTitle();

        return <<<HTML
        <div class="container">
            $titleString
            <article class="content">{{ content }}</article>
        </div>
        HTML;
    }
}