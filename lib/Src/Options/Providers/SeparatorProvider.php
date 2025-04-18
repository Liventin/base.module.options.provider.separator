<?php
namespace Base\Module\Src\Options\Providers;

use Base\Module\Src\Options\Interface\OptionProvider;

class SeparatorProvider implements OptionProvider
{
    public function getType(): string
    {
        return 'separator';
    }

    public function render(array $option, string $moduleId): string
    {
        return '<tr class="heading"><td colspan="2">' . htmlspecialcharsbx($option['name']) . '</td></tr>';
    }

    public function save(array $option, string $moduleId, mixed $value): void
    {
    }

    public function getParamsToArray(): array
    {
        return [];
    }
}
