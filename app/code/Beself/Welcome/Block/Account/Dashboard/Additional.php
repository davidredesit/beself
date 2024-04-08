<?php

namespace Beself\Welcome\Block\Account\Dashboard;

use Magento\Customer\Api\GroupRepositoryInterface;
use Magento\Framework\View\Element\Template;
use Magento\Framework\View\Element\Template\Context;
use Magento\Customer\Helper\Session\CurrentCustomer;
use Beself\Welcome\Model\Customer\Attribute\Source\ProductPreference;

/**
 * Con este bloque alimentamos el template, con los datos del cliente logueado
 */
class Additional extends Template
{
    public function __construct(
        private readonly Context $context,
        private readonly CurrentCustomer $currentCustomer,
        private readonly GroupRepositoryInterface $groupRepository,
        private readonly ProductPreference  $productPreference,
        array $data = []
    ) {
        parent::__construct($context, $data);
    }

    /**
     * @return bool
     */
    public function getIsB2B(): bool
    {
        $result = false;
        $customer = $this->currentCustomer->getCustomer();
        if ($customer && $customer->getGroupId()) {
            $group = $this->groupRepository->getById($customer->getGroupId());
            $result = $group->getIsBToB();
        }
        return $result;
    }

    /**
     * @return string
     */
    public function getProductPreference(): string
    {
        $result = '';
        $customer = $this->currentCustomer->getCustomer();
        if ($customer && $customer->getCustomAttribute('product_preference') && $customer->getCustomAttribute('product_preference')->getValue()) {
            $productPreferenceId = $customer->getCustomAttribute('product_preference')->getValue();
            $result = $this->productPreference->getProductPreferenceLabel($productPreferenceId);
        }
        return $result;
    }

    public function getCustomer()
    {
        try {
            return $this->currentCustomer->getCustomer();
        } catch (NoSuchEntityException $e) {
            return null;
        }
    }
}
