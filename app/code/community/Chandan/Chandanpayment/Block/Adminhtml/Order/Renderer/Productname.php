<?php
class Chandan_Chandanpayment_Block_Adminhtml_Order_Renderer_Productname extends Mage_Adminhtml_Block_Widget_Grid_Column_Renderer_Abstract
{
	public function render(Varien_Object $row)
   {
		$order_id=$row->getData('increment_id');
		$order = Mage::getModel('sales/order')->loadByIncrementID($order_id);
		$items = $order->getAllItems();	
			foreach ($items as $itemId => $item)
			{
				if($item->getSku())
				{
					$name[] = $item->getName();
				}
			}
			if(count($name))
			{
				$nametext = implode(',',$name);
			}
		$conbinetext=$nametext;
		return $conbinetext;
	}
}
