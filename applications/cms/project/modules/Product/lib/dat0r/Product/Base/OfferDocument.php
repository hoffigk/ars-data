<?php
/*              AUTOGENERATED CODE - DO NOT EDIT !
This base class was generated by the Dat0r library (https://github.com/berlinonline/Dat0r)
on 2013-11-05 20:29:47 and is closed to modifications by any meaning.
If you are looking for a place to alter the behaviour of 'Offer' documents,
then the 'OfferDocument' (skeleton) class probally might be a good place to look. */

namespace Honeybee\Domain\Product\Base;

use Dat0r\Core\Document;

/**
 * Serves as the base class to the 'Offer' document skeleton.
 */
abstract class OfferDocument extends Document\Document
{
    /**
     * Returns an 'Offer' document's article_number.
     *
     * @return 
     */
    public function getArticleNumber()
    {
        return $this->getValue('article_number');
    }

    /**
     * Sets an 'Offer' document's article_number.
     *
     * @param  $article_number
     */
    public function setArticleNumber($article_number)
    {
        $this->setValue('article_number', $article_number);
    }

    /**
     * Returns an 'Offer' document's detail.
     *
     * @return 
     */
    public function getDetail()
    {
        return $this->getValue('detail');
    }

    /**
     * Sets an 'Offer' document's detail.
     *
     * @param  $detail
     */
    public function setDetail($detail)
    {
        $this->setValue('detail', $detail);
    }
}