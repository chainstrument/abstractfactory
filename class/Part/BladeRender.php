<?php 

class BladeRender implements Render
{
    public function render(string $templateString, array $arguments = []): string
    {
        return Blade::render($templateString, $arguments);
    }
}
