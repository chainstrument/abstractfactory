
<?php 

class SmartyTitleTemplate implements TitleTemplate
{
    public function getTitle(): string
    {
        return "<h1>{{ title }}</h1>";
    }
}