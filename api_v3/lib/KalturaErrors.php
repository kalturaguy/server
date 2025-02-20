<?php
/**
 * @package api
 * @subpackage errors
 */
class KalturaErrors extends APIErrors
{
	/**
	 * General Errors
	 *
	 */
	
	//
	const INTERNAL_SERVERL_ERROR = "INTERNAL_SERVERL_ERROR;;Internal server error occurred";

	// should be used for internal actions only
	const INTERNAL_SERVERL_ERROR_DEBUG = "INTERNAL_SERVERL_ERROR;ERROR;Internal server error occurred \"@ERROR@\"";

	//
	const MISSING_KS = "MISSING_KS;;Missing KS, session not established";

	// KS - the ks string, ERR_CODE - error code, ERR_DESC - error description
	const INVALID_KS = "INVALID_KS;KSID,ERR_CODE,ERR_DESC;Invalid KS \"@KSID@\", Error \"@ERR_CODE@,@ERR_DESC@\"";

	//
	const SERVICE_NOT_SPECIFIED = "SERVICE_NOT_SPECIFIED;;Service name was not specified, please specify one";

	// SRV_NAME - service name
	const SERVICE_DOES_NOT_EXISTS = "SERVICE_DOES_NOT_EXISTS;SRV_NAME;Service \"@SRV_NAME@\" does not exists";

	// XML_FIELD - xml field
	const INVALID_PARAMETER_CHAR= "INVALID_PARAMETER_CHAR;XML_FIELD;Invalid char in \"@XML_FIELD@\" field";

	//
	const ACTION_NOT_SPECIFIED = "ACTION_NOT_SPECIFIED;;Action name was not specified, please specify one";

	// ACTION_NAME - action name, SERVICE_NAME - service name
	const ACTION_DOES_NOT_EXISTS = "ACTION_DOES_NOT_EXISTS;ACTION_NAME,SERVICE_NAME;Action \"@ACTION_NAME@\" does not exists for service \"@SERVICE_NAME@\"";

	// ACTION_NAME - action name
	const ACTION_FORBIDDEN = "ACTION_FORBIDDEN;ACTION_NAME;Action \"@ACTION_NAME@\" is forbidden for use";

	// PARAM_NAME - parameter name
	const MISSING_MANDATORY_PARAMETER = "MISSING_MANDATORY_PARAMETER;PARAM_NAME;Missing parameter \"@PARAM_NAME@\"";

	// INVALID_OBJ_TYPE - invalid object type
	const INVALID_OBJECT_TYPE = "INVALID_OBJECT_TYPE;INVALID_OBJ_TYPE;Invalid object type \"@INVALID_OBJ_TYPE@\"";

	// ENUM_VAL - enum value, PARAM_NAME - parameter name, ENUM_TYPE - enum type
	const INVALID_ENUM_VALUE = "INVALID_ENUM_VALUE;ENUM_VAL,PARAM_NAME,ENUM_TYPE;Invalid enumeration value \"@ENUM_VAL@\" for parameter \"@PARAM_NAME@\", expecting enumeration type \"@ENUM_TYPE@\"";

	// PID - partner id
	const INVALID_PARTNER_ID = "INVALID_PARTNER_ID;PID;Invalid partner id \"@PID@\"";

	// SRV_NAME - service , ACTION_NAME - action
	const INVALID_SERVICE_CONFIGURATION = "INVALID_SERVICE_CONFIGURATION;SRV_NAME,ACTION_NAME;Invalid service configuration. Unknown service [@SRV_NAME@:@ACTION_NAME@].";

	const OBJECT_TYPE_ABSTRACT = "OBJECT_TYPE_ABSTRACT;OBJ_TYPE;The object type \"@OBJ_TYPE@\" is abstract, use one of the object implementations";

	const PROPERTY_VALIDATION_CANNOT_BE_NULL =  "PROPERTY_VALIDATION_CANNOT_BE_NULL;PROP_NAME;The property \"@PROP_NAME@\" cannot be null";

	const PROPERTY_VALIDATION_ALL_MUST_BE_NULL_BUT_ONE = "PROPERTY_VALIDATION_ALL_MUST_BE_NULL_BUT_ONE;PROP_NAME;Only one of the passed properties: @PROP_NAME@ should not be null";

	const PROPERTY_VALIDATION_MIN_LENGTH = "PROPERTY_VALIDATION_MIN_LENGTH;PROP_NAME,MIN_LEN;The property \"@PROP_NAME@\" must have a min length of @MIN_LEN@ characters";

	const PROPERTY_VALIDATION_MAX_LENGTH = "PROPERTY_VALIDATION_MAX_LENGTH;PROP_NAME,MAX_LEN;The property \"@PROP_NAME@\" cannot have more than @MAX_LEN@ characters";

	const PROPERTY_VALIDATION_NUMERIC_VALUE = "PROPERTY_VALIDATION_NUMERIC_VALUE;PROP_NAME;The property \"@PROP_NAME@\" must be numeric";

	const PROPERTY_VALIDATION_WRONG_FORMAT = "PROPERTY_VALIDATION_WRONG_FORMAT;PROP_NAME,FORMAT;The property \"@PROP_NAME@\" must match format @FORMAT@";

	const PROPERTY_VALIDATION_MIN_VALUE = "PROPERTY_VALIDATION_MIN_VALUE;PROP_NAME,MIN_VAL;The property \"@PROP_NAME@\" must have a min value of @MIN_VAL@";

	const PROPERTY_VALIDATION_MAX_VALUE = "PROPERTY_VALIDATION_MAX_VALUE;PROP_NAME,MAX_VAL;The property \"@PROP_NAME@\" must have a max value of @MAX_VAL@";

	const PROPERTY_VALIDATION_NOT_UPDATABLE = "PROPERTY_VALIDATION_NOT_UPDATABLE;PROP_NAME;The property \"@PROP_NAME@\" cannot be updated";

	const PROPERTY_VALIDATION_ADMIN_PROPERTY = "PROPERTY_VALIDATION_ADMIN_PROPERTY;PROP_NAME;The property \"@PROP_NAME@\" is updatable with admin session only";

	const PROPERTY_VALIDATION_ENTRY_STATUS =  "PROPERTY_VALIDATION_ENTRY_STATUS;PROP_NAME,STATUS;The property \"@PROP_NAME@\" cannot be set for entry status \"@STATUS@\"";

	const INVALID_USER_ID = "INVALID_USER_ID;;Invalid user id";

	const DATA_CENTER_ID_NOT_FOUND = "DATA_CENTER_ID_NOT_FOUND;DCID;There is no data center with id [@DCID@]";

	const PLUGIN_NOT_AVAILABLE_FOR_PARTNER = "PLUGIN_NOT_AVAILABLE_FOR_PARTNER;PLUGIN,PARTNER;Plugin [@PLUGIN@] is not available for partner [@PARTNER@]";

	const SYSTEM_NAME_ALREADY_EXISTS = "SYSTEM_NAME_ALREADY_EXISTS;SYS_NAME;System name [@SYS_NAME@] already exists";

	const LOCK_TIMED_OUT = "LOCK_TIMED_OUT;;Timed out while attempting to grab lock";
	
	const MAX_FILE_SYNCS_FOR_OBJECT_PER_DAY_REACHED = "MAX_FILE_SYNCS_FOR_OBJECT_PER_DAY_REACHED;OBJECT_ID;Max update limit was reached. Object ID \"@OBJECT_ID@\" will not updated with latest chnages";
	
	/**
	 * Service Oriented Errors
	 *
	 */

	/**
	 * Media Service
	 */

	const ENTRY_NOT_READY = "ENTRY_NOT_READY;ENTRY_NAME;Entry \"@ENTRY_NAME@\" is not ready";

	const INVALID_ENTRY_TYPE = "INVALID_ENTRY_TYPE;ENTRY_NAME,WRONG_ENTRY_TYPE,RIGHT_ENTRY_TYPE;Entry \"@ENTRY_NAME@\" type is \"@WRONG_ENTRY_TYPE@\", type must be \"@RIGHT_ENTRY_TYPE@\"";

	const INVALID_ENTRY_MEDIA_TYPE = "INVALID_ENTRY_MEDIA_TYPE;ENTRY_NAME,WRONG_MEDIA_TYPE,RIGHT_MEDIA_TYPE;Entry \"@ENTRY_NAME@\" media type is \"@WRONG_MEDIA_TYPE@\", media type must be \"@RIGHT_MEDIA_TYPE@\"";

	const ENTRY_ALREADY_WITH_CONTENT = "ENTRY_ALREADY_WITH_CONTENT;;Entry already associated with content";

	const ENTRY_ID_NOT_REPLACED = "ENTRY_ID_NOT_REPLACED;ENTRY_ID;Entry id \"@ENTRY_ID@\" not replaced";

	const ENTRY_REPLACEMENT_ALREADY_EXISTS = "ENTRY_REPLACEMENT_ALREADY_EXISTS;;Entry already in replacement";

	const ENTRY_TYPE_NOT_SUPPORTED = "ENTRY_TYPE_NOT_SUPPORTED;ENTRY_TYPE;Entry type \"@ENTRY_TYPE@\" not suppported";

	const RESOURCE_TYPE_NOT_SUPPORTED = "RESOURCE_TYPE_NOT_SUPPORTED;RES_TYPE;Resource type \"@RES_TYPE@\" not suppported";

	const RESOURCES_MULTIPLE_DATA_CENTERS = "RESOURCES_MULTIPLE_DATA_CENTERS;;Resources created on different data centers";

	const ENTRY_MEDIA_TYPE_NOT_SUPPORTED = "ENTRY_MEDIA_TYPE_NOT_SUPPORTED;MEDIA_TYPE;Entry media type \"@MEDIA_TYPE@\" not suppported";

	const UPLOADED_FILE_NOT_FOUND_BY_TOKEN = "UPLOADED_FILE_NOT_FOUND_BY_TOKEN;;The uploaded file was not found by the given token id, or was already used";

	const REMOTE_DC_NOT_FOUND = "REMOTE_DC_NOT_FOUND;DC;Remote data center \"@DC@\" not found";

	const LOCAL_FILE_NOT_FOUND = "LOCAL_FILE_NOT_FOUND;FILE;Local file was not found \"@FILE@\"";

	const RECORDED_WEBCAM_FILE_NOT_FOUND = "RECORDED_WEBCAM_FILE_NOT_FOUND;;The recorded webcam file was not found by the given token id, or was already used";

	const INVALID_WEBCAM_TOKEN_ID = "INVALID_WEBCAM_TOKEN_ID;;Invalid webcam token id";
	
	const PERMISSION_DENIED_TO_UPDATE_ENTRY = "PERMISSION_DENIED_TO_UPDATE_ENTRY;;User can update only the entries he own, otherwise an admin session must be used";

	const INVALID_RANK_VALUE = "INVALID_RANK_VALUE;;Invalid rank value, rank should be between 1 and 5";

	const MAX_CATEGORIES_FOR_ENTRY_REACHED = "MAX_CATEGORIES_FOR_ENTRY_REACHED;CATEGORIES;Entry can be linked with a maximum of \"@CATEGORIES@\" categories";
	
	const MAX_ASSETS_FOR_ENTRY_REACHED = "MAX_ASSETS_FOR_ENTRY_REACHED;ASSETS;Entry can contain maximum of \"@ASSETS@\" assets";

	const INVALID_ENTRY_SCHEDULE_DATES = "INVALID_ENTRY_SCHEDULE_DATES;;Invalid entry schedule dates";

	const INVALID_ENTRY_STATUS = "INVALID_ENTRY_STATUS;;Invalid entry status";

	const ENTRY_CANNOT_BE_FLAGGED = "ENTRY_CANNOT_BE_FLAGGED;;Entry cannot be flagged";

	/**
	 * Notification Service
	 */

	const NOTIFICATION_FOR_ENTRY_NOT_FOUND = "NOTIFICATION_FOR_ENTRY_NOT_FOUND;ENTRY;Notification for entry id \"@ENTRY@\" not found";

	/**
	 * Bulk Upload Service
	 */

	const BULK_UPLOAD_NOT_FOUND = "BULK_UPLOAD_NOT_FOUND;ID;Bulk upload id \"@ID@\" not found";

	/**
	 * Widget Service
	 */

	const SOURCE_WIDGET_OR_UICONF_REQUIRED = "SOURCE_WIDGET_OR_UICONF_REQUIRED;;SourceWidgetId or UiConfId id are required";

	const SOURCE_WIDGET_NOT_FOUND = "SOURCE_WIDGET_NOT_FOUND;ID;Source widget id \"@ID@\" not found";

	const CANNOT_DISABLE_ENTITLEMENT_WITH_NO_ENTRY_ID = "CANNOT_DISABLE_ENTITLEMENT_WITH_NO_ENTRY_ID;;Cannot disable entitlement when widget is not set to an entry";

	const CANNOT_DISABLE_ENTITLEMENT_FOR_WIDGET_WHEN_ENTITLEMENT_ENFORCEMENT_ENABLE = "CANNOT_DISABLE_ENTITLEMENT_FOR_WIDGET_WHEN_ENTITLEMENT_ENFORCEMENT_ENABLE;;Cannot create widget with no entitlement enforcement when current session is with entitlement enabled";

	/**
	 * UiConf Service
	 */
	const UICONF_ID_NOT_FOUND = "UICONF_ID_NOT_FOUND;ID;UI conf id \"@ID@\" not found";

	/**
	 * AccessControl Service
	 */
	const ACCESS_CONTROL_NEW_VERSION_UPDATE = "ACCESS_CONTROL_NEW_VERSION_UPDATE;ID;Access control id \"@ID@\" should be updated using AccessControlProfile service";

	const ACCESS_CONTROL_ID_NOT_FOUND = "ACCESS_CONTROL_ID_NOT_FOUND;ID;Access control id \"@ID@\" not found";

	const MAX_NUMBER_OF_ACCESS_CONTROLS_REACHED = "MAX_NUMBER_OF_ACCESS_CONTROLS_REACHED;MAX_NUM;Max number of \"@MAX_NUM@\" access controls was reached";

	const CANNOT_DELETE_DEFAULT_ACCESS_CONTROL = "CANNOT_DELETE_DEFAULT_ACCESS_CONTROL;;Default access control cannot be deleted";

	/**
	 * ConversionProfile Service
	 */
	const CONVERSION_PROFILE_ID_NOT_FOUND = "CONVERSION_PROFILE_ID_NOT_FOUND;ID;Conversion profile id \"@ID@\" not found";

	const INGESTION_PROFILE_ID_NOT_FOUND = "INGESTION_PROFILE_ID_NOT_FOUND;ID;Ingestion profile id \"@ID@\" not found";

	const CANNOT_DELETE_DEFAULT_CONVERSION_PROFILE = "CANNOT_DELETE_DEFAULT_CONVERSION_PROFILE;;Default conversion profile cannot be deleted";

	const ASSET_PARAMS_INVALID_TYPE = "ASSET_PARAMS_INVALID_TYPE;ASSET_PARAMS_ID,TYPE;Asset params id \"@ASSET_PARAMS_ID@\" type \"@TYPE@\" is invalid";

	const CONVERSION_PROFILE_ASSET_PARAMS_NOT_FOUND = "CONVERSION_PROFILE_ASSET_PARAMS_NOT_FOUND;PROFILE_ID,PARAMS_ID;Conversion profile id \"@PROFILE_ID@\" asset params id \"@PARAMS_ID@\" not found";

	/**
	 * FlavorParams Service
	 */
	const FLAVOR_PARAMS_ID_NOT_FOUND = "FLAVOR_PARAMS_ID_NOT_FOUND;ID;Flavor params id \"@ID@\" not found";

	const FLAVOR_PARAMS_NOT_FOUND = "FLAVOR_PARAMS_NOT_FOUND;;Flavor params not found";

	const FLAVOR_PARAMS_DUPLICATE = "FLAVOR_PARAMS_DUPLICATE;PARAMS;Flavor params [@PARAMS@] defined more than once";

	const FLAVOR_PARAMS_SOURCE_DUPLICATE = "FLAVOR_PARAMS_SOURCE_DUPLICATE;;More than onc source flavor defined";

	const FLAVOR_PARAMS_OUTPUT_ID_NOT_FOUND = "FLAVOR_PARAMS_OUTPUT_ID_NOT_FOUND;ID;Flavor params output id \"@ID@\" not found";

	const THUMB_PARAMS_OUTPUT_ID_NOT_FOUND = "THUMB_PARAMS_OUTPUT_ID_NOT_FOUND;ID;Thumbnail params output id \"@ID@\" not found";

	const ASSET_ID_NOT_FOUND = "ASSET_ID_NOT_FOUND;ID;Asset id \"@ID@\" not found";

	const ASSET_PARAMS_ORIGIN_NOT_SUPPORTED = "LIVE_PARAMS_ORIGIN_NOT_SUPPORTED;ID,TYPE,ORIGIN;Asset params @ID@ of type @TYPE@ does not support origin @ORIGIN@";

	/**
	 * FlavorAsset Service
	 */
	const FLAVOR_ASSET_ID_NOT_FOUND = "FLAVOR_ASSET_ID_NOT_FOUND;ID;Flavor asset id \"@ID@\" not found";

	const FLAVOR_ASSET_ALREADY_EXISTS = "FLAVOR_ASSET_ALREADY_EXISTS;ASSET_ID,PARAMS_ID;Flavor asset id \"@ASSET_ID@\" already use flavor params id \"@PARAMS_ID@\"";

	const FLAVOR_ASSET_RECONVERT_ORIGINAL = "FLAVOR_ASSET_RECONVERT_ORIGINAL;;Cannot reconvert original flavor asset";

	const ORIGINAL_FLAVOR_ASSET_IS_MISSING = "ORIGINAL_FLAVOR_ASSET_IS_MISSING;;The original flavor asset is missing";

	const ORIGINAL_FLAVOR_ASSET_NOT_CREATED = "ORIGINAL_FLAVOR_ASSET_NOT_CREATED;DATA;The original flavor asset could not be created [@DATA@]";

	const NO_FLAVORS_FOUND = "NO_FLAVORS_FOUND;;No flavors found";

	/**
	 * ThumbAsset Service
	 */
	const THUMB_ASSET_ID_NOT_FOUND = "THUMB_ASSET_ID_NOT_FOUND;ID;The Thumbnail asset id \"@ID@\" not found";

	const THUMB_ASSET_PARAMS_ID_NOT_FOUND = "THUMB_ASSET_ID_NOT_FOUND;ID;The Thumbnail asset not found for params id \"@ID@\"";

	const THUMB_ASSET_IS_NOT_READY = "THUMB_ASSET_IS_NOT_READY;;The thumbnail asset is not ready";

	const THUMB_ASSET_ALREADY_EXISTS = "THUMB_ASSET_ALREADY_EXISTS;ASSET_ID,PARAMS_ID;Thumbnail asset id \"@ASSET_ID@\" already use thumbnail params id \"@PARAMS_ID@\"";

	const THUMB_ASSET_DOWNLOAD_FAILED = "THUMB_ASSET_DOWNLOAD_FAILED;URL_PATH;Failed to download thumbnail from URL \"@URL_PATH@\"";

	const THUMB_ASSET_IS_DEFAULT = "THUMB_ASSET_IS_DEFAULT;ASSET;Thumbnail asset \"@ASSET@\" is default and could not be deleted";
	
	const THUMB_ASSET_ID_IS_NOT_TIMED_THUMB_TYPE = "THUMB_ASSET_IS_NOT_OF_TYPE_TIMED_THUMB;ASSET;Thumbnail asset \"@ASSET@\" is not of type timed thumb";

	/**
	 * Category Service
	 */
	const CATEGORY_NOT_FOUND = "CATEGORY_NOT_FOUND;ID;Category id \"@ID@\" not found";

	const CATEGORY_NOT_PERMITTED = "CATEGORY_NOT_PERMITTED;CATEGORY;Category \"@CATEGORY@\" is not permitted";

	const PARENT_CATEGORY_NOT_FOUND = "PARENT_CATEGORY_NOT_FOUND;ID;Parent category id \"@ID@\" not found";

	const DUPLICATE_CATEGORY = "DUPLICATE_CATEGORY;CATEGORY;The category \"@CATEGORY@\" already exists";

	const PARENT_CATEGORY_IS_CHILD = "PARENT_CATEGORY_IS_CHILD;PARENT_CATEGORY,OTHER_CATEGORY;The parent category \"@PARENT_CATEGORY@\" is one of the children for category \"@OTHER_CATEGORY@\"";

	const CATEGORIES_LOCKED = "CATEGORIES_LOCKED;;Categories are locked";

	const CANNOT_INHERIT_MEMBERS_WHEN_PARENT_CATEGORY_IS_NOT_SET = "CANNOT_INHERIT_MEMBERS_WHEN_PARENT_CATEGORY_IS_NOT_SET;;Cannot inherit members when parent category is not set";

	const NOT_ENTITLED_TO_UPDATE_CATEGORY = "NOT_ENTITLED_TO_UPDATE_CATEGORY;;Current User is not entitled to update this category";

	const CATEGORY_DOES_NOT_HAVE_PARENT_CATEGORY = "CATEGORY_DOES_NOT_HAVE_PARENT_CATEGORY;;Category doesn't have parent category";

	const CANNOT_UPDATE_CATEGORY_PRIVACY_CONTEXT = "CANNOT_UPDATE_CATEGORY_PRIVACY_CONTEXT;;Cannot update privacy context";

	const CANNOT_MOVE_CATEGORIES_FROM_DIFFERENT_PARENT_CATEGORY = "CANNOT_MOVE_CATEGORIES_FROM_DIFFERENT_PARENT_CATEGORIES;;Cannot move categories from different parent categories";

	const CANNOT_UPDATE_CATEGORY_ENTITLEMENT_FIELDS_WITH_NO_PRIVACY_CONTEXT = "CANNOT_UPDATE_CATEGORY_ENTITLEMENT_FIELDS_WITH_NO_PRIVACY_CONTEXT;;Cannot update category's entitlement fields when privacy context is not set on the categroy";

	const CANNOT_SET_APPEAR_IN_LIST_FIELD_WITH_NO_PRIVACY_CONTEXT = "CANNOT_SET_APPEAR_IN_LIST_FIELD_WITH_NO_PRIVACY_CONTEXT;;Cannot set appear in list field when privacy context is not set on the categroy";

	const CANNOT_SET_MODERATION_FIELD_WITH_NO_PRIVACY_CONTEXT = "CANNOT_SET_MODERATION_FIELD_WITH_NO_PRIVACY_CONTEXT;;Cannot set moderation field when privacy context is not set on the categroy";

	const CANNOT_SET_INHERITANCE_TYPE_FIELD_WITH_NO_PRIVACY_CONTEXT = "CANNOT_SET_INHERITANCE_TYPE_FIELD_WITH_NO_PRIVACY_CONTEXT;;Cannot set inheritance field when privacy context is not set on the categroy";

	const CANNOT_SET_PRIVACY_FIELD_WITH_NO_PRIVACY_CONTEXT = "CANNOT_SET_PRIVACY_FIELD_WITH_NO_PRIVACY_CONTEXT;;Cannot set privacy field when privacy context is not set on the categroy";

	const CANNOT_SET_OWNER_FIELD_WITH_NO_PRIVACY_CONTEXT = "CANNOT_SET_OWNER_FIELD_WITH_NO_PRIVACY_CONTEXT;;Cannot set owner field when privacy context is not set on the categroy";

	const CANNOT_SET_USER_JOIN_POLICY_FIELD_WITH_NO_PRIVACY_CONTEXT = "CANNOT_SET_USER_JOIN_POLICY_FIELD_WITH_NO_PRIVACY_CONTEXT;;Cannot set user join policy field when privacy context is not set on the categroy";
	
	const CANNOT_SET_OWNER_FIELD_WITH_USER_ID = "CANNOT_SET_OWNER_FIELD_WITH_USER_ID;ID;Cannot set owner field with user id \"@ID@\", user id is invalid";

	const CANNOT_SET_CONTIRUBUTION_POLICY_FIELD_WITH_NO_PRIVACY_CONTEXT = "CANNOT_SET_CONTIRUBUTION_POLICY_FIELD_WITH_NO_PRIVACY_CONTEXT;;Cannot set contribution policy field when privacy context is not set on the categroy";

	const CANNOT_SET_DEFAULT_PERMISSION_LEVEL_FIELD_WITH_NO_PRIVACY_CONTEXT = "CANNOT_SET_DEFAULT_PERMISSION_LEVEL_FIELD_WITH_NO_PRIVACY_CONTEXT;;Cannot set default permission level field when privacy context is not set on the categroy";

	const PRIVACY_CONTEXT_INVALID_STRING = "PRIVACY_CONTEXT_INVALID_STRING;CONTEXT;Privacy context is invalid \"@CONTEXT@\"";

	const CANNOT_SET_OWNER_WHEN_CATEGORY_INHERIT_MEMBERS = "CANNOT_SET_OWNER_WHEN_CATEGORY_INHERIT_MEMBERS;;Cannot set owner when category is set to inherit";

	const CANNOT_SET_USER_JOIN_POLICY_WHEN_CATEGORY_INHERIT_MEMBERS = "CANNOT_SET_USER_JOIN_POLICY_WHEN_CATEGORY_INHERIT_MEMBERS;;Cannot set user join policy when category is set to inherit";

	const CANNOT_SET_DEFAULT_PERMISSION_LEVEL_WHEN_CATEGORY_INHERIT_MEMBERS = "CANNOT_SET_DEFAULT_PERMISSION_LEVEL_WHEN_CATEGORY_INHERIT_MEMBERS;;Cannot set default permission level when category is set to inherit";
	
	const CANNOT_SET_MULTI_PRIVACY_CONTEXT = "CANNOT_SET_MULTI_PRIVACY_CONTEXT;; Cannot set multiple privacy context when Disable Category Limit feature is turned on";

	/**
	 * Batch Service
	 */

	const SCHEDULER_HOST_CONFLICT = "SCHEDULER_HOST_CONFLICT;SCHED_ID,HOST1,HOST2;Scheduler id \"@SCHED_ID@\" conflicts between hosts: \"@HOST1@\" and \"@HOST2@\"";

	const SCHEDULER_NOT_FOUND = "SCHEDULER_NOT_FOUND;ID;Scheduler id \"@ID@\" not found";

	const WORKER_NOT_FOUND = "WORKER_NOT_FOUND;ID;Worker id \"@ID@\" not found";

	const COMMAND_NOT_FOUND = "COMMAND_NOT_FOUND;ID;Command id \"@ID@\" not found";

	const COMMAND_ALREADY_PENDING = "COMMAND_ALREADY_PENDING;;Command already pending";

	const PARTNER_NOT_SET = "PARTNER_NOT_SET;;Partner not set";

	const PARTNER_NOT_FOUND = "PARTNER_NOT_FOUND;PARTNER;Partner not found @PARTNER@";

	/**
	 * Upload Service
	 */
	const INVALID_UPLOAD_TOKEN_ID = "INVALID_UPLOAD_TOKEN_ID;;Invalid upload token id";

	const UPLOAD_PARTIAL_ERROR = "UPLOAD_PARTIAL_ERROR;;File was uploaded partially";

	const UPLOAD_ERROR = "UPLOAD_ERROR;;Upload failed";

	const UPLOADED_FILE_NOT_FOUND = "UPLOADED_FILE_NOT_FOUND;FILE;Uploaded file not found [@FILE@]";

	const BULK_UPLOAD_CREATE_RESULT_FILE_SYNC_ERROR = "BULK_UPLOAD_CREATE_RESULT_FILE_SYNC_ERROR;;Unable to create file sync object for bulk upload result";

	const BULK_UPLOAD_CREATE_CONVERT_FILE_SYNC_ERROR = "BULK_UPLOAD_CREATE_CONVERT_FILE_SYNC_ERROR;;Unable to create file sync object for flavor conversion";

	/**
	 * Upload Token Service
	 */
	const UPLOAD_TOKEN_NOT_FOUND = "UPLOAD_TOKEN_NOT_FOUND;;Upload token not found";

	const UPLOAD_TOKEN_INVALID_STATUS_FOR_UPLOAD = "UPLOAD_TOKEN_INVALID_STATUS_FOR_UPLOAD;;Upload token is in an invalid status for uploading a file, maybe the file was already uploaded";

	const UPLOAD_TOKEN_INVALID_STATUS_FOR_ADD_ENTRY = "UPLOAD_TOKEN_INVALID_STATUS_FOR_ADD_ENTRY;;Upload token is in an invalid status for adding entry, maybe the a file was not uploaded or the token was used";

	const UPLOAD_TOKEN_CANNOT_RESUME = "UPLOAD_TOKEN_CANNOT_RESUME;;Cannot resume the upload, original file was not found";

	const UPLOAD_TOKEN_RESUMING_NOT_ALLOWED = "UPLOAD_TOKEN_RESUMING_NOT_ALLOWED;;Resuming not allowed when file size was not specified";

	const UPLOAD_TOKEN_RESUMING_INVALID_POSITION = "UPLOAD_TOKEN_RESUMING_INVALID_POSITION;;Resuming not allowed after end of file";

	/*
	 * Partenrs service
	 * PID - the parent partner_id
	 */
	const NON_GROUP_PARTNER_ATTEMPTING_TO_ASSIGN_CHILD = "NON_GROUP_PARTNER_ATTEMPTING_TO_ASSIGN_CHILD;PID;Partner id [@PID@] is not a VAR/GROUP, but is attempting to create child partner";

	const NON_PARENT_PARTNER_ATTEMPTING_TO_COPY_PARTNER = "NON_PARENT_PARTNER_ATTEMPTING_TO_COPY_PARTNER;PID,T_PARTNER;Partner id [@PID@] is not the parent of template partner [@T_PARTNER@]";

	const INVALID_OBJECT_ID = "INVALID_OBJECT_ID;ID;Invalid object id [@ID@]";

	const USER_NOT_FOUND = "USER_NOT_FOUND;;User was not found";

	const USER_LOGIN_ALREADY_ENABLED = "USER_LOGIN_ALREADY_ENABLED;;User is already allowed to login";

	const USER_LOGIN_ALREADY_DISABLED = "USER_LOGIN_ALREADY_DISABLED;;User is already not allowed to login";

	const PROPERTY_VALIDATION_NO_USAGE_PERMISSION = "PROPERTY_VALIDATION_NO_USAGE_PERMISSION;PROP;Current user does not have permission to use property \"@PROP@\"";

	const PROPERTY_VALIDATION_NO_UPDATE_PERMISSION = "PROPERTY_VALIDATION_NO_UPDATE_PERMISSION;PROP;Current user does not have permission to update property \"@PROP@\"";

	const PROPERTY_VALIDATION_NO_INSERT_PERMISSION = "PROPERTY_VALIDATION_NO_INSERT_PERMISSION;PROP;Current user does not have permission to insert property \"@PROP@\"";

	const USER_NOT_ADMIN = "USER_NOT_ADMIN;USER;User [@USER@] is not admin";

	const ROLE_NAME_ALREADY_EXISTS = "ROLE_NAME_ALREADY_EXISTS;;A role with the same name already exists";

	const PERMISSION_ITEM_NOT_FOUND = "PERMISSION_ITEM_NOT_FOUND;;Permission item does not exists";

	const PROPERTY_DEPRECATED = "PROPERTY_DEPRECTAED;PROP;The property \"@PROP@\" is deprecated and should not be used";

	/*
	 * syndication service
	 */
	const INVALID_XSLT = "INVALID_XSLT;;Invalid xslt";

	const INVALID_XSLT_MISSING_TEMPLATE_RSS = "INVALID_XSLT_MISSING_TEMPLATE_RSS;;Invalid xslt, missing rss's template tag with the following convention: xsl:template name=\"rssx\" match=\"/\"";

	const INVALID_XSLT_MISSING_TEMPLATE_ITEM = "INVALID_XSLT_MISSING_TEMPLATE_ITEM;;Invalid xslt, missing item's template tag with the following convention: xsl:template name=\"item\" match=\"item\"";

	const INVALID_XSLT_MISSING_APPLY_TEMPLATES_ITEM = "INVALID_XSLT_MISSING_APPLY_TEMPLATES_ITEM;;Invalid xslt, missing apply-template tag for item's template with the following convention: xsl:apply-templates name=\"item\"";

	const SYNDICATION_FEED_INVALID_STORAGE_ID = "SYNDICATION_FEED_INVALID_STORAGE_ID;;Invalid storage id";

	const SYNDICATION_FEED_KALTURA_DC_ONLY = "SYNDICATION_FEED_KALTURA_DC_ONLY;;Partner configured to use Kaltura data centers only";

	/*
	 * file sync
	 */
	const FILE_DOESNT_EXIST = "FILE_DOESNT_EXIST;;File doesnt exist";

	const FILE_NOT_FOUND = "FILE_NOT_FOUND;;File not found";

	const STORAGE_PROFILE_ID_NOT_FOUND = "STORAGE_PROFILE_ID_NOT_FOUND;ID;Storage profile id @ID@ not found";	
	
	const STORAGE_PROFILE_RULES_NOT_FULFILLED = "STORAGE_PROFILE_RULES_NOT_FULFILLED;ID;Storage profile rules for profile id @ID@ are not fulfilled";

	/*
	 * resetUserPassword
	 */
	const CANNOT_RESET_PASSWORD_FOR_SYSTEM_PARTNER = "CANNOT_RESET_PASSWORD_FOR_SYSTEM_PARTNER;;Password cannot be reset for system partner";

	/*
	 * Report service
	 */
	const REPORT_NOT_FOUND = "REPORT_NOT_FOUND;ID;Report id \"@ID@\" not found";

	const REPORT_NOT_PUBLIC = "REPORT_NOT_PUBLIC;ID;Report id \"@ID@\" is not public";

	const REPORT_PARAMETER_MISSING = "REPORT_PARAMETER_MISSING;PARAM;Parameter \"@PARAM@\" is missing";

	const SEARCH_TOO_GENERAL = "SEARCH_TOO_GENERAL;;Unable to create report. Query produced too many results";

	/**
	 * categoryUser service
	 */
	const INVALID_CATEGORY_USER_ID = "INVALID_CATEGORY_USER_ID;CAT,USER;Invalid CategoryUser for category [\"@CAT@\"] and for user [\"@USER@\"]";

	const CATEGORY_USER_ALREADY_EXISTS = "CATEGORY_USER_ALREADY_EXISTS;;CategoryUser already exists";

	const CATEGORY_INHERIT_MEMBERS = "CATEGORY_INHERIT_MEMBERS;CAT;Cannot add members to this category since its inherit members from parent category [\"@CAT@\"]";

	const CATEGORY_INHERIT_MEMBERS_MUST_SET_PARENT_CATEGORY = "CATEGORY_INHERIT_MEMBERS_MUST_SET_PARENT_CATEGORY;;Category that inherit members must have parent category set";

	const CATEGORY_USER_JOIN_NOT_ALLOWED = "CATEGORY_USER_JOIN_NOT_ALLOWED;CAT;cannot register to this category [\"@CAT@\"]";

	const CANNOT_UPDATE_CATEGORY_USER = "CANNOT_UPDATE_CATEGORY_USER;;cannot update category user";

	const MUST_FILTER_USERS_OR_CATEGORY = "MUST_FILTER_USERS_OR_CATEGORY;;Must filter users or categories";

	const CANNOT_OVERRIDE_MANUAL_CHANGES = "CANNOT_OVERRIDE_MANUAL_CHANGES;;Cannot override manual changes";

	const CANNOT_UPDATE_CATEGORY_USER_OWNER = "CANNOT_UPDATE_CATEGORY_USER_OWNER;;Cannot change CategoryUser object for category Owner";

	/**
	 * entry
	 */

	const ENTRY_CATEGORY_FIELD_IS_DEPRECATED = "ENTRY_CATEGORY_FIELD_IS_DEPRECATED;;entry->categories and entry->categoriesIds fields are deprecated - user categoryEntry service";

	
	/**
	 * categoryEntry
	 */
	const INVALID_ENTRY_ID ="INVALID_ENTRY_ID;ID;Invalid entry id [\"@ID@\"]";

	const CANNOT_ASSIGN_ENTRY_TO_CATEGORY = "CANNOT_ASSIGN_ENTRY_TO_CATEGORY;;Cannot assign entry to category";

	const CANNOT_REMOVE_ENTRY_FROM_CATEGORY = "CANNOT_REMOVE_ENTRY_FROM_CATEGORY;;Cannot remove entry from category";

	const CANNOT_ACTIVATE_CATEGORY_ENTRY = "CANNOT_ACTIVATE_CATEGORY_ENTRY;;Cannot activate categoryEntry";

	const CANNOT_ACTIVATE_CATEGORY_ENTRY_SINCE_IT_IS_NOT_PENDING = "CANNOT_ACTIVATE_CATEGORY_ENTRY_SINCE_IT_IS_NOT_PENDING;;Cannot activate a non pending categoryEntry";

	const CANNOT_REJECT_CATEGORY_ENTRY_SINCE_IT_IS_NOT_PENDING = "CANNOT_REJECT_CATEGORY_ENTRY_SINCE_IT_IS_NOT_PENDING;;Cannot reject a non pending categoryEntry";

	const CANNOT_REJECT_CATEGORY_ENTRY = "CANNOT_REJECT_CATEGORY_ENTRY;;Cannot reject category entry";

	const ENTRY_IS_NOT_ASSIGNED_TO_CATEGORY = "ENTRY_IS_NOT_ASSIGNED_TO_CATEGORY;;Entry doesn't assigned to category";

	const MUST_FILTER_ENTRY_ID_EQUAL = "MUST_FILTER_ENTRY_ID_EQUAL;;Must filter on entry id";

	const MUST_FILTER_ON_ENTRY_OR_CATEGORY = "MUST_FILTER_ON_ENTRY_OR_CATEGORY;;Must filter on entry id or category";

	const CATEGORY_ENTRY_ALREADY_EXISTS = "CATEGORY_ENTRY_ALREADY_EXISTS;;Entry already assigned to this category";

	const CATEGORY_IS_LOCKED = "CATEGORY_IS_LOCKED;;Category is locked - cannot delete or change parent id";

	/**
	 * Entitlement
	 */
	const CANNOT_INDEX_OBJECT_WHEN_ENTITLEMENT_IS_ENABLE = "CANNOT_INDEX_OBJECT_WHEN_ENTITLEMENT_IS_ENABLE;;Cannot index object when enetitlment is enabled";

	// live stream
	const LIVE_STREAM_STATUS_CANNOT_BE_DETERMINED = "LIVE_STREAM_STATUS_CANNOT_BE_DETERMINED;PROT;Status cannot be determined for live stream protocol [@PROT@]";

	const ENCODING_IP_NOT_PINGABLE = "ENCODING_IP_NOT_PINGABLE;;One or both of the provided encoding IPs is not pingable";
	
	const EXTENDING_ITEM_INCOMPATIBLE_COMBINATION = "EXTENDING_ITEM_INCOMPATIBLE_COMBINATION;;This extending object MRSS must replace the XPath contents";
	
	const EXTENDING_ITEM_MISSING_XPATH = "EXTENDING_ITEM_MISSING_XPATH;;Extending item must contain xpath";
	
	const LIVE_CHANNEL_SEGMENT_ID_NOT_FOUND = 'LIVE_CHANNEL_SEGMENT_ID_NOT_FOUND;SEGMENT_ID;Live channel segment id [@SEGMENT_ID@] not found';
	
	const LIVE_STREAM_INVALID_TOKEN = "LIVE_STREAM_INVALID_TOKEN;ENTRY_ID;Invalid token supplied for live entry [@ENTRY_ID@]";
	
	const LIVE_STREAM_EXCEEDED_MAX_PASSTHRU = "LIVE_STREAM_EXCEEDED_MAX_PASSTHRU;ENTRY_ID;Partner exceeded max pass-through live streams in entry[@ENTRY_ID@]";
	
	const LIVE_STREAM_EXCEEDED_MAX_TRANSCODED = "LIVE_STREAM_EXCEEDED_MAX_TRANSCODED;ENTRY_ID;Partner exceeded max concurrent transcoded live streams in entry[@ENTRY_ID@]";
	
	const LIVE_STREAM_EXCEEDED_MAX_RECORDED_DURATION = "LIVE_STREAM_EXCEEDED_MAX_RECORDED_DURATION;ENTRY_ID;Entry exceeded max recorded live stream duration in entry[@ENTRY_ID@]";
	
	const LIVE_STREAM_ALREADY_BROADCASTING = "LIVE_STREAM_ALREADY_BROADCASTING;ENTRY_ID,MEDIA_SERVER;Entry [@ENTRY_ID@] already broadcasting to server [@MEDIA_SERVER@]";
	
	/*
	 * BaseEntry Service
	 */
	
	const DELIVERY_TYPE_NOT_SPECIFIED = "DELIVERY_TYPE_NOT_SPECIFIED;;At least one non auto delivery type must be specified";
	
	const SPHINX_CRITERIA_EXCEEDED_MAX_MATCHES_ALLOWED = "QUERY_EXCEEDED_MAX_MATCHES_ALLOWED;;Unable to generate list. max matches value was reached";
	
	/*
	 * FileAsset Service
	 */
	
	const FILE_ASSET_ID_NOT_FOUND = "FILE_ASSET_ID_NOT_FOUND;ASSET_ID;File asset id [\"@ASSET_ID@\"] not found";
	
	/*
	 * MediaServer Service
	 */
	const MEDIA_SERVER_NOT_FOUND = "MEDIA_SERVER_NOT_FOUND;MEDIA_SERVER_ID;Media server [@MEDIA_SERVER_ID@] not found";
	
	const NO_MEDIA_SERVER_FOUND = "NO_MEDIA_SERVER_FOUND;ENTRY_ID;No media server found for entry [@ENTRY_ID@]";
	
	const MEDIA_SERVER_SERVICE_NOT_FOUND = "MEDIA_SERVER_SERVICE_NOT_FOUND;MEDIA_SERVER_ID,SERVICE;Media server [@MEDIA_SERVER_ID@] service [@SERVICE@] not found";
	
	/*
    * Delivery Service
    */
	const DELIVERY_ID_NOT_FOUND = 'DELIVERY_ID_NOT_FOUND;DELIVERY_ID;delivery id [@DELIVERY_ID@] not found';
	const DELIVERY_UPDATE_ISNT_ALLOWED = 'DELIVERY_UPDATE_ISNT_ALLOWED;DELIVERY_ID;delivery id [@DELIVERY_ID@] is default and can\'t be set';
	
	/*
	 * Live reports Service
	 */
	const LIVE_REPORTS_WS_FAILURE = 'LIVE_REPORTS_WS_FAILURE;;failed to retrieve live analytics';
}
