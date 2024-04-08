<?php
declare(strict_types=1);

namespace Beself\Welcome\Model\Customer\Attribute\Source;

use Magento\Eav\Model\Entity\Attribute\Source\AbstractSource;

/**
 * Decidimos usar un source como origen de datos del atributo,
 * ya que es sencillo de mantener y según el enunciado no era necesario que los
 * datos fueran editables por los usuarios.
 */
class ProductPreference extends AbstractSource
{
    /**
     * Opciones disponibles
     *
     * @return array
     */
    public function getAllOptions()
    {
        return [
            ['value' => 0, 'label' => __('Seleccionar')],
            ['value' => 1, 'label' => __('Material de cardio')],
            ['value' => 2, 'label' => __('Material de musculación')],
            ['value' => 3, 'label' => __('Yoga y pilates')],
        ];
    }

    /**
     * Método que dado un id devuelve su label
     *
     * @param $id
     * @return string
     */
    public function getProductPreferenceLabel($id)
    {
        foreach ($this->getAllOptions() as $option)
        {
            if ($option['value'] == $id) {
                return $option['label']->__toString();
            }
        }
        return '';
    }
}
