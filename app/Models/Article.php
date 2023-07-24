<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Concerns\HasUuids;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasOne;

/**
 * App\Models\Articles
 *
 * @property string $id
 * @property string $title
 * @property string $short_description
 * @property string $link
 * @method static \Illuminate\Database\Eloquent\Builder|Article newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Article query()
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereLink($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereShortDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereTitle($value)
 * @property string $author
 * @property string $description
 * @property string|null $thumbnail_id
 * @property-read \App\Models\Image|null $thumbnail
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereAuthor($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereThumbnailId($value)
 * @property string $date_published
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereDatePublished($value)
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Article whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Article extends Model
{
    use HasFactory, HasUuids;

    protected $fillable = [
        "title",
        "author",
        "date_published",
        "description",
        "link",
        "thumbnail_id",
    ];

    public function thumbnail(): HasOne
    {
        return $this->hasOne(Image::class, 'id', 'thumbnail_id');
    }
}
