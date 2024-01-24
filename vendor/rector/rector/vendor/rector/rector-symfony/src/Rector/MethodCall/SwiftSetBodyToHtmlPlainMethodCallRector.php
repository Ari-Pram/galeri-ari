<?php

declare (strict_types=1);
namespace Rector\Symfony\Rector\MethodCall;

use PhpParser\Node;
use PhpParser\Node\Arg;
use PhpParser\Node\Expr\MethodCall;
use PhpParser\Node\Identifier;
use PHPStan\Type\ObjectType;
use Rector\Core\Rector\AbstractRector;
use Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample;
use Symplify\RuleDocGenerator\ValueObject\RuleDefinition;
/**
 * @see \Rector\Symfony\Tests\Rector\MethodCall\SwiftSetBodyToHtmlPlainMethodCallRector\SwiftSetBodyToHtmlPlainMethodCallRectorTest
 *
 * @changelog https://github.com/laravel/framework/pull/38481/files#diff-2310168aa86b70a22595ba784039cbdde829bd38245c9586eedd111dfd0f806d
 */
final class SwiftSetBodyToHtmlPlainMethodCallRector extends \Rector\Core\Rector\AbstractRector
{
    public function getRuleDefinition() : \Symplify\RuleDocGenerator\ValueObject\RuleDefinition
    {
        return new \Symplify\RuleDocGenerator\ValueObject\RuleDefinition('Changes setBody() method call on Swift_Message into a html() or plain() based on second argument', [new \Symplify\RuleDocGenerator\ValueObject\CodeSample\CodeSample(<<<'CODE_SAMPLE'
$message = new Swift_Message();

$message->setBody('...', 'text/html');

$message->setBody('...', 'text/plain');
$message->setBody('...');
CODE_SAMPLE
, <<<'CODE_SAMPLE'
$message = new Swift_Message();

$message->html('...');

$message->text('...');
$message->text('...');
CODE_SAMPLE
)]);
    }
    /**
     * @return array<class-string<Node>>
     */
    public function getNodeTypes() : array
    {
        return [\PhpParser\Node\Expr\MethodCall::class];
    }
    /**
     * @param MethodCall $node
     */
    public function refactor(\PhpParser\Node $node) : ?\PhpParser\Node
    {
        if (!$this->isObjectType($node->var, new \PHPStan\Type\ObjectType('Swift_Message'))) {
            return null;
        }
        if (!$this->isName($node->name, 'setBody')) {
            return null;
        }
        if (\count($node->args) === 2) {
            $firstArg = $node->args[1];
            if (!$firstArg instanceof \PhpParser\Node\Arg) {
                return null;
            }
            $secondArgValue = $this->valueResolver->getValue($firstArg->value);
            if ($secondArgValue === 'text/html') {
                unset($node->args[1]);
                $node->name = new \PhpParser\Node\Identifier('html');
                return $node;
            }
        }
        $node->name = new \PhpParser\Node\Identifier('plain');
        return $node;
    }
}
