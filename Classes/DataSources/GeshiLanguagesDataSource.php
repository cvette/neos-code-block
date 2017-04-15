<?php
namespace Vette\CodeBlock\DataSources;

use Neos\ContentRepository\Domain\Model\NodeInterface;
use Neos\Neos\Service\DataSource\AbstractDataSource;

/**
 * GeshiLanguages DataSource
 */
class GeshiLanguagesDataSource extends AbstractDataSource
{

    /**
     * @return string
     */
    public static function getIdentifier()
    {
        return 'geshiLanguages';
    }

    /**
     * @param NodeInterface|null $node
     * @param array $arguments
     * @return array
     */
    public function getData(NodeInterface $node = null, array $arguments)
    {
        $geshi = new \GeSHi();
        $languages = $geshi->get_supported_languages(true);
        $data = array();
        foreach ($languages as $language => $fullName) {
            $data[] = array(
                'value' => $language,
                'label' => $fullName
            );
        }

        return $data;
    }
}
