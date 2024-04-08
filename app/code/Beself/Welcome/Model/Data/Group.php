<?php
/**
 * Copyright © Magento, Inc. All rights reserved.
 * See COPYING.txt for license details.
 */

namespace Beself\Welcome\Model\Data;

/**
 * Extensión del modelo de grupo de clientes.
 * De esta manera reconocerá el get y set del nuevo "atributo"
 */
class Group extends \Magento\Customer\Model\Data\Group
{
    /**
     * Get isBToB
     *
     * @return int
     */
    public function getIsBToB()
    {
        return $this->_get('is_b_to_b');
    }

    /**
     * Set isBToB
     *
     * @param int $isBToB
     * @return $this
     */
    public function setIsBToB($isBToB)
    {
        return $this->setData('is_b_to_b', $isBToB);
    }

}
