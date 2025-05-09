<?php

namespace App\Policies;

use App\Models\Produk;
use App\Models\User;

class ProdukPolicy
{
    public function update(User $user, Produk $produk)
    {
        return $user->id === $produk->user_id;
    }

    public function delete(User $user, Produk $produk)
    {
        return $user->id === $produk->user_id;
    }
}
