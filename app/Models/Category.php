<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = ['id', 'created_at', 'updated_at', 'deleted_at'];

    public function recipes()
    {
        return $this->hasMany(Recipe::class);
    }

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function getSubCategoriesAttribute()
    {
        return Category::orderBy('name', 'asc')->where('category_id', $this->id)->get();
    }

    public function getRecipesAttribute()
    {
        return Recipe::orderBy('grade', 'asc')->where('category_id', $this->id)->get();
    }

    public function getTopParentCategoryAttribute(): Category
    {
        return $this->getTopParentCategory($this);
    }

    public function getPreTopParentCategoryAttribute(): Category
    {
        return $this->getPreTopParentCategory($this);
    }

    public function getTopParentCategory(Category $category): Category
    {
        $parentId = $category->category_id;
        $parentCategory = Category::find($parentId);

        return $parentId ? $this->getTopParentCategory($parentCategory) : $category;
    }

    public function getPreTopParentCategory(Category $category): Category
    {
        $parentId = $category->category_id;
        $parentCategory = Category::find($parentId);
        $isParentCategoryHasParent = $parentCategory->category_id ?? null;

        return $isParentCategoryHasParent ? $this->getPreTopParentCategory($parentCategory) : $category;
    }

}
