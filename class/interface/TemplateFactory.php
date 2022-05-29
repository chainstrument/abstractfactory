<?php
interface TemplateFactory
{
    public function titleTemplate(): TitleTemplate;

    public function pageTempalte(): PageTemplate;

    public function render(): Render;
}