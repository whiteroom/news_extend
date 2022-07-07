<?php
namespace GeorgRinger\News\Domain\Model;

/**
 * This file is part of the "news" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 */

/**
 * File Reference
 */
class FileReference extends \TYPO3\CMS\Extbase\Domain\Model\FileReference
{


    /**
     * @var int
     */
    protected $showinsizes = 0;


    /**
     * Set showinsizes
     *
     * @param int $showinsizes
     */
    public function setShowinsizes($showinsizes)
    {
        $this->showinsizes = $showinsizes;
    }

    /**
     * Get showinsizes
     *
     * @return int
     */
    public function getShowinsizes()
    {
        return $this->showinsizes;
    }
}
