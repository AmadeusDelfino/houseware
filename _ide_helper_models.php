<?php

// @formatter:off
/**
 * A helper file for your Eloquent Models
 * Copy the phpDocs from this file to the correct Model,
 * And remove them from this file, to prevent double declarations.
 *
 * @author Barry vd. Heuvel <barryvdh@gmail.com>
 */


namespace App\Domains\House\Models{
/**
 * App\Domains\House\Models\House
 *
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Domains\HousePhoto\HousePhoto[] $photos
 * @property-read int|null $photos_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\House\Models\House newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\House\Models\House newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\House\Models\House query()
 */
	class House extends \Eloquent {}
}

namespace App\Domains\HousePhoto{
/**
 * App\Domains\HousePhoto\HousePhoto
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\HousePhoto\HousePhoto newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\HousePhoto\HousePhoto newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\HousePhoto\HousePhoto query()
 */
	class HousePhoto extends \Eloquent {}
}

namespace App\Domains\Auth\Models{
/**
 * App\Domains\Auth\Models\User
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property string|null $remember_token
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Client[] $clients
 * @property-read int|null $clients_count
 * @property-read \Illuminate\Notifications\DatabaseNotificationCollection|\Illuminate\Notifications\DatabaseNotification[] $notifications
 * @property-read int|null $notifications_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Laravel\Passport\Token[] $tokens
 * @property-read int|null $tokens_count
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\User byPassword($password)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\User byUsername($username)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\User newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\User newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\User query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\User whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\User whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\User wherePassword($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\User whereRememberToken($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\User whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\User whereUsername($value)
 */
	class User extends \Eloquent {}
}

namespace App\Domains\Auth\Models{
/**
 * App\Domains\Auth\Models\Token
 *
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\Token newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\Token newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Domains\Auth\Models\Token query()
 */
	class Token extends \Eloquent {}
}

