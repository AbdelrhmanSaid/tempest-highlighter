<?php

declare(strict_types=1);

namespace Tempest\Highlight\Languages\Twig\Patterns;

use Tempest\Highlight\IsPattern;
use Tempest\Highlight\Pattern;
use Tempest\Highlight\Tokens\TokenType;

final class TwigTokenPattern implements Pattern
{
    use IsPattern;

    public function __construct(
        private readonly string $regex,
        private readonly TokenType $type,
    ) {
    }

    public function getPattern(): string
    {
        return "/(?<match>{$this->regex})/";
    }

    public function getTokenType(): TokenType
    {
        return $this->type;
    }
}
