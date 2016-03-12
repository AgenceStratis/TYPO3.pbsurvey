<?php
namespace PatrickBroens\Pbsurvey\Domain\Model\Item;

/*
 * This file is part of the TYPO3 CMS project.
 *
 * It is free software; you can redistribute it and/or modify it under
 * the terms of the GNU General Public License, either version 2
 * of the License, or any later version.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * The TYPO3 project - inspiring people to share!
 */

use PatrickBroens\Pbsurvey\Domain\Model\Item\Abstracts\AbstractBoolean;
use PatrickBroens\Pbsurvey\Domain\Model\Item\Traits\DisplayTypeTrait;
use TYPO3\CMS\Core\Utility\GeneralUtility;

/**
 * Item type 4: Choice - True/False
 */
class ChoiceTrueFalse extends AbstractBoolean
{
    /**
     * TRAIT: DisplayTypeTrait
     *
     * FIELDS:
     * $displayType
     */
    use DisplayTypeTrait;

    /**
     * The language label
     *
     * @var string
     */
    protected static $languageLabel = 'LLL:EXT:pbsurvey/Resources/Private/Language/TCA/Item.xlf:field.value_default_true_false.';

    /**
     * The default value
     *
     * @var int
     */
    protected $valueDefaultTrueFalse;

    /**
     * Get the default boolean value
     *
     * @return int
     */
    public function getValueDefaultBoolean()
    {
        return $this->valueDefaultTrueFalse;
    }

    /**
     * Set the default value
     *
     * @param int $valueDefaultTrueFalse the value
     */
    public function setValueDefaultTrueFalse($valueDefaultTrueFalse)
    {
        $this->valueDefaultTrueFalse = (int)$valueDefaultTrueFalse;
    }
}