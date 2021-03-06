<?php
/**
Copyright 2012 Nick Korbel

This file is part of phpScheduleIt.

phpScheduleIt is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

phpScheduleIt is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with phpScheduleIt.  If not, see <http://www.gnu.org/licenses/>.
 */

class ColumnNames
{
	private function __construct()
	{
	}

	// USERS //
	const USER_ID = 'user_id';
	const USERNAME = 'username';
	const EMAIL = 'email';
	const FIRST_NAME = 'fname';
	const LAST_NAME = 'lname';
	const PASSWORD = 'password';
	const OLD_PASSWORD = 'legacypassword';
	const USER_CREATED = 'date_created';
	const USER_MODIFIED = 'last_modified';
	const USER_STATUS_ID = 'status_id';
	const HOMEPAGE_ID = 'homepageid';
	const LAST_LOGIN = 'lastlogin';
	const TIMEZONE_NAME = 'timezone';
	const LANGUAGE_CODE = 'language';
	const SALT = 'salt';
	const PHONE_NUMBER = 'phone';
	const ORGANIZATION = 'organization';
	const POSITION = 'position';
	const DEFAULT_SCHEDULE_ID = 'default_schedule_id';

	// USER_ADDRESSES //
	const ADDRESS_ID = 'address_id';

	// ROLES //
	const ROLE_LEVEL = 'role_level';
	const ROLE_ID = 'role_id';
	const ROLE_NAME = 'name';

	// ANNOUNCEMENTS //
	const ANNOUNCEMENT_ID = 'announcementid';
	const ANNOUNCEMENT_PRIORITY = 'priority';
	const ANNOUNCEMENT_START = 'start_date';
	const ANNOUNCEMENT_END = 'end_date';
	const ANNOUNCEMENT_TEXT = 'announcement_text';

	// GROUPS //
	const GROUP_ID = 'group_id';
	const GROUP_NAME = 'name';
	const GROUP_ADMIN_GROUP_ID = 'admin_group_id';
	const GROUP_ADMIN_GROUP_NAME = 'admin_group_name';

	// TIME BLOCKS //
	const BLOCK_DAY_OF_WEEK = 'day_of_week';
	const BLOCK_LABEL = 'label';
	const BLOCK_LABEL_END = 'end_label';
	const BLOCK_CODE = 'availability_code';
	const BLOCK_TIMEZONE = 'timezone';

	// TIME BLOCK USES //
	const BLOCK_START = 'start_time';
	const BLOCK_END = 'end_time';

	// RESERVATION SERIES //
	const RESERVATION_USER = 'user_id';
	const RESERVATION_GROUP = 'group_id';
	const RESERVATION_CREATED = 'date_created';
	const RESERVATION_MODIFIED = 'last_modified';
	const RESERVATION_TYPE = 'type_id';
	const RESERVATION_TITLE = 'title';
	const RESERVATION_DESCRIPTION = 'description';
	const RESERVATION_COST = 'total_cost';
	const RESERVATION_PARENT_ID = 'parent_id';
	const REPEAT_TYPE = 'repeat_type';
	const REPEAT_OPTIONS = 'repeat_options';
	const RESERVATION_STATUS = 'status_id';
	const SERIES_ID = 'series_id';
	const RESERVATION_OWNER = 'owner_id';

	// RESERVATION_INSTANCE //
	const RESERVATION_INSTANCE_ID = 'reservation_instance_id';
	const RESERVATION_START = 'start_date';
	const RESERVATION_END = 'end_date';
	const REFERENCE_NUMBER = 'reference_number';

	// RESERVATION_USER //
	const RESERVATION_USER_LEVEL = 'reservation_user_level';

	// RESOURCE //
	const RESOURCE_ID = 'resource_id';
	const RESOURCE_NAME = 'name';
	const RESOURCE_LOCATION = 'location';
	const RESOURCE_CONTACT = 'contact_info';
	const RESOURCE_DESCRIPTION = 'description';
	const RESOURCE_NOTES = 'notes';
	const RESOURCE_MINDURATION = 'min_duration';
	const RESOURCE_MININCREMENT = 'min_increment';
	const RESOURCE_MAXDURATION = 'max_duration';
	const RESOURCE_COST = 'unit_cost';
	const RESOURCE_AUTOASSIGN = 'autoassign';
	const RESOURCE_REQUIRES_APPROVAL = 'requires_approval';
	const RESOURCE_ALLOW_MULTIDAY = 'allow_multiday_reservations';
	const RESOURCE_MAX_PARTICIPANTS = 'max_participants';
	const RESOURCE_MINNOTICE = 'min_notice_time';
	const RESOURCE_MAXNOTICE = 'max_notice_time';
	const RESOURCE_IMAGE_NAME = 'image_name';
	const RESOURCE_ISACTIVE = 'isactive';
	const RESOURCE_ADMIN_GROUP_ID = 'admin_group_id';
	const RESOURCE_SORT_ORDER = 'sort_order';

	// RESERVATION RESOURCES
	const RESOURCE_LEVEL_ID = 'resource_level_id';

	// SCHEDULE //
	const SCHEDULE_ID = 'schedule_id';
	const SCHEDULE_NAME = 'name';
	const SCHEDULE_DEFAULT = 'isdefault';
	const SCHEDULE_WEEKDAY_START = 'weekdaystart';
	const SCHEDULE_DAYS_VISIBLE = 'daysvisible';
	const LAYOUT_ID = 'layout_id';
	const SCHEDULE_ADMIN_GROUP_ID = 'admin_group_id';
	const SCHEDULE_ADMIN_GROUP_ID_ALIAS = 's_admin_group_id';

	// EMAIL PREFERENCES //
	const EVENT_CATEGORY = 'event_category';
	const EVENT_TYPE = 'event_type';

	const REPEAT_START = 'repeat_start';
	const REPEAT_END = 'repeat_end';

	// QUOTAS //
	const QUOTA_ID = 'quota_id';
	const QUOTA_LIMIT = 'quota_limit';
	const QUOTA_UNIT = 'unit';
	const QUOTA_DURATION = 'duration';

	// ACCESSORIES //
	const ACCESSORY_ID = 'accessory_id';
	const ACCESSORY_NAME = 'accessory_name';
	const ACCESSORY_QUANTITY = 'accessory_quantity';

	// RESERVATION ACCESSORY //
	const QUANTITY = 'quantity';

	// BLACKOUTS //
	const BLACKOUT_INSTANCE_ID = 'blackout_instance_id';
	const BLACKOUT_START = 'start_date';
	const BLACKOUT_END = 'end_date';
	const BLACKOUT_TITLE = 'title';
	const BLACKOUT_DESCRIPTION = 'description';
	const BLACKOUT_SERIES_ID = 'blackout_series_id';

	// ATTRIBUTES //
	const ATTRIBUTE_ID = 'custom_attribute_id';
	const ATTRIBUTE_LABEL = 'display_label';
	const ATTRIBUTE_TYPE = 'display_type';
	const ATTRIBUTE_CATEGORY = 'attribute_category';
	const ATTRIBUTE_CONSTRAINT = 'validation_regex';
	const ATTRIBUTE_REQUIRED = 'is_required';
	const ATTRIBUTE_POSSIBLE_VALUES = 'possible_values';
	const ATTRIBUTE_VALUE = 'attribute_value';
	const ATTRIBUTE_ENTITY_ID = 'entity_id';
	const ATTRIBUTE_SORT_ORDER = 'sort_order';

	// RESERVATION FILES //
	const FILE_ID = 'file_id';
	const FILE_NAME = 'file_name';
	const FILE_TYPE = 'file_type';
	const FILE_SIZE = 'file_size';
	const FILE_EXTENSION = 'file_extension';

	// SAVED REPORTS //
	const REPORT_ID = 'saved_report_id';
	const REPORT_NAME = 'report_name';
	const DATE_CREATED = 'date_created';
	const REPORT_DETAILS = 'report_details';

	// USER SESSION //
	const SESSION_TOKEN = 'session_token';
	const USER_SESSION = 'user_session_value';
	const SESSION_LAST_MODIFIED = 'last_modified';

	// REMINDERS //
	const REMINDER_ID = 'reminder_id';
	const REMINDER_SENDTIME = 'sendtime';
	const REMINDER_MESSAGE = 'message';
	const REMINDER_USER_ID = 'user_id';
	const REMINDER_ADDRESS = 'address';
	const REMINDER_REFNUMBER = 'refnumber';
	const REMINDER_MINUTES_PRIOR = 'minutes_prior';
	const REMINDER_TYPE = 'reminder_type';

	// dynamic
	const TOTAL = 'total';
	const TOTAL_TIME = 'totalTime';
	const OWNER_FIRST_NAME = 'owner_fname';
	const OWNER_LAST_NAME = 'owner_lname';
	const OWNER_FULL_NAME_ALIAS = 'owner_name';
	const OWNER_USER_ID = 'owner_id';
	const OWNER_PHONE = 'owner_phone';
	const OWNER_ORGANIZATION = 'owner_organization';
	const OWNER_POSITION = 'owner_position';
	const GROUP_NAME_ALIAS = 'group_name';
	const RESOURCE_NAME_ALIAS = 'resource_name';
	const SCHEDULE_NAME_ALIAS = 'schedule_name';

	// shared
	const ALLOW_CALENDAR_SUBSCRIPTION = 'allow_calendar_subscription';
	const PUBLIC_ID = 'public_id';
}

?>