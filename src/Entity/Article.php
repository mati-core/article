<?php

declare(strict_types=1);

namespace MatiCore\Article;

use Baraja\Doctrine\UUID\UuidIdentifier;
use Doctrine\ORM\Mapping as ORM;
use Nette\SmartObject;

/**
 * Class Article
 * @package MatiCore\Article
 * @ORM\Entity()
 * @ORM\Table(name="article__article")
 */
class Article
{

	use SmartObject;
	use UuidIdentifier;

}