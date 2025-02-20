<?php

/**
 * @package api
 * @subpackage objects.factory
 */
class KalturaDeliveryProfileFactory {
	
	public static function getCoreDeliveryProfileInstanceByType($type) {
		$coreType = kPluginableEnumsManager::apiToCore('DeliveryProfileType', $type); 
		$class = DeliveryProfilePeer::getClassByDeliveryProfileType($coreType);
		return new $class();
	}
	
	public static function getDeliveryProfileInstanceByType($type) {
		switch ($type) {
			case KalturaDeliveryProfileType::GENERIC_HLS:
			case KalturaDeliveryProfileType::GENERIC_HLS_MANIFEST:
				return new KalturaDeliveryProfileGenericAppleHttp();
			case KalturaDeliveryProfileType::GENERIC_HDS:
			case KalturaDeliveryProfileType::GENERIC_HDS_MANIFEST:
				return new KalturaDeliveryProfileGenericHds();
			case KalturaDeliveryProfileType::GENERIC_HTTP:
					return new KalturaDeliveryProfileGenericHttp();
			case KalturaDeliveryProfileType::RTMP:
			case KalturaDeliveryProfileType::LIVE_RTMP:
				return new KalturaDeliveryProfileRtmp();
			case KalturaDeliveryProfileType::AKAMAI_HTTP:
				return new KalturaDeliveryProfileAkamaiHttp();
			case KalturaDeliveryProfileType::LIVE_HLS:
				return new KalturaDeliveryProfileLiveAppleHttp();
			case KalturaDeliveryProfileType::GENERIC_SS:
				return new KalturaDeliveryProfileGenericSilverLight();
			case KalturaDeliveryProfileType::GENERIC_RTMP:
				return new KalturaDeliveryProfileGenericRtmp();
			default:
				return new KalturaDeliveryProfile();
		}
	}
	
	public static function getTokenizerInstanceByType($type) {
		switch ($type) {
			case 'kLevel3UrlTokenizer':
				return new KalturaUrlTokenizerLevel3();
			case 'kLimeLightUrlTokenizer':
				return new KalturaUrlTokenizerLimeLight();
			case 'kAkamaiHttpUrlTokenizer':
				return new KalturaUrlTokenizerAkamaiHttp();
			case 'kAkamaiRtmpUrlTokenizer':
				return new KalturaUrlTokenizerAkamaiRtmp();
			case 'kAkamaiRtspUrlTokenizer':
				return new KalturaUrlTokenizerAkamaiRtsp();
			case 'kAkamaiSecureHDUrlTokenizer':
				return new KalturaUrlTokenizerAkamaiSecureHd();
			case 'kBitGravityUrlTokenizer':
				return new KalturaUrlTokenizerBitGravity();
			// Add other tokenizers here
			default:
				$apiObject = KalturaPluginManager::loadObject('KalturaTokenizer', $type);
				if($apiObject)
					return $apiObject;
				KalturaLog::err("Cannot load API object for core Tokenizer [" . $type . "]");
				return null;
		}
	}
	
	public static function getRecognizerByType($type) {
		switch ($type) {
			case 'kUrlRecognizerAkamaiG2O':
				return new KalturaUrlRecognizerAkamaiG2O();
			case 'kUrlRecognizer':
				return new KalturaUrlRecognizer();
			default:
				$apiObject = KalturaPluginManager::loadObject('KalturaRecognizer', $type);
				if($apiObject)
					return $apiObject;
				KalturaLog::err("Cannot load API object for core Recognizer [" . $type . "]");
				return null;
		}
	}

}
