<?php
/**
 * Created by PhpStorm.
 * User: jonathan
 * Date: 15/11/17
 * Time: 13:31
 */
namespace AppBundle\Twig;


class FilterTwig extends \Twig_Extension
{
    public function getFilters()
    {
        return array(
            new \Twig_SimpleFilter('trans', array($this, 'translate')),
            new \Twig_SimpleFilter('jsonDecode', array($this, 'jsonDecode')),
        );
    }

    public function translate($value)
    {
        return $this->get('translator')->trans($value);
    }

    public function jsonDecode($value)
    {
        return json_decode($value, true);
    }
}