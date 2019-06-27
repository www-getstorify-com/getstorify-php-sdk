<?php
/**
 * Author: Yusuf Shakeel
 * Date: 06-Jun-2018 Wed
 * Version: 1.0
 *
 * File: Constants.php
 * Description: This file contains constants.
 */

namespace GetStorify\Config;

define('GETSTORIFY_WEBSITE_APP_VERSION', '1.1.0');

define('SESSION_GETSTORIFY_API_SERVICE_AUTH_ACCESSTOKEN', 'SESSION_GETSTORIFY_API_SERVICE_AUTH_ACCESSTOKEN');

define('GETSTORIFY_API_SERVICE_BASE_URL', 'https://api.getstorify.com');
define('GETSTORIFY_BASE_URL', 'https://getstorify.com/storify');

define('GETSTORIFY_API_SERVICE_USER_AUTH_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/auth');
define('GETSTORIFY_API_SERVICE_USER_AUTH_ACCESS_TOKEN_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/auth/accesstoken');

/**
 * Put your Google API Key here.
 */
define('GETSTORIFY_API_SERVICE_GOOGLE_API_KEY_WEB_KEY', '');

// User APIs
define('GETSTORIFY_API_SERVICE_USER_DETAIL_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/user');
define('GETSTORIFY_API_SERVICE_STORY_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/story/public');
define('GETSTORIFY_API_SERVICE_STORY_LOCATION_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/storylocation/public');
define('GETSTORIFY_API_SERVICE_POST_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/post/public');
define('GETSTORIFY_API_SERVICE_POST_LOCATION_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/post/postlocationpublic');
define('GETSTORIFY_API_SERVICE_POST_STORY_GALLERY_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/post/storygallerypublic');
define('GETSTORIFY_API_SERVICE_POST_GROUP_STORY_GALLERY_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/post/groupstorygallerypublic');
define('GETSTORIFY_API_SERVICE_GROUPS_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/groups/public');
define('GETSTORIFY_API_SERVICE_GROUP_STORIES_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/groupstories/public');
define('GETSTORIFY_API_SERVICE_GROUP_STORIES_PREV_NEXT_STORIES_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/groupstories/publicprevnextstories');
define('GETSTORIFY_API_SERVICE_GROUP_STORY_POSTS_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/groupstoryposts/public');
define('GETSTORIFY_API_SERVICE_GROUP_MEMBERS_URL', GETSTORIFY_API_SERVICE_BASE_URL . '/v1/user/groupmembers');

define('GETSTORIFY_API_SERVICE_DB_PAGE_LIMIT', 10);