<img class="{{ $class ?? '' }}" id="{{ $id ?? '' }}"
    src={{ url(isset($image) ? 'storage/images/' . $image->id : $defaultSrc ?? 'assets/no-image.png') }}
    alt="{{ $alt ?? ((isset($image) ? $image->title : null) ?? '') }}" />
