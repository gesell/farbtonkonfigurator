<?php
namespace Gesell\Farbtonkonfigurator\Controller\Index;

use \Magento\Framework\App\Action\Action;

class Index extends Action
{
	/** @var  \Magento\Framework\View\Result\Page */
	protected $resultPageFactory;
	
	/**
	 *
	 * Hier laden wir die Result\PageFactory.
	 * Diese wird benutzt um unsere darzustellen (siehe unten).
	 * Das Ganze geschieht via Dependency Injection, was genau
	 * das bedeutet und wie DI in Magento 2 funktioniert wird im
	 * nächsten Kapitel erklärt.
	 *
	 * @param \Magento\Framework\App\Action\Context $context
	 * @param \Magento\Framework\View\Result\Page $resultPageFactory
	 */
	public function __construct(\Magento\Framework\App\Action\Context $context,
		\Magento\Framework\View\Result\PageFactory $resultPageFactory) {
		$this->resultPageFactory = $resultPageFactory;
		parent::__construct($context);
	}

	/**
	 * Benutzt die geladene PageFactory um die Seite zu erzeugen.
	 * Die PageFactory wird das Layout laden und rendern.
	 * Das Layout und die Blöcke definieren wir im nächsten Schritt
	 *
	 * @return \Magento\Framework\View\Result\PageFactory
	 */
	public function execute() {
		return $this->resultPageFactory->create();
	}
}