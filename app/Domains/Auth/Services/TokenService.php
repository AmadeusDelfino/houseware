<?php


namespace App\Domains\Auth\Services;


use App\Domains\Auth\Models\User;
use Carbon\Carbon;

class TokenService
{
    public function generateToken($userId, $lifetimeInDays = null)
    {
        if(is_null($lifetimeInDays)) {
            $lifetimeInDays = config('auth.guards.api.token_lifetime_in_days');
        }

        $tokenResult = User::findOrFail($userId)->createToken('Personal Access Token');
        $tokenResult->token->expires_at = Carbon::now()->addDays($lifetimeInDays);
        $tokenResult->token->save();

        return $tokenResult->accessToken;
    }
}
