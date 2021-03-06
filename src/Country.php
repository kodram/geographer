<?php

namespace MenaraSolutions\Geographer;

use MenaraSolutions\Geographer\Collections\MemberCollection;

/**
 * Class Country
 * @package MenaraSolutions\FluentGeonames
 */
class Country extends Divisible
{
    /**
     * @var string
     */
    protected $memberClass = State::class;

    /**
     * @var string
     */
    protected static $parentClass = Earth::class;

    /**
     * @var array
     */
    protected $exposed = [
        'code' => 'ids.iso_3611.0',
        'code3' => 'ids.iso_3611.1',
        'geonamesCode' => 'ids.geonames',
        'area',
        'currency',
        'phonePrefix' => 'phone',
        'population',
        'continent',
        'language' => 'languages.0',
        'name'
    ];

    /**
     * @return string
     */
    public function getParentCode()
    {
        return 'SOL-III';
    }

    /**
     * @return bool|Divisible
     */
    public function getCapital()
    {
        return $this->findOne([
            'capital' => true
        ]);
    }

    /**
     * @return MemberCollection
     */
    public function getStates()
    {
        return $this->getMembers();
    }
}