<?php
namespace Vette\CodeBlock\NodeTypes;

use Neos\Fusion\FusionObjects\AbstractFusionObject;

/**
 * CodeBlock Implementation
 */
class CodeBlockImplementation extends AbstractFusionObject {

    /**
     * Evaluate
     *
     * @return string
     */
    public function evaluate()
    {
        $source = $this->fusionValue('code');
        $language = $this->fusionValue('language');
        $showLineNumbers = $this->fusionValue('showLineNumbers');
        $startLinesAt = $this->fusionValue('startLinesAt');
        $highlightLines = $this->fusionValue('highlightLines');
        $inlineCss = $this->fusionValue('inlineCss');

        $geshi = new \GeSHi($source, $language);
        $geshi->start_line_numbers_at($startLinesAt);
        $geshi->highlight_lines_extra($highlightLines);
        $geshi->set_overall_class('code-block');

        if (!$inlineCss) {
            $geshi->enable_classes();
        }

        if ($showLineNumbers) {
            $geshi->enable_line_numbers(GESHI_FANCY_LINE_NUMBERS);
        }

        return $geshi->parse_code();
    }
}
