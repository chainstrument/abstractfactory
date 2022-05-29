<?php 

class SmartyRender implements Render
{
    public function render(string $templateString, array $arguments = []): string
    {
        return Smarty::render($templateString, $arguments);
    }
}