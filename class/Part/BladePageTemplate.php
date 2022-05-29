<?php 

class BladePageTemplate extends BasePageTemplate
{
    public function getContentString(): string
    {
        $titleString = $this->titleTemplate->getTitle();

        return '<div class="container">
        '.$titleString.'
        <article class="content">{{$content}}</article>
        </div>';
    }
}