<?php

namespace Beself\Welcome\Api\Data;

use Magento\Framework\Api\ExtensibleDataInterface;

/**
 * Extensión de la interfaz de grupo de clientes.
 * De esta manera reconocerá el get y set del nuevo "atributo"
 */
interface GroupInterface extends \Magento\Customer\Api\Data\GroupInterface
{
    const IS_B_TO_B = 'is_b_to_b';

    /**
     * Get is b2b
     *
     * @return bool
     */
    public function getIsBToB();

    /**
     * Set is b2b
     *
     * @param bool $isBToB
     * @return bool
     */
    public function setIsBToB($isBToB);
}
