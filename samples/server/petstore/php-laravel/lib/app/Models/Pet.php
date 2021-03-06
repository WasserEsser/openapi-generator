<?php
/**
 * Pet
 */
namespace app.Models;

/**
 * Pet
 */
class Pet {

    /** @var int $id */
    private $id;

    /** @var \app.Models\Category $category */
    private $category;

    /** @var string $name */
    private $name;

    /** @var string[] $photo_urls */
    private $photo_urls;

    /** @var \app.Models\Tag[] $tags */
    private $tags;

    /** @var string $status pet status in the store*/
    private $status;

}
