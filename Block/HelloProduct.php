<?php
namespace Gesell\Farbtonkonfigurator\Block;

class HelloProduct extends \Magento\Catalog\Block\Product\View\AbstractView {

public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result) {
return $result*333;
}

/*
 public function afterGetPrice(\Magento\Catalog\Model\Product $subject, $result)
    {
	$c1 = 2.0;
	$c2 = 4.0;
	$c3 = 10.0;
		
	if (isset($_POST['var_color_id'])) {
    $var_color = $_POST['var_color_id'];
	echo $var_color;
	
	if ($var_color == "C1") {
	echo $result*$c1;
	}
	if ($var_color == "C2") {
	echo $result*$c2;
	}
	if ($var_color == "C3") {
	echo $result*$c3;
	}
	
   }
	else
	{
	
	echo 'Not working!';
	}
	return $result*1;
	}
	*/
}


	/**
	 * Get the name of the current product
	 * @return string
	 */
	public function getProductName() {
		return $this->getProduct()->getName();
	}
}

