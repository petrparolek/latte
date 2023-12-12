<?php declare(strict_types = 1);

namespace Contributte\Latte\Extensions\Node;

use Generator;
use Latte\Compiler\Nodes\StatementNode;
use Latte\Compiler\PrintContext;

class VNode extends StatementNode
{

	public static function create(): self
	{
		return new self();
	}

	public function print(PrintContext $context): string
	{
		return 'echo $this->global->versionV;';
	}

	public function &getIterator(): Generator
	{
		false && yield; // @phpstan-ignore-line
	}

}
