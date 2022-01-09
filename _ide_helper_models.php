<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models{
/**
 * Class countries
 *
 * @package App\Models
 * @version March 23, 2020, 7:29 pm UTC
 * @property string code
 * @property string country
 * @property string $code
 * @property string $country
 * @method static \Illuminate\Database\Eloquent\Builder|countries newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|countries newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|countries query()
 * @method static \Illuminate\Database\Eloquent\Builder|countries whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|countries whereCountry($value)
 */
	class countries extends \Eloquent {}
}

namespace App\Models{
/**
 * Class failed_jobs
 *
 * @package App\Models
 * @version March 23, 2020, 7:29 pm UTC
 * @property string connection
 * @property string queue
 * @property string payload
 * @property string exception
 * @property string|\Carbon\Carbon failed_at
 * @property int $id
 * @property string $connection
 * @property string $queue
 * @property string $payload
 * @property string $exception
 * @property \Illuminate\Support\Carbon $failed_at
 * @method static \Illuminate\Database\Eloquent\Builder|failed_jobs newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|failed_jobs newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|failed_jobs query()
 * @method static \Illuminate\Database\Eloquent\Builder|failed_jobs whereConnection($value)
 * @method static \Illuminate\Database\Eloquent\Builder|failed_jobs whereException($value)
 * @method static \Illuminate\Database\Eloquent\Builder|failed_jobs whereFailedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|failed_jobs whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|failed_jobs wherePayload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|failed_jobs whereQueue($value)
 */
	class failed_jobs extends \Eloquent {}
}

namespace App\Models{
/**
 * Class family
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string date
 * @property string first_name
 * @property string second_name
 * @property string third_name
 * @property string family
 * @property string id_num
 * @property string mobile
 * @property integer reg_day
 * @property integer reg_month
 * @property integer reg_year
 * @property integer area
 * @property integer job
 * @property integer sharing
 * @property string id_pic
 * @property string profile_pc
 * @property int $id
 * @property string $date
 * @property string $first_name
 * @property string $second_name
 * @property string $third_name
 * @property string $family
 * @property string $id_num
 * @property string $mobile
 * @property int $reg_day
 * @property int $reg_month
 * @property int $reg_year
 * @property int $area
 * @property int $job
 * @property int $sharing
 * @property string $id_pic
 * @property string $profile_pc
 * @method static \Illuminate\Database\Eloquent\Builder|family newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|family newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|family query()
 * @method static \Illuminate\Database\Eloquent\Builder|family whereArea($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereFamily($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereIdNum($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereIdPic($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereJob($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereProfilePc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereRegDay($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereRegMonth($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereRegYear($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereSecondName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereSharing($value)
 * @method static \Illuminate\Database\Eloquent\Builder|family whereThirdName($value)
 */
	class family extends \Eloquent {}
}

namespace App\Models{
/**
 * Class guestbook
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string name
 * @property string email
 * @property string comment
 * @property string datetime
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $comment
 * @property string $datetime
 * @method static \Illuminate\Database\Eloquent\Builder|guestbook newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|guestbook newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|guestbook query()
 * @method static \Illuminate\Database\Eloquent\Builder|guestbook whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|guestbook whereDatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|guestbook whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|guestbook whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|guestbook whereName($value)
 */
	class guestbook extends \Eloquent {}
}

namespace App\Models{
/**
 * Class hegoog
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string hegoog
 * @property int $id
 * @property string $hegoog
 * @method static \Illuminate\Database\Eloquent\Builder|hegoog newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|hegoog newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|hegoog query()
 * @method static \Illuminate\Database\Eloquent\Builder|hegoog whereHegoog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|hegoog whereId($value)
 */
	class hegoog extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ips
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property integer ips
 * @property string code
 * @property int $ips
 * @property string $code
 * @method static \Illuminate\Database\Eloquent\Builder|ips newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ips newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ips query()
 * @method static \Illuminate\Database\Eloquent\Builder|ips whereCode($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ips whereIps($value)
 */
	class ips extends \Eloquent {}
}

namespace App\Models{
/**
 * Class links
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string subject
 * @property string link
 * @property int $id
 * @property string $subject
 * @property string|null $link
 * @method static \Illuminate\Database\Eloquent\Builder|links newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|links newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|links query()
 * @method static \Illuminate\Database\Eloquent\Builder|links whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|links whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|links whereSubject($value)
 */
	class links extends \Eloquent {}
}

namespace App\Models{
/**
 * Class mail_list
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string email
 * @property int $id
 * @property string $email
 * @method static \Illuminate\Database\Eloquent\Builder|mail_list newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|mail_list newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|mail_list query()
 * @method static \Illuminate\Database\Eloquent\Builder|mail_list whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|mail_list whereId($value)
 */
	class mail_list extends \Eloquent {}
}

namespace App\Models{
/**
 * Class migrations
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string migration
 * @property integer batch
 * @property int $id
 * @property string $migration
 * @property int $batch
 * @method static \Illuminate\Database\Eloquent\Builder|migrations newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|migrations newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|migrations query()
 * @method static \Illuminate\Database\Eloquent\Builder|migrations whereBatch($value)
 * @method static \Illuminate\Database\Eloquent\Builder|migrations whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|migrations whereMigration($value)
 */
	class migrations extends \Eloquent {}
}

namespace App\Models{
/**
 * Class password_resets
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string email
 * @property string token
 * @property string|\Carbon\Carbon created_at
 * @property string $email
 * @property string $token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @method static \Illuminate\Database\Eloquent\Builder|password_resets newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|password_resets newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|password_resets query()
 * @method static \Illuminate\Database\Eloquent\Builder|password_resets whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|password_resets whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|password_resets whereToken($value)
 */
	class password_resets extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ra_book
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string title
 * @property string puplish_date
 * @property string puplish_house
 * @property string about_book
 * @property string book_link
 * @property string cover_link
 * @property integer hegoog
 * @property int $id
 * @property string $title
 * @property string|null $puplish_date
 * @property string|null $puplish_house
 * @property string|null $about_book
 * @property string|null $book_link
 * @property string|null $cover_link
 * @property int|null $hegoog
 * @method static \Illuminate\Database\Eloquent\Builder|ra_book newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_book newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_book query()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_book whereAboutBook($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_book whereBookLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_book whereCoverLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_book whereHegoog($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_book whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_book wherePuplishDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_book wherePuplishHouse($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_book whereTitle($value)
 */
	class ra_book extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ra_class
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property integer pages_id
 * @property string class_n
 * @property string description
 * @property integer publish
 * @property int $id
 * @property int|null $pages_id
 * @property string $class_n
 * @property string|null $description
 * @property int $publish
 * @method static \Illuminate\Database\Eloquent\Builder|ra_class newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_class newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_class query()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_class whereClassN($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_class whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_class whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_class wherePagesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_class wherePublish($value)
 */
	class ra_class extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ra_content
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string title
 * @property string pages_id
 * @property string class_id
 * @property string content
 * @property string picture
 * @property string created
 * @property string modified
 * @property integer view
 * @property integer reply
 * @property string writer
 * @property integer sent
 * @property integer userid
 * @property integer publish
 * @property int $id
 * @property string $title
 * @property string|null $pages_id
 * @property string|null $class_id
 * @property string|null $content
 * @property string|null $picture
 * @property string|null $created
 * @property string|null $modified
 * @property int|null $view
 * @property int|null $reply
 * @property string|null $writer
 * @property int $sent
 * @property int $userid
 * @property int $publish
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content query()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content whereContent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content whereCreated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content whereModified($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content wherePagesId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content wherePicture($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content wherePublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content whereReply($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content whereSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content whereUserid($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content whereView($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_content whereWriter($value)
 */
	class ra_content extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ra_counter
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string ID
 * @property string Count
 * @property string $ID
 * @property string|null $Count
 * @method static \Illuminate\Database\Eloquent\Builder|ra_counter newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_counter newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_counter query()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_counter whereCount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_counter whereID($value)
 */
	class ra_counter extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ra_job_class
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string takhsos
 * @property string description
 * @property integer publish
 * @property int $id
 * @property string $takhsos
 * @property string|null $description
 * @property int $publish
 * @method static \Illuminate\Database\Eloquent\Builder|ra_job_class newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_job_class newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_job_class query()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_job_class whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_job_class whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_job_class wherePublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_job_class whereTakhsos($value)
 */
	class ra_job_class extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ra_pages
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string pages
 * @property string description
 * @property integer publish
 * @property int $id
 * @property string $pages
 * @property string|null $description
 * @property int $publish
 * @method static \Illuminate\Database\Eloquent\Builder|ra_pages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_pages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_pages query()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_pages whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_pages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_pages wherePages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_pages wherePublish($value)
 */
	class ra_pages extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ra_reply
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property integer id
 * @property integer content_id
 * @property integer r_id
 * @property string r_name
 * @property string r_email
 * @property string r_answer
 * @property string r_datetime
 * @property string publish
 * @property integer readable
 * @property int $id
 * @property int $content_id
 * @property int $r_id
 * @property string $r_name
 * @property string $r_email
 * @property string $r_answer
 * @property string $r_datetime
 * @property string $publish
 * @property int $readable
 * @method static \Illuminate\Database\Eloquent\Builder|ra_reply newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_reply newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_reply query()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_reply whereContentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_reply whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_reply wherePublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_reply whereRAnswer($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_reply whereRDatetime($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_reply whereREmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_reply whereRId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_reply whereRName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_reply whereReadable($value)
 */
	class ra_reply extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ra_upload
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property integer userid
 * @property string file_name
 * @property string|\Carbon\Carbon upload_date
 * @property integer size
 * @property string type
 * @property string caption
 * @property int $id
 * @property int $userid
 * @property string $file_name
 * @property \Illuminate\Support\Carbon $upload_date
 * @property int $size
 * @property string $type
 * @property string $caption
 * @method static \Illuminate\Database\Eloquent\Builder|ra_upload newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_upload newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_upload query()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_upload whereCaption($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_upload whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_upload whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_upload whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_upload whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_upload whereUploadDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_upload whereUserid($value)
 */
	class ra_upload extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ra_useronline
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string ip
 * @property string file
 * @property int $timestamp
 * @property string $ip
 * @property string $file
 * @method static \Illuminate\Database\Eloquent\Builder|ra_useronline newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_useronline newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_useronline query()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_useronline whereFile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_useronline whereIp($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_useronline whereTimestamp($value)
 */
	class ra_useronline extends \Eloquent {}
}

namespace App\Models{
/**
 * Class ra_users
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string first_name
 * @property string last_name
 * @property string email_address
 * @property string username
 * @property string password
 * @property string info
 * @property string user_level
 * @property string|\Carbon\Carbon signup_date
 * @property string|\Carbon\Carbon last_login
 * @property string activated
 * @property integer upload_no
 * @property int $id
 * @property string $first_name
 * @property string $last_name
 * @property string $email_address
 * @property string $username
 * @property string $password
 * @property string $info
 * @property string $user_level
 * @property \Illuminate\Support\Carbon $signup_date
 * @property \Illuminate\Support\Carbon $last_login
 * @property string $activated
 * @property int $upload_no
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users query()
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users whereActivated($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users whereEmailAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users whereFirstName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users whereInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users whereLastLogin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users whereLastName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users whereSignupDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users whereUploadNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users whereUserLevel($value)
 * @method static \Illuminate\Database\Eloquent\Builder|ra_users whereUsername($value)
 */
	class ra_users extends \Eloquent {}
}

namespace App\Models{
/**
 * Class salebranches
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string mobile
 * @property string name
 * @property string mail
 * @property string date
 * @property string price1
 * @property string type1
 * @property string message
 * @property int $id
 * @property string $mobile
 * @property string $name
 * @property string $mail
 * @property \Illuminate\Support\Carbon|null $date
 * @property string $price1
 * @property string $type1
 * @property string|null $message
 * @method static \Illuminate\Database\Eloquent\Builder|salebranches newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|salebranches newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|salebranches query()
 * @method static \Illuminate\Database\Eloquent\Builder|salebranches whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|salebranches whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|salebranches whereMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|salebranches whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|salebranches whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|salebranches whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|salebranches wherePrice1($value)
 * @method static \Illuminate\Database\Eloquent\Builder|salebranches whereType1($value)
 */
	class salebranches extends \Eloquent {}
}

namespace App\Models{
/**
 * Class shakawi
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string name
 * @property string mail
 * @property string date
 * @property string message
 * @property int $id
 * @property string $name
 * @property string $mail
 * @property \Illuminate\Support\Carbon|null $date
 * @property string|null $message
 * @method static \Illuminate\Database\Eloquent\Builder|shakawi newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|shakawi newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|shakawi query()
 * @method static \Illuminate\Database\Eloquent\Builder|shakawi whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|shakawi whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|shakawi whereMail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|shakawi whereMessage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|shakawi whereName($value)
 */
	class shakawi extends \Eloquent {}
}

namespace App\Models{
/**
 * Class sms_groups
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string name
 * @property string description
 * @property integer publish
 * @property int $id
 * @property string $name
 * @property string|null $description
 * @property int $publish
 * @method static \Illuminate\Database\Eloquent\Builder|sms_groups newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|sms_groups newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|sms_groups query()
 * @method static \Illuminate\Database\Eloquent\Builder|sms_groups whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sms_groups whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sms_groups whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sms_groups wherePublish($value)
 */
	class sms_groups extends \Eloquent {}
}

namespace App\Models{
/**
 * Class sms_recieved
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string number
 * @property string name
 * @property integer sms_groups_id
 * @property int $id
 * @property string $number
 * @property string|null $name
 * @property int $sms_groups_id
 * @method static \Illuminate\Database\Eloquent\Builder|sms_recieved newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|sms_recieved newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|sms_recieved query()
 * @method static \Illuminate\Database\Eloquent\Builder|sms_recieved whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sms_recieved whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sms_recieved whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sms_recieved whereSmsGroupsId($value)
 */
	class sms_recieved extends \Eloquent {}
}

namespace App\Models{
/**
 * Class sound
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property integer page_id
 * @property integer class_id
 * @property string date
 * @property string snd_name
 * @property string file_name
 * @property integer size
 * @property string type
 * @property string visit
 * @property string download
 * @property string sent
 * @property integer soundtype
 * @property int $id
 * @property int|null $page_id
 * @property int|null $class_id
 * @property string $date
 * @property string $snd_name
 * @property string $file_name
 * @property int $size
 * @property string $type
 * @property string $visit
 * @property string $download
 * @property string $sent
 * @property int $soundtype
 * @method static \Illuminate\Database\Eloquent\Builder|sound newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|sound newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|sound query()
 * @method static \Illuminate\Database\Eloquent\Builder|sound whereClassId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound whereDownload($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound whereFileName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound whereSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound whereSize($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound whereSndName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound whereSoundtype($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound whereVisit($value)
 */
	class sound extends \Eloquent {}
}

namespace App\Models{
/**
 * Class sound_class
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property integer page_id
 * @property string class_name
 * @property string description
 * @property integer publish
 * @property int $id
 * @property int $page_id
 * @property string $class_name
 * @property string $description
 * @property int $publish
 * @method static \Illuminate\Database\Eloquent\Builder|sound_class newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|sound_class newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|sound_class query()
 * @method static \Illuminate\Database\Eloquent\Builder|sound_class whereClassName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound_class whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound_class whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound_class wherePageId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound_class wherePublish($value)
 */
	class sound_class extends \Eloquent {}
}

namespace App\Models{
/**
 * Class sound_pages
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string pages
 * @property string description
 * @property integer publish
 * @property int $id
 * @property string $pages
 * @property string|null $description
 * @property int $publish
 * @method static \Illuminate\Database\Eloquent\Builder|sound_pages newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|sound_pages newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|sound_pages query()
 * @method static \Illuminate\Database\Eloquent\Builder|sound_pages whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound_pages whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound_pages wherePages($value)
 * @method static \Illuminate\Database\Eloquent\Builder|sound_pages wherePublish($value)
 */
	class sound_pages extends \Eloquent {}
}

namespace App\Models{
/**
 * Class stats
 *
 * @package App\Models
 * @version March 23, 2020, 7:30 pm UTC
 * @property string ip
 * @property string date
 * @property integer hits
 * @property string $ip
 * @property string $date
 * @property int $hits
 * @method static \Illuminate\Database\Eloquent\Builder|stats newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|stats newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|stats query()
 * @method static \Illuminate\Database\Eloquent\Builder|stats whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|stats whereHits($value)
 * @method static \Illuminate\Database\Eloquent\Builder|stats whereIp($value)
 */
	class stats extends \Eloquent {}
}

namespace App\Models{
/**
 * Class users
 *
 * @package App\Models
 * @version March 23, 2020, 7:31 pm UTC
 * @property string name
 * @property string email
 * @property string|\Carbon\Carbon email_verified_at
 * @property string password
 * @property string remember_token
 * @property string|\Carbon\Carbon created_at
 * @property string|\Carbon\Carbon updated_at
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|users newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|users newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|users query()
 * @method static \Illuminate\Database\Eloquent\Builder|users whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|users whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|users whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|users whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|users whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|users wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|users whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|users whereUpdatedAt($value)
 */
	class users extends \Eloquent {}
}

namespace App\Models{
/**
 * Class video
 *
 * @package App\Models
 * @version March 23, 2020, 7:31 pm UTC
 * @property integer video_class
 * @property string date
 * @property string video_name
 * @property string video_link
 * @property string pic_link
 * @property integer visit
 * @property integer sent
 * @property int $id
 * @property int|null $video_class
 * @property string $date
 * @property string $video_name
 * @property string $video_link
 * @property string $pic_link
 * @property int $visit
 * @property int $sent
 * @method static \Illuminate\Database\Eloquent\Builder|video newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|video newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|video query()
 * @method static \Illuminate\Database\Eloquent\Builder|video whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video wherePicLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereSent($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereVideoClass($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereVideoLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereVideoName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video whereVisit($value)
 */
	class video extends \Eloquent {}
}

namespace App\Models{
/**
 * Class video_class
 *
 * @package App\Models
 * @version March 23, 2020, 7:31 pm UTC
 * @property string video_class
 * @property string comment
 * @property boolean publish
 * @property int $id
 * @property string $video_class
 * @property string $comment
 * @property bool $publish
 * @method static \Illuminate\Database\Eloquent\Builder|video_class newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|video_class newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|video_class query()
 * @method static \Illuminate\Database\Eloquent\Builder|video_class whereComment($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video_class whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video_class wherePublish($value)
 * @method static \Illuminate\Database\Eloquent\Builder|video_class whereVideoClass($value)
 */
	class video_class extends \Eloquent {}
}

namespace App{
/**
 * App\User
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereEmailVerifiedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

