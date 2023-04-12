
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
{{ $creator->sn_pinterest }}
{{ $creator->sn_twitter }}
{{ $creator->sn_twitch }}
```

### Domaine
```html
@foreach ($creator->specialties as $specialty)
    {{ $specialty->label }}
@endforeach
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
<div class="trix">
    {!! $case->bloc_wysiwyg !!}
</div>
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
