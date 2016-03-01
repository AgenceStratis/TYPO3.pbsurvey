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

use PatrickBroens\Pbsurvey\Domain\Model\Item\Abstracts\AbstractOpenEnded;

/**
 * Item type 12: Open Ended - Date
 */
class OpenEndedDate extends AbstractOpenEnded
{
    /**
     * The allowed condition operator groups
     *
     * @var array
     */
    protected static $allowedConditionOperatorGroups = [
        'equality',
        'containment',
        'mathematical',
        'provision'
    ];

    /**
     * Default date
     *
     * @var int
     */
    protected $dateDefault;

    /**
     * Maximum date
     *
     * @var int
     */
    protected $dateMaximum;

    /**
     * Minimum date
     *
     * @var int
     */
    protected $dateMinimum;

    /**
     * Get the default date
     *
     * @return string
     */
    public function getDateDefault()
    {
        $dateDefault = '';

        if ($this->dateDefault) {
            $dateDefault = date('d-m-Y', $this->dateDefault);
        }

        return $dateDefault;
    }

    /**
     * Set the default date
     *
     * @param int $dateDefault The date
     */
    public function setDateDefault($dateDefault)
    {
        $this->dateDefault = (int)$dateDefault;
    }

    /**
     * Get the maximum date
     *
     * @return string
     */
    public function getDateMaximum()
    {
        $dateMaximum = '';

        if ($this->dateMaximum) {
            $dateMaximum = date('d-m-Y', $this->dateMaximum);
        }

        return $dateMaximum;
    }

    /**
     * Set the maximum date
     *
     * @param int $dateMaximum The maximum date
     */
    public function setDateMaximum($dateMaximum)
    {
        $this->dateMaximum = (int)$dateMaximum;
    }

    /**
     * Get the minimum date
     *
     * @return string
     */
    public function getDateMinimum()
    {
        $dateMinimum = '';

        if ($this->dateMinimum) {
            $dateMinimum = date('d-m-Y', $this->dateMinimum);
        }
        return $dateMinimum;
    }

    /**
     * Set the minimum date
     *
     * @param int $dateMinimum The minimum date
     */
    public function setDateMinimum($dateMinimum)
    {
        $this->dateMinimum = (int)$dateMinimum;
    }
}