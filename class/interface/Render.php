<?php 

interface Render
{
    public function render(string $templateString, array $arguments = []): string;
}