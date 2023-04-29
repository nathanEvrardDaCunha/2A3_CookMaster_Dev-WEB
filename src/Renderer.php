<?php

namespace Source;

class Renderer
{
    //(ne pas toucher)
    public function __construct(private string $viewPath, private ?array $params)
    { }

    //Permet de récupérer la partie HTML des VIEWS (ne pas toucher)
    public function view(): string
    {
        ob_start();

        extract($this->params);

        require BASE_VIEW_PATH . $this->viewPath . '.php';

        return ob_get_clean();
    }

    //Permet de renvoyer la partie HTML des VIEWS (ne pas toucher)
    public static function make(string $viewPath, ?array $params): static
    {
        return new static($viewPath, $params);
    }

    //Je sais plus (ne pas toucher)
    public function __toString()
    {
       return $this->view();
    }
}