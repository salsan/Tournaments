<?php

declare(strict_types=1);

namespace Salsan\Tournaments;

use DOMDocument;
use DOMXPath;
use Salsan\Utils\DOM\DOMDocumentTrait;

class Query
{
    use DOMDocumentTrait;

    private DOMDocument $dom;
    private DOMXPath $xpath;
    private string $url = "https://www.torneionline.com/tornei.php";

    public function __construct(array $params)
    {
        $this->dom = new DOMDocument();

        $query = http_build_query($params);

        $this->url .= '?' . $query .  '&tipo=1';
        $this->dom = $this->getHTML($this->url, null);

        $this->xpath = new DOMXPath($this->dom);
    }

    public function getNumber(): int
    {
        $total = $this->getNodeText('//span[@class="tpolcorpobigbig"]/b');

        return (int) $total;
    }

    private function getNodeText($node): string
    {
        $data = $this->getNodeValue(
            $this->xpath,
            $node
        );

        return $data;
    }
}
