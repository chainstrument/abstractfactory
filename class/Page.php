<?php 

class Page{

    protected $title;

    protected $body;

    public function __construct($title, $body)
    {
        $this->title = $title;
        $this->body = $body;
    }


    public function render(TemplateFactory $factory) :string
    {

        $pageTemplate = $factory->pageTemplate();

        $render = $factory->render();

        return $render->render($pageTemplate->getContentString(),
            [
                'title' => $this->title,
                'content' => $this->body,
            ]);


    }
}