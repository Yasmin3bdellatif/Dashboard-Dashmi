<?php

namespace App\Policies;

use App\Models\Product;
use App\Models\User;
use Illuminate\Auth\Access\HandlesAuthorization;

class ProductPolicy
{
    use HandlesAuthorization;

    public function viewAny(User $user)
    {
        return true;
    }

    public function view(User $user, Product $product)
    {
        return $user->role === 'admin' || $user->id === $product->user_id;
    }

    public function create(User $user)
    {
        return $user->role === 'editor' || $user->role === 'admin';
    }

    public function update(User $user, Product $product)
    {
        return $user->role === 'admin' || $user->id === $product->user_id;
    }

    public function delete(User $user, Product $product)
    {
        return $user->role === 'admin' || $user->id === $product->user_id;
    }

    public function publish(User $user, Product $product)
    {
        return $user->role === 'supervisor';
    }
}
