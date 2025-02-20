<?php
/**
 * @package api
 * @subpackage objects
 */
class KalturaDeliveryProfile extends KalturaObject implements IFilterable 
{
	/**
	 * The id of the Delivery
	 *
	 * @var int
	 * @readonly
	 * @filter eq,in
	 */
	public $id;
	
	/**
	 * @var int
	 * @readonly
	 * @filter eq,in
	 */
	public $partnerId;
	
	/**
	 * The name of the Delivery
	 *
	 * @var string
	 */
	public $name;
	
	/**
	 * Delivery type
	 * @var KalturaDeliveryProfileType
	 */
	public $type;
	
	/**
	 * System name of the delivery
	 *
	 * @var string
	 * @filter eq,in
	 */
	public $systemName;
	
	/**
	 * The description of the Delivery
	 *
	 * @var string
	 */
	public $description;
	
	/**
	 * Creation time as Unix timestamp (In seconds)
	 *
	 * @var time
	 * @readonly
	 * @filter gte,lte,order
	 */
	public $createdAt;
	
	/**
	 * Update time as Unix timestamp (In seconds)
	 *
	 * @var time
	 * @readonly
	 * @filter gte,lte,order
	 */
	public $updatedAt;
	
	/**
	 * @var KalturaPlaybackProtocol
	 */
	public $streamerType;
	
	/**
	 * @var string
	 */
	public $url;
	
	/**
	 * the host part of the url
	 * @var string
	 * @readonly
	 */
	public $hostName;

	/**
	 * @var KalturaDeliveryStatus
	 * @filter eq,in
	 */
	public $status;
	
	/**
	 * @var KalturaUrlRecognizer
	 */
	public $recognizer;
	
	/**
	 * @var KalturaUrlTokenizer
	 */
	public $tokenizer;
	
	/**
	 * True if this is the systemwide default for the protocol
	 *
	 * @var KalturaNullableBoolean
	 * @readonly
	 */
	public $isDefault;
	
	/**
	 * the object from which this object was cloned (or 0)
	 * @var int
	 * @readonly
	 */
	public $parentId;			
	
	/**
	 * Comma separated list of supported media protocols. f.i. rtmpe
	 * @var string
	 */
	public $mediaProtocols;
	
	private static $map_between_objects = array
	(
			"createdAt",
			"description",
			"hostName",
			"id",
			"isDefault",
			"name",
			"parentId",
			"partnerId",
			"streamerType",
			"recognizer",
			"status",
			"systemName",
			"tokenizer",
			"updatedAt",
			"url",
			"type",
			"mediaProtocols",
	);
	
	public function getMapBetweenObjects ( )
	{
		return array_merge ( parent::getMapBetweenObjects() , self::$map_between_objects );
	}
	
	
	public function toObject($dbObject = null, $skip = array())
	{
		if (is_null($dbObject))
			$dbObject = KalturaDeliveryProfileFactory::getCoreDeliveryProfileInstanceByType($this->type);
	
		parent::toObject($dbObject, $skip);
		return $dbObject;
	}
	
	public function fromObject($sourceObject)
	{
		if(!$sourceObject)
			return;
			
		parent::fromObject($sourceObject);
		
		$this->recognizer = $this->transformRecognizer($sourceObject);
		$this->tokenizer = $this->transformTokenizer($sourceObject);
	}
	
	protected function transformRecognizer($sourceObject) {
		$dbObject = $sourceObject->getRecognizer();
		if(is_null($dbObject))
			return null;
	
		$apiObject = KalturaDeliveryProfileFactory::getRecognizerByType(get_class($dbObject));
		if(!is_null($apiObject))
			$apiObject->fromObject($dbObject);
		return $apiObject;
	}
	
	protected function transformTokenizer($sourceObject) {
		$dbObject = $sourceObject->getTokenizer();
		if(is_null($dbObject))
			return null;
	
		$apiObject = KalturaDeliveryProfileFactory::getTokenizerInstanceByType(get_class($dbObject));
		if(!is_null($apiObject))
			$apiObject->fromObject($dbObject);
		return $apiObject;
	}
	
	/* (non-PHPdoc)
	 * @see IFilterable::getExtraFilters()
	*/
	public function getExtraFilters()
	{
		return array();
	}
	
	/* (non-PHPdoc)
	 * @see IFilterable::getFilterDocs()
	*/
	public function getFilterDocs()
	{
		return array();
	}
}