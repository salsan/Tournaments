<?php

declare(strict_types=1);

namespace Salsan\Tournaments;

use DOMDocument;
use Salsan\Utils\DOM\Form\DOMOptionTrait;
use Salsan\Utils\DOM\DOMDocumentTrait;

class Form
{
    use DOMOptionTrait;
    use DOMDocumentTrait;

    private DOMDocument $dom;
    private string $url = "https://www.torneionline.com/tornei.php";

    public function __construct()
    {
        $this->dom = $this->getHTML($this->url, null);
    }

    public function getTournamentsType(): array
    {
        return ($this->getArray("'tora'", $this->dom));
    }

    public function getTournamentsCompleted(): array
    {
        return ($this->getArray("'comp'", $this->dom));
    }

    public function getTournamentsSite(): array
    {
        return ($this->getArray("'sito'", $this->dom));
    }

    public function getTournamentsMatch(): array
    {
        return ($this->getArray("'part'", $this->dom));
    }

    public function getProvincesFirst(): array
    {
        return ($this->getArray("'pro1'", $this->dom));
    }

    public function getProvincesSecond(): array
    {
        return ($this->getArray("'pro2'", $this->dom));
    }

    public function getProvincesThird(): array
    {
        return ($this->getArray("'pro3'", $this->dom));
    }

    public function getRegionsFirst(): array
    {
        return ($this->getArray("'reg1'", $this->dom));
    }

    public function getRegionsSecond(): array
    {
        return ($this->getArray("'reg2'", $this->dom));
    }

    public function getRegionsThird(): array
    {
        return ($this->getArray("'reg3'", $this->dom));
    }

    public function getOrderFirst(): array
    {
        return ($this->getArray("'ord1'", $this->dom));
    }

    public function getOrderSecond(): array
    {
        return ($this->getArray("'ord2'", $this->dom));
    }

    public function getOrderThird(): array
    {
        return ($this->getArray("'ord3'", $this->dom));
    }

    public function getDirectionFirst(): array
    {
        return ($this->getArray("'sen1'", $this->dom));
    }

    public function getDirectionSecond(): array
    {
        return ($this->getArray("'sen2'", $this->dom));
    }

    public function getDirectionThird(): array
    {
        return ($this->getArray("'sen3'", $this->dom));
    }
}
