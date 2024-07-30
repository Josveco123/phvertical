<?php

// @formatter:off
// phpcs:ignoreFile
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Models\Admin{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $password
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin query()
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Admin whereUpdatedAt($value)
 */
	class Admin extends \Eloquent {}
}

namespace App\Models\Prop{
/**
 * 
 *
 * @property int $id
 * @property int $prop_id
 * @property string $agent_name
 * @property int $user_id
 * @property string $name
 * @property string $email
 * @property string $phone
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|AllRequest newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AllRequest newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|AllRequest query()
 * @method static \Illuminate\Database\Eloquent\Builder|AllRequest whereAgentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllRequest whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllRequest whereEmail($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllRequest whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllRequest whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllRequest wherePhone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllRequest wherePropId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllRequest whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|AllRequest whereUserId($value)
 */
	class AllRequest extends \Eloquent {}
}

namespace App\Models\Prop{
/**
 * 
 *
 * @property int $id
 * @property string $hometypes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|HomeType newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeType newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeType query()
 * @method static \Illuminate\Database\Eloquent\Builder|HomeType whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeType whereHometypes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeType whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|HomeType whereUpdatedAt($value)
 */
	class HomeType extends \Eloquent {}
}

namespace App\Models\Prop{
/**
 * 
 *
 * @property int $id
 * @property int $prop_id
 * @property string $image
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \App\Models\Prop\Property $property
 * @method static \Illuminate\Database\Eloquent\Builder|PropImage newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropImage newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|PropImage query()
 * @method static \Illuminate\Database\Eloquent\Builder|PropImage whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropImage whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropImage whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropImage wherePropId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|PropImage whereUpdatedAt($value)
 */
	class PropImage extends \Eloquent {}
}

namespace App\Models\Prop{
/**
 * 
 *
 * @property int $id
 * @property string $title
 * @property string $price
 * @property string $image
 * @property string $beds
 * @property string $baths
 * @property string $sq_ft
 * @property string $home_type
 * @property string $year_built
 * @property string $price_sqft
 * @property string $more_info
 * @property string $location
 * @property string $agent_name
 * @property string $type
 * @property string $city
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \App\Models\Prop\PropImage> $images
 * @property-read int|null $images_count
 * @method static \Illuminate\Database\Eloquent\Builder|Property newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Property query()
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereAgentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereBaths($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereBeds($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereHomeType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereMoreInfo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property wherePriceSqft($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereSqFt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Property whereYearBuilt($value)
 */
	class Property extends \Eloquent {}
}

namespace App\Models\Prop{
/**
 * 
 *
 * @property int $id
 * @property int $prop_id
 * @property int $user_id
 * @property string $title
 * @property string $image
 * @property string $location
 * @property string $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|SavedProp newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SavedProp newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|SavedProp query()
 * @method static \Illuminate\Database\Eloquent\Builder|SavedProp whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavedProp whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavedProp whereImage($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavedProp whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavedProp wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavedProp wherePropId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavedProp whereTitle($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavedProp whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|SavedProp whereUserId($value)
 */
	class SavedProp extends \Eloquent {}
}

namespace App\Models{
/**
 * 
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $role
 * @property \Illuminate\Support\Carbon|null $email_verified_at
 * @property mixed $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection<int, \Illuminate\Notifications\DatabaseNotification> $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection<int, \Laravel\Sanctum\PersonalAccessToken> $tokens
 * @property-read int|null $tokens_count
 * @method static \Database\Factories\UserFactory factory($count = null, $state = [])
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
 * @method static \Illuminate\Database\Eloquent\Builder|User whereRole($value)
 * @method static \Illuminate\Database\Eloquent\Builder|User whereUpdatedAt($value)
 */
	class User extends \Eloquent {}
}

