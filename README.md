[![Laravel Forge Site Deployment Status](https://img.shields.io/endpoint?url=https%3A%2F%2Fforge.laravel.com%2Fsite-badges%2F36d1f56a-25e5-4d5a-b031-4de2794055cc%3Fdate%3D1&style=flat-square)](https://forge.laravel.com/servers/677179/sites/1965718)


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

### Réseaux Sociaux
```html
{{ $creator->sn_tiktok }}
{{ $creator->sn_snapchat }}
{{ $creator->sn_instagram }}
{{ $creator->sn_youtube }}
{{ $creator->sn_linkedin }}
{{ $creator->sn_facebook }}
{{ $creator->sn_twitter }}
{{ $creator->sn_twitch }}
```

### Nombre d'abonnés par réseaux
```html
{{ $creator->tn_tiktok }}
{{ $creator->tn_snapchat }}
{{ $creator->tn_instagram }}
{{ $creator->tn_youtube }}
{{ $creator->tn_linkedin }}
{{ $creator->tn_facebook }}
{{ $creator->tn_twitter }}
{{ $creator->tn_twitch }}
```

### Email
```html
{{ $creator->email }}
```

### Domaine
```html
@foreach ($creator->specialties as $specialty)
    {{ $specialty->label }}
@endforeach
```

### PARTAGE
```html
{{ route('front.creator', $creator->id) }}
```


## Études de cas

### Loop
```html
@foreach (App\Models\CaseStudy::all() as $case)
    <--- do the magic --->
@endforeach
```

### Visuel
```html
<img class="" src="{{ Storage::disk('uploads')->url($case->image) }}" alt="">
```
    
### Client
```html
{{ $case->client }}
```
    
### Année
```html
{{ $case->year }}
```
    
### Description
```html
{{ $case->description }}
```

### Bloc WYSIWYG
```html
{!! $case->bloc_wysiwyg !!}
```

### Tags
```html
@foreach ($case->tags as $tag)
    {{ $tag->label }}
@endforeach
```

### Créateurs de l'étude de cas
```html
@foreach ($case->creators as $creator)
    {{ $creator->first_name }}
    {{ $creator->last_name }}
    {{ $creator->nick_name }}
    ...
@endforeach
```

### Autres créateurs de l'étude de cas
```php	
$others = explode(',', $case->others);
$countOthers = count($others);

foreach ($others as $other) {
    echo $other . '<br>';
}
```

### PARTAGE
```html
{{ route('front.case', $case->id) }}
```


## Marques partenaires

### Loop
```html
@foreach (App\Models\Mark::all() as $mark)
    <--- do the magic --->
@endforeach
```

### Visuel
```html
<img class="" src="{{ Storage::disk('uploads')->url($mark->image) }}" alt="">
```

### Label
```html
{{ $mark->label }}
```


## Témoignages

### Loop
```html
@foreach (App\Models\Testimonial::all() as $testimonial)
    <--- do the magic --->
@endforeach
```

### Visuel
```html
<img class="" src="{{ Storage::disk('uploads')->url($testimonial->image) }}" alt="">
```

### Label
e.g. nom du créateur ou de l'entreprise
```html
{{ $testimonial->label }}
```

### Texte
```html
{{ $testimonial->text }}
```

### Type
Créateur ou Entreprise
```html
{{ $testimonial->type }}
```
