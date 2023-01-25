
# __Blocs blade__


## Études de cas

### Loop
```html
@foreach ($cases as $case)
    <--- do the magic --->
@endforeach
```

### logo
```html
<img class="" src="{{ Storage::disk('uploads')->url($case->logo) }}" alt="">
```
    
### type
```html
@switch($case->type)
    @case('tiktok')
        // tiktok
        @break
    @case('instagram')
        // réel
        @break
    @case('twitch')
        // twitch
        @break
@endswitch
```
    
### titre
```html
{{ $case->title }}
```
    
### description
```html
{{ $case->description }}
```

### tags
```html
@foreach ($case->tags as $tag)
    {{ $tag->label }}
@endforeach
```
