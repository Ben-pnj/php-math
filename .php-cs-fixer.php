cat > .php-cs-fixer.php <<'PHP'
<?php

$finder = PhpCsFixer\Finder::create()
    ->in([__DIR__.'/src', __DIR__.'/tests']); // dossiers à analyser

return (new PhpCsFixer\Config())
    ->setRiskyAllowed(true)
    ->setRules([
        '@PSR12' => true,
        'no_unused_imports' => true,
        'ordered_imports' => true,
        'single_quote' => true,
        'strict_param' => true,
    ])
    ->setFinder($finder);

