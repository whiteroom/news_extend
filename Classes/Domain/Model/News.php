<?php
namespace GeorgRinger\NewsExtend\Domain\Model;

/***
 *
 * This file is part of the "Additional fields for news" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 *  (c) 2016 Georg Ringer, ringer.it
 *
 ***/

use TYPO3\CMS\Extbase\Annotation as Extbase;

/**
 * News
 */
class News extends \GeorgRinger\News\Domain\Model\News
{
    /**
     * imageW2
     *
     * @var bool
     */
    protected $imageW2 = false;

    /**
     * imageH2
     *
     * @var bool
     */
    protected $imageH2 = false;

    /**
     * subheader
     *
     * @var string
     */
    protected $subheader = '';

    /**
     * Returns the imageW2
     *
     * @return bool $imageW2
     */
    public function getImageW2()
    {
        return $this->imageW2;
    }

    /**
     * Sets the imageW2
     *
     * @param bool $imageW2
     * @return void
     */
    public function setImageW2($imageW2)
    {
        $this->imageW2 = $imageW2;
    }

    /**
     * Returns the imageH2
     *
     * @return bool $imageH2
     */
    public function getImageH2()
    {
        return $this->imageH2;
    }

    /**
     * Sets the imageH2
     *
     * @param bool $imageH2
     * @return void
     */
    public function setImageH2($imageH2)
    {
        $this->imageH2 = $imageH2;
    }

    /**
     * Returns the subheader
     *
     * @return string $subheader
     */
    public function getSubheader()
    {
        return $this->subheader;
    }

    /**
     * Sets the subheader
     *
     * @param string $subheader
     * @return void
     */
    public function setSubheader($subheader)
    {
        $this->subheader = $subheader;
    }

}
