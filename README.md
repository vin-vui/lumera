
# __Blocs blade__

## Créateurs
```html
@foreach (App\Models\Creator::where('display', true)->get() as $creator)
    <--- do the magic --->
@endforeach
```

### Visuel
```html
<img class="" src="{{ Storage::disk('uploads')->url($creator->image) }}" alt="">
```

### Nom / Prénom / Pseudo
```html
{{ $creator->last_name }}
{{ $creator->first_name }}
{{ $creator->nick_name }}
```

### Description
```html
{{ $creator->description }}
```

### Localisation
```html
{{ $creator->location }}
```

### Réseaux Sociaux
```html
{{ $creator->sn_tiktok }}
{{ $creator->sn_snapchat }}
{{ $creator->sn_instagram }}
{{ $creator->sn_youtube }}
{{ $creator->sn_linkedin }}
```

### Domaine
```html
@if ($creator->specialty_id != null && $creator->specialty()->exists())
    {{ $creator->specialty->label }}
@else
    <--- manquant --->
@endif
```


## Études de cas

### Loop
```html
@foreach (App\Models\CaseStudy::all() as $case)
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

### bloc tiktok/insta
```html
{!! $case->bloc !!}
```

### tags
```html
@foreach ($case->tags as $tag)
    {{ $tag->label }}
@endforeach
```
