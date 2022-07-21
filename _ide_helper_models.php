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
 * App\Models\FollowupTemuan
 *
 * @property int $id
 * @property int $user_id
 * @property int $temuan_id
 * @property string $status
 * @property string|null $catatan
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuan query()
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuan whereCatatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuan whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuan whereTemuanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuan whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuan whereUserId($value)
 */
	class FollowupTemuan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\FollowupTemuanDetail
 *
 * @property int $id
 * @property int $followup_temuan_id
 * @property int $pertanyaan_followup_temuan_id
 * @property string $jawaban
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuanDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuanDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuanDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuanDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuanDetail whereFollowupTemuanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuanDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuanDetail whereJawaban($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuanDetail wherePertanyaanFollowupTemuanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|FollowupTemuanDetail whereUpdatedAt($value)
 */
	class FollowupTemuanDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\MenuTemuan
 *
 * @property int $id
 * @property string $nama_menu_temuan
 * @property int|null $topik_temuan_id
 * @property int|null $menu_temuan_id
 * @property int $punya_submenu
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\TopikTemuan|null $topiktemuan
 * @method static \Illuminate\Database\Eloquent\Builder|MenuTemuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuTemuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuTemuan query()
 * @method static \Illuminate\Database\Eloquent\Builder|MenuTemuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuTemuan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuTemuan whereMenuTemuanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuTemuan whereNamaMenuTemuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuTemuan wherePunyaSubmenu($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuTemuan whereTopikTemuanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|MenuTemuan whereUpdatedAt($value)
 */
	class MenuTemuan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PertanyaanFollowupTemuan
 *
 * @property int $id
 * @property string $nama_pertanyaan_followup_temuan
 * @property string|null $satuan
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanFollowupTemuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanFollowupTemuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanFollowupTemuan query()
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanFollowupTemuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanFollowupTemuan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanFollowupTemuan whereNamaPertanyaanFollowupTemuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanFollowupTemuan whereSatuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanFollowupTemuan whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanFollowupTemuan whereUpdatedAt($value)
 */
	class PertanyaanFollowupTemuan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\PertanyaanTemuan
 *
 * @property int $id
 * @property int $menu_temuan_id
 * @property string $nama_pertanyaan_temuan
 * @property string|null $satuan
 * @property string $type
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanTemuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanTemuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanTemuan query()
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanTemuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanTemuan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanTemuan whereMenuTemuanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanTemuan whereNamaPertanyaanTemuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanTemuan whereSatuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanTemuan whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PertanyaanTemuan whereUpdatedAt($value)
 */
	class PertanyaanTemuan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\Temuan
 *
 * @property int $id
 * @property int $user_id
 * @property int $menu_temuan_id
 * @property string $status
 * @property string|null $catatan
 * @property string|null $followup_sebelum_tanggal
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\TemuanDetail[] $detail
 * @property-read int|null $detail_count
 * @property-read \Spatie\MediaLibrary\MediaCollections\Models\Collections\MediaCollection|\Spatie\MediaLibrary\MediaCollections\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\Models\MenuTemuan|null $menutemuan
 * @property-read \App\Models\User|null $user
 * @method static \Illuminate\Database\Eloquent\Builder|Temuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Temuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Temuan query()
 * @method static \Illuminate\Database\Eloquent\Builder|Temuan whereCatatan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Temuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Temuan whereFollowupSebelumTanggal($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Temuan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Temuan whereMenuTemuanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Temuan whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Temuan whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Temuan whereUserId($value)
 */
	class Temuan extends \Eloquent implements \Spatie\MediaLibrary\HasMedia {}
}

namespace App\Models{
/**
 * App\Models\TemuanDetail
 *
 * @property int $id
 * @property int $temuan_id
 * @property int $pertanyaan_temuan_id
 * @property string $jawaban
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\PertanyaanTemuan|null $pertanyaan_temuan
 * @property-read \App\Models\Temuan|null $temuan
 * @method static \Illuminate\Database\Eloquent\Builder|TemuanDetail newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TemuanDetail newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TemuanDetail query()
 * @method static \Illuminate\Database\Eloquent\Builder|TemuanDetail whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TemuanDetail whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TemuanDetail whereJawaban($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TemuanDetail wherePertanyaanTemuanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TemuanDetail whereTemuanId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TemuanDetail whereUpdatedAt($value)
 */
	class TemuanDetail extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\TopikTemuan
 *
 * @property int $id
 * @property string $nama_topik_temuan
 * @property string|null $icon_url
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|TopikTemuan newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TopikTemuan newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|TopikTemuan query()
 * @method static \Illuminate\Database\Eloquent\Builder|TopikTemuan whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopikTemuan whereIconUrl($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopikTemuan whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopikTemuan whereNamaTopikTemuan($value)
 * @method static \Illuminate\Database\Eloquent\Builder|TopikTemuan whereUpdatedAt($value)
 */
	class TopikTemuan extends \Eloquent {}
}

namespace App\Models{
/**
 * App\Models\User
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
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Permission[] $permissions
 * @property-read int|null $permissions_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\Permission\Models\Role[] $roles
 * @property-read int|null $roles_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Sanctum\PersonalAccessToken[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory(...$parameters)
 * @method static \Illuminate\Database\Eloquent\Builder|User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|User permission($permissions)
 * @method static \Illuminate\Database\Eloquent\Builder|User query()
 * @method static \Illuminate\Database\Eloquent\Builder|User role($roles, $guard = null)
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

