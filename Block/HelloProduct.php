<?php
namespace gesell\farbtonkonfigurator\Block;

class HelloProduct extends \Magento\Catalog\Block\Product\View\AbstractView {

	/**
	 * Get the name of the current product
	 * @return string
	 */
	public function getProductName() {
		return $this->getProduct()->getName();
	}
}